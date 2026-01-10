import { useState } from "react";

function App() {
  const [messageContent, setMessageContent] = useState(0);
  // NOTE: messageContent disini adalah VARIABLE yang menampung value dari useState
  // NOTE: setMessageContent disini adalah FUNCTION yang menampung value dari useState

  const [test, setTest] = useState({ name: "Abil" });

  const message = [
    test.name,
    "Step 1: Dreams",
    "Step 2: Action to Achieve your Dreams",
    "Step 3: Your Dreams Come True",
  ];

  function ProccesNext() {
    setMessageContent(messageContent + 1);
    setTest({ name: "budi" });
    if (messageContent > 2) {
      setMessageContent(messageContent);
    }
  }
  function ProccesPrev() {
    setMessageContent(messageContent - 1);
    setTest({ name: "abil" });
    if (messageContent < 1) {
      setMessageContent(messageContent);
    }
  }

  return (
    <div className="steps">
      <div className="numbers">
        <div className={messageContent > 0 && "active"}>1</div>
        <div className={messageContent > 1 && "active"}>2</div>
        <div className={messageContent > 2 && "active"}>3</div>
      </div>
      <p className="message">
        {message[messageContent]} - {test.name}
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
  );
}

export default App;
