import { useState } from "react";

const TextSearch = ({ totalData, search}) => {
  // NOTE: Buat parameter didalam function component childred itu wajib pakai "{a, b, ...}"
  if (search != "") {
    return (
      <small>
        {totalData == 0 ? "Mencoba melakukan " : "Ditemukan " + totalData + " data dari "} pencarian kata "{search}"
        {/* ditemukan {totalData} data pencarian kata {search} */}
      </small>
    );
  }

  return "";
};
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
          onKeyDown={searchOnKeyDown} // NOTE: Menggunakan event handler onKeyDown (Enter)
        />
        {/* // NOTE: Menggunakan event handler onClick */}
        <button onClick={onChangeSearch}>Search</button>
      </div>

      <TextSearch search={search} totalData={props.totalData} />
    </>
  );
}

export default Search;
