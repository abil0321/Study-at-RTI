import { useLoaderData } from "react-router-dom";

function SinglePost() {
  // NOTE: useLoaderData() digunakan untuk mengambil data dari loader (loader.js)
  const post = useLoaderData();

  return (
    <>
      <h2>{post?.title}</h2>
      <div>{post?.body}</div>
    </>
  );
}

export default SinglePost;
