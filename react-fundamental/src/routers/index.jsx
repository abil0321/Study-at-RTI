import { createBrowserRouter, Route } from "react-router-dom";
import RouterLayout from "../layout/RouterLayout";
import Home from "../pages/index";
import About from "../pages/about";
import Blog from "../pages/blogs";
import SinglePost from "../pages/blogs/__id";

export const router = createBrowserRouter([
  {
    path: "/",
    element: <RouterLayout />,
    children: [
      {
        path: "/",
        element: <Home />,
      },
      {
        path: "/about",
        element: <About />,
      },
      {
        path: "/blogs",
        element: <Blog />,
      },
      {
        path: "/blog/:id",
        element: <SinglePost />,
      },
    ],
  },
]);
