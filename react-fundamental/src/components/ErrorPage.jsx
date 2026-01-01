import { useRouteError } from "react-router-dom";
function ErrorPage() {
  // NOTE: useRouteError() digunakan untuk menampilkan halaman error
  // const Error = useRouteError();
  useRouteError();

  return (
    <>
      <h1>Error Page guys!!</h1>
    </>
  );
}

export default ErrorPage;
