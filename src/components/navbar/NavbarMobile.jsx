import { useState } from "react";
import { Animated } from "react-animated-css";
import Head from "next/head";

export default function NavbarMobile() {
  const [isOpen, setIsOpen] = useState(false);

  const handleMenu = () => {
    setIsOpen(!isOpen);
  };

  return (
    <>
      <Head>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
        />
      </Head>

      <div className="navbar__mobile">
        <button
          onClick={handleMenu}
          className={
            isOpen
              ? "bg-sky-400 rounded-sm py-2 px-2 transition delay-100 text-slate-900"
              : "py-2 px-2"
          }
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            className="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            strokeWidth={2}
          >
            <path
              strokeLinecap="round"
              strokeLinejoin="round"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
        </button>
        {isOpen ? (
          <Animated
            animationIn="fadeIn"
            animationOut="fadeOut"
            isVisible={true}
          >
            <div className="navbar__menu-mobile absolute left-0 top-0 w-full min-h-screen bg-slate-900 translate-y-20">
              <ul className="flex  text-slate-300 flex-col font-medium items-center translate-y-3/4">
                <li className="capitalize hover:bg-sky-400 hover:cursor-pointer hover:text-slate-900 transition delay-150 rounded-sm my-1 p-5">
                  about
                </li>
                <li className="capitalize hover:bg-sky-400 hover:cursor-pointer hover:text-slate-900 transition delay-150 rounded-sm my-1 p-5">
                  experience
                </li>
                <li className="capitalize hover:bg-sky-400 hover:cursor-pointer hover:text-slate-900 transition delay-150 rounded-sm my-1 p-5">
                  work
                </li>
                <li className="capitalize hover:bg-sky-400 hover:cursor-pointer hover:text-slate-900 transition delay-150 rounded-sm my-1 p-5">
                  contact
                </li>
              </ul>
            </div>
          </Animated>
        ) : (
          ""
        )}
      </div>
    </>
  );
}
