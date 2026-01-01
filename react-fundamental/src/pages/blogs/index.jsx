import { Link, useLoaderData } from "react-router-dom";
function Blog() {
  // NOTE: useLoaderData() digunakan untuk mengambil data dari loader (loader.js)
  const posts = useLoaderData();

  return (
    <>
      <h1>My Blog</h1>
      <hr />
      {posts.map((item, index) => (
        <div key={index}>
          <Link to={`/blog/${item.id}`}>- {item.title}</Link>
        </div>
      ))}
    </>
  );
}

export default Blog;
