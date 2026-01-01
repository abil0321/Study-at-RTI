import "./App.css";
import { RouterProvider } from "react-router-dom";
import {router} from "./routers"
import { GlobalContext } from "./context"; 
function App() {
  const user = {
    name: "Rifky",
    age: 20,
  };

  return (
    <div className="App">
      <GlobalContext.Provider value={user}>
        <RouterProvider router={router}/>  {/* // NOTE: Konsepnya sama seperti "GlobalContext.Provider" */}
      </GlobalContext.Provider>
    </div>
  );
}

export default App;
