const ArticleStatus = ({isNew}) => {
  return isNew && <span> - Baru Cuy!</span>
}

const NewArticle = () => {
  return <span> - Baru Cuy!</span>
}
function Article(props) {
  return (
    // NOTE: ini "<></>" nama nya fragment
    // "<></>" sama dengan "<div></div>"
    <>
      <h3>{props.title}</h3>
      <small>
        Date: {props.date}, tags: {props.tags.join(",")}
        {/* // TODO: Conditional Rendering */}
        {/* // * ANCHOR: menggunakan ternary */}
        {/* {props.isNew ? " - Baru Cuy!" : " - Dah Lama"} */}
        {/* {props.isNew && " - Baru Cuy!"} */}

        {/* // * ANCHOR: menggunakan component terpisah */}
        {/* <ArticleStatus isNew={props.isNew}/> */} {/* // NOTE: Menggunakan props */}
        {props.isNew && <NewArticle/>} {/* // NOTE: Menggunakan props */}
      </small>
    </>
  );

  // NOTE: "return ;" single line return element, things, ...
  // "return (...);" more than one line
}

// NOTE: melakukan export agar bisa digunakan oleh component/file lain
export default Article;
