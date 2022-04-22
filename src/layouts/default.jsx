import Navbar from "../components/navbar/Navbar";
import HeroBanner from "../components/hero/HeroBanner";
import Loading from "../components/loading/Loading";

import { useState, useEffect } from "react";

export default function Layout(props) {
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    setInterval(() => {
      setLoading(false);
    }, 2000);
  });

  return (
    <div className="default__layout">
      {loading ? (
        <div className="loading">
          <Loading />
        </div>
      ) : (
        <div className="layout__container">
          <div className="layout__wrapper">
            <div className="navbar__component">
              <Navbar />
            </div>
            <main>
              <div className="main__content bg-gray-800 py-24 px-4 md:py-36 md:px-20">
                {props.children}
              </div>
            </main>
          </div>
        </div>
      )}
    </div>
  );
}
