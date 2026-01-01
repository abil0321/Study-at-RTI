import { useEffect, useState } from "react";
import { Link } from "react-router-dom";
function Blog() {
  // NOTE: Menggunakan state untuk set external data API
  const [posts, setPosts] = useState([]);
  // console.log(posts);

  useEffect(() => {
    fetch("https://jsonplaceholder.typicode.com/posts")
      .then((res) => res.json())
      .then((json) => setPosts(json));
  }, []);

  return (
    <>
      <h1>My Blog</h1>
      <hr />
      {posts.map((item, index) => (
        <div key={index} >
          <Link to={`/blog/${item.id}`}>- {item.title}</Link>
        </div>
      ))}
    </>
  );
}

export default Blog;
