import NavbarMobile from "./NavbarMobile";

export default function Navbar() {
  return (
    <div className="navbar__component">
      <nav className="fixed top-0 left-0 w-full text-white flex justify-between items-center md:px-20 md:py-7 px-4 py-5 shadow-lg shadow-slate-900/20">
        <h1 className="text-slate-300 font-semibold">Navbar</h1>
        <div className=" hidden md:block navbar__menu">
          <ul className="flex space-x-16 text-slate-300 font-medium">
            <li className="capitalize hover:text-sky-400 hover:cursor-pointer transition delay-100">
              about
            </li>
            <li className="capitalize hover:text-sky-400 hover:cursor-pointer transition delay-100">
              experience
            </li>
            <li className="capitalize hover:text-sky-400 hover:cursor-pointer transition delay-100">
              work
            </li>
            <li className="capitalize hover:text-sky-400 hover:cursor-pointer transition delay-100">
              contact
            </li>
          </ul>
        </div>
        <div className="navbar__btn-resume hidden md:block">
          <button className="outline outline-offset-1 outline-sky-400 rounded-sm px-4 py-3 capitalize hover:bg-sky-400 hover:outline-none hover:outline-0 hover:text-slate-900 transition delay-100 ease-in">
            resume
          </button>
        </div>
        <div className="navbar__btn-menu-mobile block md:hidden ">
          <NavbarMobile />
        </div>
      </nav>
    </div>
  );
}
