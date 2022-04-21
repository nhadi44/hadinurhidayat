export default function Navbar() {
  return (
    <div className="navbar__component">
      <nav className="fixed top-0 left-0 w-full text-white flex justify-between px-20 py-5 shadow-lg shadow-dark ">
        <h1>Navbar</h1>
        <div className="navbar__menu">
          <ul className="flex space-x-10">
            <li className="capitalize">about</li>
            <li className="capitalize">experience</li>
            <li className="capitalize">work</li>
            <li className="capitalize">contact</li>
          </ul>
        </div>
      </nav>
    </div>
  );
}
