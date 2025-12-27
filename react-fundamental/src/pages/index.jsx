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
      {posts.map((props, index) => {
        // TODO: menggunakan spread attributes
        // NOTE: kasusnya mirip seperti ini, jadi tuh nanti hasilnya "title={post.title} date={post.date} ...dst"
        return <Article {...props} key={index} />;
      })}
    </>
  );
}

export default HomePage;
