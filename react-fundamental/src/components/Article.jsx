function Article() {
  let text1 = <div> Ini adalah tools yang saya bawa a, sudah di edit</div>;
  const tools = ["react.js", "Batu", "Lemari", "Laravel"];
  return (
    // NOTE: "<></>" nama nya fragment
    // "<></>" sama dengan "<div></div>"
    <>
      {text1}
      {tools.map((tool) => {
        return (
          <>
            <div>{tool}</div>
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
