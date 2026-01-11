import { useState } from "react";

const message = [
  // test.name,
  "Dreams",
  "Believe",
  "Achieve",
];
message.unshift(undefined);

function App() {
  // NOTE: GUNAKAN USESTATE JIKA: perubahan nilai mempengaruhi render (misal: perubahan state komponen mempengaruhi render), mengelola data yang dinamis (misal: data yang diambil dari API, inputan user, atau server response), mempengaruhi perubahan state terhadap komponen lain (misal: sama kayak perubahan state mempengaruhi render), menjaga siklus komponen (misal: jika aplikasi perlu menyimpan data selama aplikasi berjalan), dan menggunakan fungsi-fungsi tambahan yang bergantung pada state (misal: validasi inputan, atau yang melakukan manipulasi-membandingkan data secara real-time)
  // IMPORTANT: ga usah pake useState, kalo mau menyimpan nilai yang tidak membutuhkan perubahan interface jika data tersebut berubah (GA SETIAP NYIMAPAN DATA HARUS DI RENDER ULANG / MEMBUTUHKAN STATE!)

  // NOTE: useState pada component tidak akan mempengaruhi hidup dari component lain. Jadi meskipun kita meletakkannya misalnya di page maupun parent-component yang sama mereka tetap menjalankan kehidupan mereka masing-masing

  const [step, setStep] = useState(1);
  // NOTE: step disini adalah VARIABLE yang menampung value dari useState
  // NOTE: setstep disini adalah FUNCTION yang menampung value dari useState

  // const [test, setTest] = useState({ name: "Abil" });
  const [isOpen, setIsOpen] = useState(true);

  function ProccesNext() {
    // setTest({ name: "budi" });
    if (step < 3) {
      // setStep(step + 1);

      // NOTE: Best practice
      setStep((step) => step + 1);
    }
  }
  function ProccesPrev() {
    // setTest({ name: "abil" });
    if (step > 1) {
      // setStep(step - 1);

      // NOTE: Best practice
      setStep((step) => step - 1);
    }
  }

  return (
    <>
      {/* &times; */}
      <button
        className={`close ${isOpen ? "btn-red" : "btn-green"}`}
        onClick={() => setIsOpen((isOpen) => !isOpen)}
      >
        {isOpen ? "\u00D7" : "Show"}
      </button>
      {isOpen && (
        <div className="steps">
          <div className="numbers">
            <div className={step > 0 ? "active" : ""}>1</div>
            <div className={step > 1 ? "active" : ""}>2</div>
            <div className={step > 2 ? "active" : ""}>3</div>
          </div>
          <p className="message">
            Step {step} : {message[step]}
          </p>
          <div className="buttons">
            <button
              style={{ backgroundColor: "#526D82", color: "#fff" }}
              onClick={ProccesPrev}
            >
              Prev
            </button>
            <button
              style={{ backgroundColor: "#526D82", color: "#fff" }}
              onClick={ProccesNext}
            >
              Next
            </button>
          </div>
        </div>
      )}
    </>
  );
}

export default App;
