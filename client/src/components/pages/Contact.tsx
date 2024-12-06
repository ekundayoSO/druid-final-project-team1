import React from 'react';
import servicesPic1 from '@/assets/arto-hymyilee-scaled.png';
import servicesIcon1 from '@/assets/jalleenmyytavat-palvelut.webp';
import servicesIcon2 from '@/assets/markkinoinnin-automaatiot.webp';
import servicesIcon3 from '@/assets/tietoturva-auditointi.webp';

const Contact = () => {
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
          <h2 className="text-3xl font-bold text-white mb-4">Send us a mes­sa­ge</h2>
          <div className="flex flex-col md:flex-row items-center justify-center w-full md:w-1/2 h-full p-8">
            <form className="w-full max-w-lg">
              <div className="mb-4">
                <label htmlFor="name" className="block text-white text-sm font-bold mb-2">
                  Name
                </label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  required
                  className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                />
              </div>
              <div className="mb-4">
                <label htmlFor="email" className="block text-white text-sm font-bold mb-2">
                  Email
                </label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  required
                  className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                />
              </div>
              <div className="mb-4">
                <label htmlFor="company" className="block text-white text-sm font-bold mb-2">
                  Company
                </label>
                <input
                  type="text"
                  id="company"
                  name="company"
                  className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                />
              </div>
              <div className="mb-4">
                <label htmlFor="phone" className="block text-white text-sm font-bold mb-2">
                  Phone
                </label>
                <input
                  type="tel"
                  id="phone"
                  name="phone"
                  className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                />
              </div>
              <div className="mb-4">
                <label htmlFor="message" className="block text-white text-sm font-bold mb-2">
                  Message
                </label>
                <textarea
                  id="message"
                  name="message"
                  required
                  className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  rows={3}
                ></textarea>
              </div>
              <div className="flex items-center justify-center">
                <button className="bg-gray-300 text-gray-800 rounded-full px-4 py-2 mx-2">Send Message</button>
              </div>
            </form>
            <div className="bg-gray-600 rounded-lg shadow-lg overflow-hidden p-4 md:ml-16">
              <h3 className="text-xl font-bold text-left mt-4 text-gray-300">Client sup­port</h3>
              <p className="text-gray-300">+358 20 187 6601 (Mon to Fri 8–17)</p>
              <h3 className="text-xl font-bold text-left mt-4 text-gray-300">Sa­les</h3>
              <p className="text-gray-300">+358 20 187 6600</p>
              <h3 className="text-xl font-bold text-left mt-4 text-gray-300">Of­fi­ce</h3>
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
      </div>
      <div className="relative w-full overflow-auto min-h-screen bg-gray-800 m-0 p-0">
        <h2 className="text-3xl md:text-4xl font-bold text-white text-center col-span-full mt-20">Our team</h2>
        <div className="flex flex-col items-center justify-center w-full ">
          <div className="flex items-center">
            <p className="text-white mb-8 max-w-xl text-left mt-8">
              We see it as dedication – someone else might call it nerdy. Our passion is to find the best digital
              solutions for our clients. And we don’t hide from the challenge. We believe in openness in source, but
              also in how we cooperate.
              <br />
              Our email addresses are in the format firstname.lastname@druid.fi. Check out all the Druids!
            </p>
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
