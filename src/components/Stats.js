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

export default Stats;
