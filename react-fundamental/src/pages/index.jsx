import postsData from "../posts.json";
import Article from "../components/Article";
import Search from "../components/Search";
import { useState } from "react";
function HomePage() {
  const [posts, setPosts] = useState(postsData);
  const [totalPost, setTotalPost] = useState(0);
  const onSearchChange = (value) => {
    const filteredPost = postsData.filter((item) => item.title.includes(value));
    setPosts(filteredPost);
    setTotalPost(filteredPost.length);
  };

  return (
    <>
      <h1>Simple Blog</h1>
      <Search searchChange={onSearchChange} totalData={totalPost} />
      {posts.map(({ title, date, tags }, index) => {
        return <Article {...{ title, date, tags }} key={index} />;
      })}
    </>
  );
}

export default HomePage;
