import postsData from "../posts.json";
import Article from "../components/Article";
import Search from "../components/Search";
import { useEffect, useState } from "react";
function HomePage() {
  const [posts, setPosts] = useState(postsData);
  const [totalPost, setTotalPost] = useState(0);
  const onSearchChange = (value) => {
    let filteredPost = postsData.filter((item) => item.title.includes(value));
    
    setPosts(filteredPost);
    // NOTE: Menggunakan ternary untuk set total post ketika pencarian kosong
    value == "" ? setTotalPost(0) : setTotalPost(filteredPost.length);
  };

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
    </>
  );
}

export default HomePage;
