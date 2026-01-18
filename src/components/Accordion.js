import { useState } from "react";
import AccordionItem from "./AccordionItem";

function Accordion({ data }) {
  const [curOpenAnswer, setOpenAnswer] = useState(null); // Note: curOpenAnswer (current open answer)

  return (
    <div className="accordion">
      {data.map((faq, index) => (
        <AccordionItem
          number={index + 1}
          question={faq.question}
          answer={faq.answer}
          numbOpenAnswer={curOpenAnswer}
          onOpenAnswer={setOpenAnswer}
          key={index}
        />
      ))}
    </div>
  );
}

export default Accordion;
