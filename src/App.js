import { useState } from "react";
import Logo from "./components/Logo";
import Form from "./components/Form";
import CheckList from "./components/Checklist";
import Stats from "./components/Stats";

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

  function handleClearItems() {
    const confirm = window.confirm("Apakah kamu mau menghapus semua list ini?");
    if (confirm) {
      setItems([]);
    }
    // choose_to_clear = window.confirm("Apakah kamu ingin membersihkan semua ");
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
        onClearItems={handleClearItems}
      />
      <Stats listItems={items} />
    </div>
  );
}

export default App;
