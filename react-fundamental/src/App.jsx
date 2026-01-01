import "./App.css";
import HomePage from "./pages";
import { GlobalContext } from "./context"; // NOTE: Global Context mirip seperti database sementara
function App() {
  // NOTE: set data untuk digunakan ke context (useContext)
  const user = {
    name: "Rifky",
    age: 20,
  };

  return (
    <div className="App">
      {/* // * ANCHOR: Menggunakan context */}
      {/* //NOTE: Provider digunakan untuk menyediakan context */}
      <GlobalContext.Provider value={user}>
        <HomePage />
      </GlobalContext.Provider>
    </div>
  );
}

export default App;
