import postsData from "../posts.json";
import Article from "../components/Article";
import Search from "../components/Search";
import { useEffect, useState } from "react";
function HomePage() {
  const [posts, setPosts] = useState(postsData);
  const [totalPost, setTotalPost] = useState(0);
  // NOTE: Menggunakan state untuk set external data API
  const [externalPost, setExternalPost] = useState([]);
  const onSearchChange = (value) => {
    const filteredPost = postsData.filter((item) => item.title.includes(value));
    setPosts(filteredPost);
    setTotalPost(filteredPost.length);
  };

  // TODO: Fetch external data dari API menggunakan useEffect
  // NOTE: Menggunakan useEffect agar data external di fetch hanya sekali diawal
  useEffect(() => {
    console.log('fetch externalPost!');
    
    fetch('https://jsonplaceholder.typicode.com/todos')
    .then(res => res.json())
    .then(json => setExternalPost(json))
  }, []);

  // NOTE: Double useEffect jika ada yang ingin dijalankan ketika suatu kondisi terpenuhi
  useEffect(() => {
    console.log('ada pencarian post!');
  }, [posts]) // NOTE: ini triggernya, Pencarian post akan dijalankan ketika posts diubah

  return (
    <>
      <h1>Simple Blog</h1>
      <Search searchChange={onSearchChange} totalData={totalPost} />
      {posts.map((props, index) => {
        return <Article {...props} key={index} />;
      })}

      <hr/>

      {externalPost.map((item, index) => (
        <div key={index}>- {item.title}</div>
      ))}
    </>
  );
}

export default HomePage;
