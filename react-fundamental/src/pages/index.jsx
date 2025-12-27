import posts from "../posts.json"
import Article from "../components/Article";
function HomePage() {
  return (
    <>
      <h1>Simple Blog</h1>
      {posts.map(({title, date, tags}, index) => { // NOTE: Memasukkan item nya kedalam parameter biar tidak usah seperti ini "post.title post.title ... dst"
          // return <Article title={title} tags={tags} date={date}/>
          
          // TODO: menggunakan spread attributes
          // NOTE: kasusnya mirip seperti ini, jadi tuh nanti hasilnya "title={title} date={date} ...dst"
          // const title = "a";
          // const a = {title}
          return <Article {...{title, date, tags}} key={index}/>
      })}
    </>
  );
}

export default HomePage;
