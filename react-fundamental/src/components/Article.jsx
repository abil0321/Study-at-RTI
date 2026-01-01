import { useContext } from "react"
import {GlobalContext} from "../context"
const ArticleStatus = ({isNew}) => {
  return isNew && <span> - Baru Cuy!</span>
}

const NewArticle = () => {
  return <span> - Baru Cuy!</span>
}
function Article(props) {
  const user = useContext(GlobalContext);
  return (
    // NOTE: ini "<></>" nama nya fragment
    // "<></>" sama dengan "<div></div>"
    <>
      <h3>{props.title}</h3>
      <small>
        Date: {props.date}, tags: {props.tags.join(",")}
        {props.isNew && <NewArticle/>}
      </small>
      <div> 
        <small>Dibuat oleh {user.name} yang berumur {user.age} tahun</small>
      </div>
    </>
  );

  // NOTE: "return ;" single line return element, things, ...
  // "return (...);" more than one line
}

// NOTE: melakukan export agar bisa digunakan oleh component/file lain
export default Article;
