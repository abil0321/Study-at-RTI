import { useState } from "react";

function Search(props) {
  const [search, setSearch] = useState("");
  const onChangeSearch = (event) => {
    setSearch(event.target.value);
    props.searchChange(event.target.value);
  };

  return (
    <>
      <div>
        <input type="text" placeholder="Search" onChange={onChangeSearch} />
      </div>
      <small>
        ditemukan {props.totalData} data pencarian kata {search}
      </small>
    </>
  );
}

export default Search;
