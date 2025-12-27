function Article(props) {
  return (
    // NOTE: "<></>" nama nya fragment
    // "<></>" sama dengan "<div></div>"
    <>
      <h3>{props.title}</h3>
      <small> Date: {props.date}, tags: {props.tags.join(",")}</small>
    </>
  );

  // NOTE: "return ;" single line return element, things, ...
  // "return (...);" more than one line
}

// NOTE: melakukan export agar bisa digunakan oleh component/file lain
export default Article;
