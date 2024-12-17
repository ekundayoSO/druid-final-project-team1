import { FaLinkedin } from "react-icons/fa";
import { FaFacebook } from "react-icons/fa";
import { FaInstagramSquare } from "react-icons/fa";
import { FaSquareXTwitter } from "react-icons/fa6";

export const Footer: React.FC = () => {
  return (
    <footer className='py-24 text-gray-300 flex flex-col items-center justify-center gap-4 h-16 bg-gray-800'>
      <div className="w-full max-w-7xl flex justify-between items-center px-8">
        <div className="flex gap-8">
          <span className="text-left">
            Pasilankatu 2 <br/>
            00240 Helsinki <br/>
            Finland <br/>
          </span>
          
          <span className="text-left">
            info@druid.fi<br/>
            +358 20 187 6602<br/>
            <a href="/contact" className="hover:text-gray-500">&rarr; Contact</a>
          </span>
        </div>

        <div className="flex gap-3 text-2xl">
          <a href="https://www.linkedin.com/company/druid-oy/" target="_blank" rel="noreferrer">
            <FaLinkedin />
          </a>
          <a href="https://www.facebook.com/druidfi/" target="_blank" rel="noreferrer">
            <FaFacebook />
          </a>
          <a href="https://www.instagram.com/druidfi/" target="_blank" rel="noreferrer">
            <FaInstagramSquare />
          </a>
          <a href="https://x.com/druidfi" target="_blank" rel="noreferrer">
            <FaSquareXTwitter />
          </a>
        </div>
      </div>
      <hr className="w-full border-t border-gray-600" />
 
      <p className='text-center text-sm leading-loose'>
        Druid © {new Date().getFullYear()} 
      </p>
    </footer>
  );
};
