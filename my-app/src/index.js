import React, { useEffect, useState } from "react";
import ReactDom from "react-dom/client";
import "./index.css";
// import "./../public/data.js";

function App() {
  return (
    <div className="container">
      <Header />
      <Menu />
      <Footer />
    </div>
  );
}

function Header() {
  const style = {
    color: "red",
    fontSize: "50px",
    textTransform: "uppercase",
  };
  return <h1 style={style}>Warteg Jamaluddin M-Top</h1>;
}
function Menu() {
  return (
    <main className="menu">
      <h2>Menu Kita</h2>
      <div className="foods">
        <Food
          nama={"Soto Betawi"}
          deskripsi={"soto betawi dari betawi lah"}
          foto={"food/soto-betawi.jpg"}
          harga={20000}
          stok={Math.random() >= 0.5 ? true : false}
        />
        <Food
          nama={"Soto Betawi"}
          deskripsi={"soto betawi dari betawi lah"}
          foto={"food/soto-betawi.jpg"}
          harga={20000}
          stok={Math.random() >= 0.5 ? true : false}
        />
        <Food
          nama={"Soto Betawi"}
          deskripsi={"soto betawi dari betawi lah"}
          foto={"food/soto-betawi.jpg"}
          harga={20000}
          stok={Math.random() >= 0.5 ? true : false}
        />
        <Food
          nama={"Soto Betawi"}
          deskripsi={"soto betawi dari betawi lah"}
          foto={"food/soto-betawi.jpg"}
          harga={20000}
          stok={Math.random() >= 0.5 ? true : false}
        />
      </div>
    </main>
  );
}
function Footer() {
  const [Hour, setHour] = useState(new Date().getHours());
  const jamBuka = 10;
  const jamTutup = 22;

  useEffect(() => {
    setInterval(() => {
      setHour(new Date().getHours());
    }, 1000);
  }, []);

  return (
    <footer className="footer" style={{ textAlign: "center" }}>
      <small style={{ textAlign: "center" }}>
        {Hour >= jamBuka && Hour <= jamTutup
          ? "Warteg Jamaluddin M-Top udah buka guys 🥳"
          : "Warteg Jamaluddin M-Top lagi tutup Guys 🥲"}
      </small>
      <br />
      <small>
        {new Date().getFullYear()} Warung Jamaluddin M-Top | Jam Buka {jamBuka}{" "}
        - Jam Tutup {jamTutup}
      </small>
    </footer>
  );
}
function Food(props) {
  return (
    <div className="food">
      <img src={props.foto} width={100} height={70} alt={props.nama} />
      <div>
        <h2>
          {props.nama} - {props.stok ? "For Sale" : "Sold Out!"}
        </h2>
        <p>{props.deskripsi}</p>
        <Rupiah angka={props.harga} />
      </div>
    </div>
  );
}

function Rupiah(props) {
  const formatAngka = new Intl.NumberFormat("id-ID", {
    style: "currency",
    currency: "IDR",
    maximumFractionDigits: 0,
    minimumFractionDigits: 0,
  }).format(props.angka);

  return <span>{props.angka ? formatAngka : "not for sale"}</span>;
}

const root = ReactDom.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
);
