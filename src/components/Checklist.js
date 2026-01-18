import { useState } from "react";
import Item from "./Item";

function CheckList({ items, onDeleteItem, onFinishItem, onClearItems }) {
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

        <button onClick={onClearItems}>Clear Items</button>
      </div>
    </div>
  );
}

export default CheckList;
