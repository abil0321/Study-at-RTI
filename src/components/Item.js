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

export default Item;
