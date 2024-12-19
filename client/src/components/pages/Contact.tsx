import { useEffect, useRef, useState } from 'react';
import '../../styles/mautic.css';
import DynamicContent from './DynamicContent';

const Contact = () => {
  const formRef = useRef<HTMLFormElement>(null);
  const [successMessage, setSuccessMessage] = useState('');
  const MAUTIC_DOMAIN = 'http://mautic-lando.lndo.site';

  const loadMauticScript = () => {
    const script = document.createElement('script');
    script.src = `${MAUTIC_DOMAIN}/media/js/mautic-form.js?vafb3c98e`;
    script.async = true;
    script.onload = () => {
      if (window.MauticSDK?.onLoad) {
        window.MauticSDK.onLoad();
      }
    };
    script.onerror = () => {
      console.error('Error loading Mautic script.');
    };
    document.body.appendChild(script);
    return script;
  };

  useEffect(() => {
    window.MauticDomain = MAUTIC_DOMAIN;
    window.MauticLang = { submittingMessage: 'Please wait...' };
    const mauticScript = loadMauticScript();
    return () => {
      if (mauticScript) document.body.removeChild(mauticScript);
    };
  }, []);

  const handleSubmit = async (event: React.FormEvent<HTMLFormElement>) => {
    event.preventDefault();
    if (!formRef.current) {
      console.error('Form reference is not available');
      return;
    }
    const formData = new FormData(formRef.current);
    try {
      const response = await fetch(`${MAUTIC_DOMAIN}/form/submit?formId=1`, {
        method: 'POST',
        mode: 'cors',
        credentials: 'include',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
        },
        body: formData,
      });
      const htmlText = await response.text();
      const match = htmlText.match(/parent\.postMessage\("(.+?)", '\*'\);/);
      if (!match) throw new Error('Invalid response format.');
      const decodedMessage = JSON.parse(`"${match[1].replace(/\\u/g, '\\u')}"`);
      const data = JSON.parse(decodedMessage);
      if (data.success) {
        setSuccessMessage(data.successMessage || 'Thank you! Your message has been sent successfully.');
        formRef.current.reset();
      } else {
        throw new Error(data.error || 'An unknown error occurred.');
      }
    } catch (error) {
      console.error('Error submitting form:', error);
      setSuccessMessage('There was an error submitting the form. Please try again.');
    }
  };

  return (
    <>
      <div className="relative w-full overflow-auto min-h-screen bg-gray-200 dark:bg-gray-700 m-0 p-0">
        <div className="flex flex-col md:flex-row items-center justify-center h-full w-full min-h-screen">
          <div className="flex flex-col dark:text-white items-center justify-center w-full md:w-1/2 h-full p-8">
            <h1 className="max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-center p-3 rounded-lg leading-tight mt-16 md:mt-24">
              Get in touch.
            </h1>
            <p className="mb-8 max-w-xl text-center">
              Our magic happens at our base in Länsi-Pasila, Helsinki, where close to thirty tech maestros are dedicated
              to creating uncompromising digital solutions.
            </p>
            <div className="flex justify-center w-full">
              <a href="/about-us" className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Get to know us</a>
            </div>
          </div>
        </div>
      </div>
      <div>
        <DynamicContent/>
      </div>
      <div className="relative w-full overflow-auto min-h-screen bg-gray-200 dark:bg-gray-700 m-0 p-0">
        <div className="flex flex-col items-center justify-center h-full w-full min-h-screen">
          {successMessage && (
            <div className="success-message" role="alert">
              {successMessage}
            </div>
          )}
          <h2 className="text-3xl font-bold dark:text-white mb-4">Send us a message</h2>
          <div className="flex flex-col md:flex-row items-center justify-center w-full md:w-1/2 h-full p-8">
            <form
              className="w-full max-w-lg"
              ref={formRef}
              onSubmit={handleSubmit}
              id="mauticform_contactform"
              data-mautic-form="contactform"
              encType="multipart/form-data"
              aria-labelledby="form-title"
            >
              <div className="mauticform-innerform">
                <div className="mauticform-row mauticform-text mauticform-field-1 mauticform-required">
                  <label htmlFor="mauticform_input_contactform_first_name">First Name</label>
                  <input
                    id="mauticform_input_contactform_first_name"
                    name="mauticform[first_name]"
                    placeholder="Enter your first name"
                    required
                    className="mauticform-input w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                    type="text"
                  />
                </div>
                <div className="mauticform-row mauticform-text mauticform-field-2 mauticform-required">
                  <label htmlFor="mauticform_input_contactform_last_name">Last Name</label>
                  <input
                    id="mauticform_input_contactform_last_name"
                    name="mauticform[last_name]"
                    placeholder="Enter your last name"
                    required
                    className="mauticform-input w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                    type="text"
                  />
                </div>
                <div className="mauticform-row mauticform-email mauticform-field-3 mauticform-required">
                  <label htmlFor="mauticform_input_contactform_email1">Email</label>
                  <input
                    id="mauticform_input_contactform_email1"
                    name="mauticform[email1]"
                    placeholder="Enter your email address"
                    required
                    className="mauticform-input w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                    type="email"
                  />
                </div>
                <div className="mauticform-row mauticform-text mauticform-field-4">
                  <label htmlFor="mauticform_input_contactform_company">Company</label>
                  <input
                    id="mauticform_input_contactform_company"
                    name="mauticform[company]"
                    placeholder="Enter your company name"
                    className="mauticform-input w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                    type="text"
                  />
                </div>
                <div className="mauticform-row mauticform-text mauticform-field-5 mauticform-required">
                  <label htmlFor="mauticform_input_contactform_phone">Phone</label>
                  <input
                    id="mauticform_input_contactform_phone"
                    name="mauticform[phone]"
                    placeholder="Enter your phone number"
                    className="mauticform-input w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                    type="tel"
                    required
                  />
                </div>
                <div className="mauticform-row mauticform-field-6">
                  <label htmlFor="mauticform_input_contactform_f_message">Message</label>
                  <textarea
                    id="mauticform_input_contactform_f_message"
                    name="mauticform[f_message]"
                    placeholder="Enter your message"
                    className="mauticform-textarea w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                    required
                  ></textarea>
                </div>
                <div className="mauticform-row mauticform-select mauticform-field-7">
                  <label htmlFor="mauticform_input_contactform_country">Country</label>
                  <select
                    id="mauticform_input_contactform_country"
                    name="mauticform[country]"
                    className="mauticform-selectbox w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                    required
                  >
                    <option value="">Select your country</option>
                    <option value="United States">United States</option>
                    <option value="Canada">Canada</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="Estonia">Estonia</option>
                  </select>
                </div>
              </div>
              <div className="mauticform-row mauticform-button-wrapper flex justify-center">
                <button
                  type="submit"
                  id="mauticform_input_contactform_submit"
                  className="mauticform-button btn bg-gray-100 dark:bg-gray-900 dark:text-white rounded-full my-5 mb-40 text-2xl"
                >
                  Submit
                </button>
              </div>
              <input type="hidden" name="mauticform[formId]" value="1" />
            </form>
            <div className="bg-gray-300 dark:bg-gray-600 rounded-lg shadow-lg overflow-hidden p-4 md:ml-16">
              <h3 className="text-xl font-bold text-left mt-4 dark:text-gray-200">Client support</h3>
              <p >+358 20 187 6601 (Mon to Fri 8–17)</p>
              <h3 className="text-xl font-bold text-left mt-4">Sales</h3>
              <p >+358 20 187 6600</p>
              <h3 className="text-xl font-bold text-left mt-4">Office</h3>
              <p >+358 20 187 6602</p>
              <p >Pasilankatu 2</p>
              <p >FI-00240 Helsinki</p>
              <p >Finland</p>
              <button className="bg-white dark:bg-gray-500 rounded-full px-2 mt-4 py-1 mx-1">
                Billing information
              </button>
            </div>
          </div>
        </div>
        <div className="flex flex-col items-center justify-center mt-20">
          <h2 className="text-3xl md:text-4xl font-bold dark:text-white text-center col-span-full mt-10">
            In­te­res­ted in joi­ning our team?{' '}
          </h2>
          <a href="/careers" className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2 my-10 mb-20">
            Take a look at our open positions
          </a>
        </div>
      </div>
    </>
  );
};

export default Contact;
