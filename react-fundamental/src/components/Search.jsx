import { useState } from "react";

function Search(props) {
  const [search, setSearch] = useState("");
  const onChangeSearch = () => {
    props.searchChange(search); // NOTE: "props.searchChange(search)" Menggunakan props untuk sending data ke component parent (index.jsx)
  };

  const searchOnKeyDown = (e) => {
    if (e.key == "Enter") {
      onChangeSearch();
    }
  };

  return (
    <>
      <div>
        <input
          type="text"
          placeholder="Search"
          onChange={(e) => setSearch(e.target.value)}
          // NOTE: Menggunakan event handler onKeyDown (Enter)
          onKeyDown={searchOnKeyDown}
        />
        {/* // NOTE: Menggunakan event handler onClick */}
        <button onClick={onChangeSearch}>Search</button>
      </div>
      <small>
        {/* // NOTE: "props.totalData" menggunakan props untuk getting data dari component parent */}
        ditemukan {props.totalData} data pencarian kata {search}
      </small>
    </>
  );
}

export default Search;
