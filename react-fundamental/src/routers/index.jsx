import { createBrowserRouter, Route } from "react-router-dom";
import RouterLayout from "../layout/RouterLayout";
import Home from "../pages/index";
import About from "../pages/about";
import Blog from "../pages/blogs";
import SinglePost from "../pages/blogs/__id";
import { postById, posts } from "../apis/loader";
import ErrorPage from "../components/ErrorPage";

export const router = createBrowserRouter([
  {
    path: "/",
    element: <RouterLayout />,
    // NOTE: errorElement digunakan untuk menampilkan halaman error. Jadi klo ngasal nulis url (contoh: /blog/1234), maka akan muncul halaman error page
    errorElement: <ErrorPage/>,
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
        // NOTE: loader digunakan untuk mengambil data dari apis/loader.js
        loader: posts,
      },
      {
        path: "/blog/:id",
        element: <SinglePost />,
        // NOTE: loader digunakan untuk mengambil data dari apis/loader.js
        loader: postById,
      },
    ],
  },
]);
