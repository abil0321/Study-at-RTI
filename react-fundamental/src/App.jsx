import './App.css'
import Article from './components/Article'

function App() {
  return (
    <div className='App'>
      {/* <Article />
      <div>jeda</div> */}
      
      <Article name="Language" tools={["Javascript", "PHP", "Java"]}/>
      <Article name="Framework" tools={["react.js", "Laravel", "Springboot"]}/>

    </div>
  )
}

export default App
