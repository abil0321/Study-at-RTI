import postsData from "../posts.json";
import Article from "../components/Article";
import Search from "../components/Search";
import { useState } from "react";
function HomePage() {
  // TODO: menggunakan UseState
  // Setiap kali re-render (react memperbaharui tampilan) semuanya di reset dari awal. Maka dari itu useState hadir untuk Menyimpan Data dan Memicu Re-render. Jadi seperti ini:
  // Menyimpan Data: Datanya tidak hilang meskipun function dijalankan ulang.
  // Memicu Re-render: Memberitahu React: "Hei, data berubah! Tolong gambar ulang layarnya!"

  // NOTE: anggap saja useState itu Ingatan (Memori) Jangka Pendek dari sebuah component.
  // NOTE: "search" memiliki nilai awal "", lalu setSearch digunakan untuk melakukan update pada nilai value "search"
  
  const [posts, setPosts] = useState(postsData);
  const [totalPost, setTotalPost] = useState(0);
  const onSearchChange = (value) => {
    const filteredPost = postsData.filter((item) => 
      item.title.includes(value)
    );
    setPosts(filteredPost);
    setTotalPost(filteredPost.length)
  };

  return (
    <>
      <h1>Simple Blog</h1>
      <Search searchChange={onSearchChange} totalData={totalPost}/>
      {posts.map(({ title, date, tags }, index) => {
        return <Article {...{ title, date, tags }} key={index} />;
      })}
    </>
  );
}

export default HomePage;
