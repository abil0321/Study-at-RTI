import { Link, Outlet } from "react-router-dom";

function RouterLayout() {
  return (
    <>
      <Link to={"/"}>Home </Link> | <Link to={"/blogs"}>My Blog</Link> | <Link to={"/about"}>About</Link>
      <Outlet />
    </>
  );
}

export default RouterLayout;
