import React, { useEffect, useState } from "react";
import ReactDom from "react-dom/client";
import "./index.css";
import "@fortawesome/fontawesome-free/css/all.min.css";

function App() {
  const data = {
    name: "John Doe",
    job: "Software Engineer",
    // NOTE: Menggunakan getter
    get intro() {
      return `Hello my name is ${this.name}, and I am ${this.job}!`;
    },
    description:
      "Maiores explicabo consequatur et laboriosam excepturi. Vitae omnis ex temporibus. Asperiores nam veniam velit. Tempora veniam quisquam occaecati harum. Et quidem fugit exercitationem id qui. Nesciunt nostrum ducimus harum autem esse nisi sint laborum.",
    tech: ["Laravel", "React", "Java"],
    socmed: [
      {
        icon: "facebook",
        link: "https://www.facebook.com/",
      },
      {
        icon: "twitter",
        link: "https://www.twitter.com/",
      },
      {
        icon: "instagram",
        link: "https://www.instagram.com/",
      },
      {
        icon: "linkedin",
        link: "https://www.linkedin.com/",
      },
      {
        icon: "github",
        link: "https://www.github.com/",
      },
    ],
  };

  return (
    <div className="container">
      <Card data={data} />
    </div>
  );
}

function Card({ data }) {
  const { name, job, intro, description, tech, socmed } = data;

  return (
    <>
      <div className="card">
        <CardHeader name={name} job={job} socmed={socmed} />
        <CardBottom intro={intro} desc={description} name={name} tech={tech} />
      </div>
    </>
  );
}

// SECTION: CardHeader
function CardHeader({ name, job, socmed }) {
  return (
    <>
      <div className="top">
        <SocialButtons position="left" socmed={socmed} />
        <SocialButtons position="right" socmed={socmed} />

        <div className="text">
          <div className="name-wrapper">
            <div className="name">{name}</div>
          </div>
          <div className="title">{job}</div>
        </div>
      </div>
    </>
  );
}
// * ANCHOR: CardHeader Component
function Buttons({ icon, link }) {
  return (
    <>
      <button onClick={() => window.open(link, "__blank")}>
        <i className={`fab fa-${icon}`}></i>
      </button>
    </>
  );
}

function SocialButtons({ position, socmed }) {
  const middleIndex = Math.floor(socmed.length / 2);
  const socialMediaLeft = socmed.slice(0, middleIndex);
  const socialMediaRight = socmed.slice(middleIndex);

  if (position === "right") {
    return (
      <div className="social-buttons right">
        {socialMediaRight.map(({ icon, link }, index) => (
          <Buttons key={index} icon={icon} link={link} />
        ))}
      </div>
    );
  } else {
    return (
      <div className="social-buttons">
        {socialMediaLeft.map((item, index) => (
          <Buttons key={index} icon={item.icon} link={item.link} />
        ))}
      </div>
    );
  }
}

// END CardHeader

// SECTION: CardBottom
function CardBottom({ intro, desc, name, tech }) {
  return (
    <>
      <div className="bottom">
        <Descriptions intro={intro} desc={desc} name={name} />
        <Tech tech={tech} />
      </div>
    </>
  );
}

// * ANCHOR: CardBottom Component
function Descriptions({ intro, desc, name }) {
  return (
    <>
      <div className="desc">{intro}</div>
      <div className="desc">{desc}</div>
    </>
  );
}

function Tech({ tech }) {
  return (
    <>
      <div className="buttons">
        {tech.map((item, index) => (
          <button key={index}>
            <i
              className={`fa-brands fa-${item.toLowerCase()}`}
              aria-hidden="true"
            ></i>
            {" - "}
            {item}
          </button>
        ))}
      </div>
    </>
  );
}
// END CardBottom

const root = ReactDom.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
);
