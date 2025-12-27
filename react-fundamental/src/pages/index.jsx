import posts from "../posts.json"
import Article from "../components/Article";
function HomePage() {
  return (
    <>
      <h1>Simple Blog</h1>
      {posts.map((post) => {
          return <Article title={post.title} tags={post.tags} date={post.date}/>
      })}
    </>
  );
}

export default HomePage;
