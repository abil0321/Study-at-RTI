import { useState } from "react";

const listItems = [
  { id: 1, title: "Eat", done: false },
  { id: 2, title: "Bath", done: true },
  { id: 3, title: "Study", done: true },
  { id: 4, title: "Sleep", done: false },
];

function App() {
  const [items, setItems] = useState(listItems);
  function handleAddData(item) {
    setItems((items) => [...items, item]);
    console.log(items);
  }
  return (
    <div className="app">
      <Logo />
      <Form onAddItem={handleAddData} />
      <CheckList data={items} />
      <Stats />
    </div>
  );
}

function Logo() {
  return <span className="logo">👨‍💻 GoCheck ✅</span>;
}
function Form({ onAddItem }) {
  const [title, setTitle] = useState("");

  function handleSubmit(e) {
    e.preventDefault();

    if (!title) {
      return;
    }

    let countListItem = listItems.length + 1;
    const newData = {
      id: countListItem,
      title: title,
      done: false,
    };
    onAddItem(newData);
    console.log(newData);
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
function CheckList({ data }) {
  return (
    <div className="list">
      <ul>
        {data.map(({ id, title, done }) => (
          <Item key={id} title={title} done={done} />
        ))}
      </ul>
    </div>
  );
}

function Item({ title, done }) {
  const [isOpen, setIsOpen] = useState(true);
  const [check, setCheck] = useState(done);

  return (
    <>
      {isOpen && (
        <li>
          <input
            type="checkbox"
            checked={check}
            onChange={() => {
              setCheck(!check);
              console.log(check);
            }}
          />
          <span
            onClick={() => setCheck(!check)}
            className={`${check ? "lineChecked" : ""}`}
          >
            {title}
          </span>
          <span onClick={() => setCheck(!check)}>{check ? "✅" : "❌"}</span>
          <button onClick={() => setIsOpen(!isOpen)}>Remove</button>
        </li>
      )}
    </>
  );
}

function Stats() {
  return (
    <footer className="stats">
      <span>Apakah punya x catatan dan baru x yang dichecklist (x%) ✅</span>
    </footer>
  );
}

export default App;
