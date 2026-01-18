import { useState } from "react";

function Form({ onAddItem, countItems }) {
  const [title, setTitle] = useState("");

  function handleSubmit(e) {
    e.preventDefault();

    if (title.trim() === "") {
      return;
    }

    let countListItem = countItems + 1;
    const newData = {
      id: countListItem,
      title: title,
      done: false,
    };
    onAddItem(newData);
    setTitle("");
  }

  return (
    <form className="add-form" onSubmit={handleSubmit}>
      <h3>Ada yang mau kamu catat ga? 😅</h3>
      <input
        type="text"
        name="title"
        value={title}
        onChange={(e) => setTitle(e.target.value)}
        id=""
      />
      <button>ADD</button>
    </form>
  );
}

export default Form;
