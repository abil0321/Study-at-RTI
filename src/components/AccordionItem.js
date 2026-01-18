export default function AccordionItem({
  number,
  question,
  answer,
  numbOpenAnswer,
  onOpenAnswer,
}) {
  const isOpen = number === numbOpenAnswer;

  function handleOpenAnswer(id) {
    onOpenAnswer(isOpen ? null : id);
  }

  return (
    <div
      className={`item ${isOpen ? "open" : ""}`}
      onClick={() => handleOpenAnswer(number)}
    >
      <p className="number">{number < 10 ? `0${number}` : number}</p>
      <p className="title">{question}</p>
      <p className="icon">{isOpen ? "-" : "+"}</p>
      {/* {isOpen && <div className="content-box">{answer}</div>} */}
      <div className="content-box">{answer}</div>
    </div>
  );
}
