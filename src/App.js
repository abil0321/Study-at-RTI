import { useState } from "react";

// test
function App() {
  const [items, setItems] = useState([]);
  function handleAddData(item) {
    setItems((items) => [...items, item]);
  }
  /* NOTE: delete note, dengan filter berdasarkan 'id' yang tidak sama atau pernah di pilih/click di handleDeleteNote(id) */
  function handleDeleteItem(id) {
    const updateItems = items.filter((item) => item.id !== id);
    setItems(updateItems);
  }

  // SECTION: Finish Item (checkbox: conditional ✅❌)
  function handleFinishItem(id) {
    // NOTE: Update data dengan spread operator
    setItems((items) =>
      items.map((item) =>
        item.id === id ? { ...item, done: !item.done } : item,
      ),
    );

    // NOTE: Cara lama
    // setItems((items) => {
    //   return items.map((item) => {
    //     if (item.id === id) {
    //       return {
    //         ...item,
    //         done: !item.done,
    //       };
    //     }
    //     return item;
    //   });
    // });
  }

  const count_items = items.length;

  return (
    <div className="app">
      <Logo />
      <Form onAddItem={handleAddData} countItems={count_items} />
      <CheckList
        items={items}
        onDeleteItem={handleDeleteItem}
        onFinishItem={handleFinishItem}
      />
      <Stats listItems={items} />
    </div>
  );
}

function Logo() {
  return <span className="logo">👨‍💻 GoCheck ✅</span>;
}

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
function CheckList({ items, onDeleteItem, onFinishItem }) {
  //* ANCHOR: Sorting items
  const [sortBy, setSortBy] = useState("input"); // NOTE: state, Default sort by input

  // NOTE: Function untuk sorting items
  function sortItems() {
    switch (sortBy) {
      case "title":
        return items.slice().sort((a, b) => a.title.localeCompare(b.title));
      case "status":
        return items.slice().sort((a, b) => Number(a.done) - Number(b.done));
      case "input":
      default:
        return items;
    }
  }

  // NOTE: menampung hasil sorting items dan sekalian implementasi derived state👌
  const sortedItems = sortItems();

  return (
    <div className="list">
      <ul>
        {/* // NOTE: mapping items */}
        {sortedItems.map((item) => (
          <Item
            key={item.id}
            data={item}
            handleDelete={onDeleteItem} // NOTE: fungsi untuk menghapus data dijadikan props
            handleFinish={onFinishItem}
          />
        ))}
      </ul>

      <div className="actions">
        {/* // NOTE: Select and set sorting items */}
        <select value={sortBy} onChange={(e) => setSortBy(e.target.value)}>
          <option value="input">Urutkan berdasarkan Input</option>
          <option value="title">Urutkan berdasarkan Title</option>
          <option value="status">Urutkan berdasarkan Status</option>
        </select>
      </div>
    </div>
  );
}

function Item({ data, handleDelete, handleFinish }) {
  const { id, title, done } = data;
  return (
    <>
      <li>
        <input
          type="checkbox"
          checked={done}
          onChange={() => {
            handleFinish(id);
          }}
        />
        <span
          onClick={() => handleFinish(id)}
          className={`${done ? "lineChecked" : ""}`}
        >
          {title}
        </span>
        <span onClick={() => handleFinish(id)}>{done ? "✅" : "❌"}</span>
        {/* <button onClick={() => setIsOpen(!isOpen)}>Remove</button> */}
        <button onClick={() => handleDelete(id)}>Remove</button>{" "}
        {/* NOTE: Melakukan lifting state biar dia diatas karena loopingnya ga di sini cuy */}
      </li>
    </>
  );
}

function Stats({ listItems }) {
  const count_items = listItems.length;
  const count_done_item = listItems.filter((item) => item.done === true).length;
  const percentage_done_item = Math.round(
    (count_done_item / count_items) * 100,
  );

  if (count_items < 1) {
    return (
      <footer className="stats">
        <span>
          🗒️ Kamu belum memiliki plan hari ini, yuk mulai bikin catatan!
        </span>
      </footer>
    );
  }
  return (
    <footer className="stats">
      <span>
        {percentage_done_item === 100
          ? `Sudah kelar semua dari ${count_items} task, Mantap 🫡👌`
          : `🗒️ Kamu punya ${count_items} catatan dan baru ${count_done_item} yang dichecklist (${percentage_done_item}%) ✅`}
      </span>
    </footer>
  );
}

export default App;
