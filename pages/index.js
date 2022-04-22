import Layout from "../src/layouts/default";
import Head from "next/head";
import HeroBanner from "../src/components/hero/HeroBanner";

import { Animated } from "react-animated-css";

export default function Home() {
  return (
    <div className="home__page">
      <Head>
        <title>Hadi Nurhidayat</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
        />
      </Head>
      <Layout>
        <div className="home__page">
          <div className="home__page-wrapper">
            <div className="home__banner-hero">
              <HeroBanner />
            </div>
            <section></section>
          </div>
        </div>
      </Layout>
    </div>
  );
}
