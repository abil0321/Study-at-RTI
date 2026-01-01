import { NavLink, Outlet } from "react-router-dom";
import "../styles/index.css";

function RouterLayout() {
  const activeStyle = ({ isActive, isPending }) => {
    return isActive ? "active" : isPending ? "pending" : "";
  };

  return (
    <>
      <NavLink className={`${activeStyle} nav`} to={"/"}>
        Home{" "}
      </NavLink>{" "}
      |
      <NavLink className={`${activeStyle} nav`} to={"/blogs"}>
        My Blog
      </NavLink>{" "}
      |
      <NavLink className={`${activeStyle} nav`} to={"/about"}>
        About
      </NavLink>
      <Outlet />
    </>
  );
}

export default RouterLayout;
