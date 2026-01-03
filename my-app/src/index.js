import React, { useEffect, useState } from "react";
import ReactDom from "react-dom/client";
import "./index.css";
import data from "./data.js";

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
  // Asumsi 'data' diambil dari import atau state di luar snippet ini
  const food = data;
  const countFood = food.length;

  return (
    <main className="menu">
      <h2>Menu Kita</h2>
      {/* TODO: Menampilkan daftar menu */}

      {/* // NOTE: Menggunakan single expression 
      {countFood > 0 && ( ...) */}

      {/* // NOTE: Menggunakan ternary */}
      {countFood > 0 ? (
        <ul className="foods">
          {data.map((food, index) => (
            /* TODO: 
             Di bawah ini adalah perbandingan dua cara passing props.
          */

            // NOTE: CARA 1 (LAMA): Mengirim props satu per satu
            // <Food
            //   nama={food.nama}
            //   deskripsi={food.deskripsi}
            //   foto={food.foto}
            //   harga={food.harga}
            //   stok={food.stok}
            //   key={index}
            // />

            // NOTE: CARA 2 (BARU): Mengirim seluruh object (lebih ringkas)
            <Food foodObj={food} key={index} />
          ))}
        </ul>
      ) : (
        <h1>Lagi Kosong Guys, Dateng lagi nanti 😙</h1>
      )}
    </main>
  );
}
function Footer() {
  const [Hour, setHour] = useState(new Date().getHours());
  const [Clock, setClock] = useState(new Date().toLocaleTimeString());
  const jamBuka = 10;
  const jamTutup = 21;

  useEffect(() => {
    setInterval(() => {
      setHour(new Date().getHours());
      setClock(new Date().toLocaleTimeString());
    }, 1000);
  }, []);

  const isOpen = Hour >= jamBuka && Hour <= jamTutup;

  if (isOpen) {
    return (
      <footer className="footer" style={{ textAlign: "center" }}>
        <p style={{ textAlign: "center" }}>
          Warteg Jamaluddin M-Top udah buka guys 🥳
        </p>
        <div className="order">
          <p>
            {new Date().getFullYear()} Warung Jamaluddin M-Top | Jam Buka{" "}
            {jamBuka} - Jam Tutup {jamTutup}
          </p>
          <div>{Clock}</div>
          {isOpen && <button className="btn">Order</button>}
        </div>
      </footer>
    );
  } else {
    return (
      <footer className="footer" style={{ textAlign: "center" }}>
        <p style={{ textAlign: "center" }}>
          {`Warteg Jamaluddin M-Top lagi tutup Guys, dateng lagi di jam ${jamBuka}:00 - ${jamTutup}:00 🥲`}
        </p>
        <div className="order">
          <p>
            {new Date().getFullYear()} Warung Jamaluddin M-Top | Jam Buka{" "}
            {jamBuka} - Jam Tutup {jamTutup}
          </p>
          <div>{Clock}</div>
        </div>
      </footer>
    );
  }
}
function Food(props) {
  // Kita bisa men-destructure props agar kodingan lebih bersih
  // const { foodObj } = props;

  return (
    <li className={`food ${props.foodObj.stok ? "" : "sold-out"}`}>
      {/* TODO: 
          Karena kita menggunakan CARA 2 (mengirim object), 
          akses datanya harus masuk ke properti 'foodObj' dulu.
      */}

      {/* //NOTE: CARA LAMA (akses langsung): src={props.foto} */}

      {/* //NOTE: CARA BARU (akses via object): */}
      <img
        src={props.foodObj.foto}
        width={100}
        height={70}
        alt={props.foodObj.nama}
      />
      <div>
        <h2>
          {props.foodObj.nama} - {props.foodObj.stok ? "For Sale" : "Sold Out!"}
        </h2>
        <p>{props.foodObj.deskripsi}</p>
        <Rupiah angka={props.foodObj.harga} />
      </div>
    </li>
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
