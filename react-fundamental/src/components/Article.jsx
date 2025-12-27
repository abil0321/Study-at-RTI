function Article(props) {
  return (
    // NOTE: "<></>" nama nya fragment
    // "<></>" sama dengan "<div></div>"
    <>
      <h3>{props.name}</h3>
      {props.tools.map((tool) => {
        return (
          <>
            <ul>
              <li>{tool}</li>
            </ul>
          </>
        );
      })}
    </>
  );

  // NOTE: "return ;" single line return element, things, ...
  // "return (...);" more than one line
}

// NOTE: melakukan export agar bisa digunakan oleh component/file lain
export default Article;
