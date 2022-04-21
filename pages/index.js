import Layout from "../src/layouts/default";
import Head from "next/head";
import HeroBanner from "../src/components/hero/HeroBanner";

import { useState, useEffect } from "react";

export default function Home() {
  // const [data, setData] = useState(false);

  // useEffect(() => {
  //   setInterval(() => {
  //     setData(true);
  //   }, 1000);
  //   console.log(data);
  // }, [data]);

  return (
    <div className="home__page">
      <Head>
        <title>Homepage</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
      </Head>
      <Layout>
        <div className="home__page">
          <div className="home__page-wrapper">
            <div className="home__banner-hero">
              <HeroBanner />
            </div>
            <div className="text-red-600">
              <h1>Homepage</h1>
            </div>
          </div>
        </div>
      </Layout>
    </div>
  );
}
