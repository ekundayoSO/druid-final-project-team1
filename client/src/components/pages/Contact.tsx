import { useEffect, useRef, useState } from 'react';
import servicesPic1 from '@/assets/arto-hymyilee-scaled.png';
import servicesIcon1 from '@/assets/jalleenmyytavat-palvelut.webp';
import servicesIcon2 from '@/assets/markkinoinnin-automaatiot.webp';
import servicesIcon3 from '@/assets/tietoturva-auditointi.webp';
import '../../styles/mautic.css';

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
      <div className="relative w-full overflow-auto min-h-screen bg-gray-700 m-0 p-0">
        <div className="flex flex-col md:flex-row items-center justify-center h-full w-full min-h-screen">
          <div className="flex flex-col items-center justify-center w-full md:w-1/2 h-full p-8">
            <h1 className="max-w-3xl text-4xl sm:text-5xl md:text-6xl font-bold text-white text-center p-3 rounded-lg leading-tight mt-16 md:mt-24">
              Get in touch.
            </h1>
            <p className="text-white mb-8 max-w-xl text-center">
              Our magic happens at our base in Länsi-Pasila, Helsinki, where close to thirty tech maestros are dedicated
              to creating uncompromising digital solutions.
            </p>
            <div className="flex justify-center w-full">
              <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Get to know us</button>
            </div>
          </div>
        </div>
      </div>
      <div className="relative w-full overflow-auto min-h-screen bg-gray-700 m-0 p-0">
        <div className="flex flex-col items-center justify-center h-full w-full min-h-screen">
          {successMessage && (
            <div className="success-message" role="alert">
              {successMessage}
            </div>
          )}
          <h2 className="text-3xl font-bold text-white mb-4">Send us a message</h2>
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
              <div className="mauticform-row mauticform-button-wrapper">
                <button
                  type="submit"
                  id="mauticform_input_contactform_submit"
                  className="mauticform-button btn btn-default bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >
                  Submit
                </button>
              </div>
              <input type="hidden" name="mauticform[formId]" value="1" />
            </form>
            <div className="bg-gray-600 rounded-lg shadow-lg overflow-hidden p-4 md:ml-16">
              <h3 className="text-xl font-bold text-left mt-4 text-gray-300">Client support</h3>
              <p className="text-gray-300">+358 20 187 6601 (Mon to Fri 8–17)</p>
              <h3 className="text-xl font-bold text-left mt-4 text-gray-300">Sales</h3>
              <p className="text-gray-300">+358 20 187 6600</p>
              <h3 className="text-xl font-bold text-left mt-4 text-gray-300">Office</h3>
              <p className="text-gray-300">+358 20 187 6602</p>
              <p className="text-gray-300">Pasilankatu 2</p>
              <p className="text-gray-300">FI-00240 Helsinki</p>
              <p className="text-gray-300">Finland</p>
              <button className="bg-gray-500 text-gray-300 rounded-full px-2 mt-4 py-1 mx-1">
                Billing information
              </button>
            </div>
          </div>
        </div>
        <div className="flex flex-col items-center justify-center">
          <div className="flex flex-wrap justify-center">
            <div className="rounded-lg overflow-hidden p-4 mb-2 mr-2 min-h-300 max-w-sm">
              <img
                src="https://via.placeholder.com/150"
                alt="Mikko Hämäläinen"
                className="w-full h-auto object-cover mb-2 rounded-full"
              />
              <div className="text-center">
                <h3 className="text-sm font-semibold text-gray-300">Mikko Hämäläinen</h3>
                <p className="text-xs text-gray-300">CEO</p>
                <p className="text-xs text-gray-300">+358 20 187 6603</p>
              </div>
            </div>
            <div className="rounded-lg overflow-hidden p-4 mb-2 mr-2 min-h-300 max-w-sm">
              <img
                src="https://via.placeholder.com/150"
                alt="Pasi Järnsstedt"
                className="w-full h-auto object-cover mb-2 rounded-full"
              />
              <div className="text-center">
                <h3 className="text-sm font-semibold text-gray-300">Pasi Järnsstedt</h3>
                <p className="text-xs text-gray-300">Director, Production</p>
              </div>
            </div>
            <div className="rounded-lg overflow-hidden p-4 mb-2 mr-2 min-h-300 max-w-sm">
              <img
                src="https://via.placeholder.com/150"
                alt="Arto Iijäläinen"
                className="w-full h-auto object-cover mb-2 rounded-full"
              />
              <div className="text-center">
                <h3 className="text-sm font-semibold text-gray-300">Arto Iijäläinen</h3>
                <p className="text-xs text-gray-300">
                  Project Manager &<br /> Scrum Master
                </p>
              </div>
            </div>
            <div className="rounded-lg overflow-hidden p-4 mb-2 mr-2 min-h-300 max-w-sm">
              <img
                src="https://via.placeholder.com/150"
                alt="Anne Klementti"
                className="w-full h-auto object-cover mb-2 rounded-full"
              />
              <div className="text-center">
                <h3 className="text-sm font-semibold text-gray-300">Anne Klementti</h3>
                <p className="text-xs text-gray-300">
                  Project Manager,
                  <br /> Scrum Master
                </p>
              </div>
            </div>
            <div className="rounded-lg overflow-hidden p-4 mb-2 mr-2 min-h-300 max-w-sm">
              <img
                src="https://via.placeholder.com/150"
                alt="Jesse Tikka"
                className="w-full h-auto object-cover mb-2 rounded-full"
              />
              <div className="text-center">
                <h3 className="text-sm font-semibold text-gray-300">Jesse Tikka</h3>
                <p className="text-xs text-gray-300">Project Manager</p>
              </div>
            </div>
            <div className="rounded-lg overflow-hidden p-4 mb-2 mr-2 min-h-300 max-w-sm">
              <img
                src="https://via.placeholder.com/150"
                alt="Erika Vanhala"
                className="w-full h-auto object-cover mb-2 rounded-full"
              />
              <div className="text-center">
                <h3 className="text-sm font-semibold text-gray-300">Erika Vanhala</h3>
                <p className="text-xs text-gray-300">Project Manager</p>
              </div>
            </div>
            <div className="rounded-lg overflow-hidden p-4 mb-2 mr-2 min-h-300 max-w-sm">
              <img
                src="https://via.placeholder.com/150"
                alt="Kirsi Vatanen"
                className="w-full h-auto object-cover mb-2 rounded-full"
              />
              <div className="text-center">
                <h3 className="text-sm font-semibold text-gray-300">Kirsi Vatanen</h3>
                <p className="text-xs text-gray-300">Marketing Manager</p>
                <p className="text-xs text-gray-300">kirsi.vatanen@druid.fi</p>
              </div>
            </div>
          </div>
          <h2 className="text-3xl md:text-4xl font-bold text-white text-center col-span-full mt-10">
            In­te­res­ted in joi­ning our team?{' '}
          </h2>
          <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2 my-10 mb-20">
            Take a look at our open positions
          </button>
        </div>
      </div>
    </>
  );
};

export default Contact;
