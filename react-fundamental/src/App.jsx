import './App.css'
import HomePage from './pages'
function App() {
  const value = false;
  return (
    <div className='App'>
      {value == true ? "benar" : "salah"}
     <HomePage/>
    </div>
  )
}

export default App
