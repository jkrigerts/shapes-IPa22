import { useEffect } from "react";

function App() {
  useEffect(() => {
    async function getData() {
      const response = await fetch("http://localhost:80");
      const data = await response.json();
      console.log(data);
    }
    getData();
  });

  return <h1>Hi form frontend</h1>;
}

export default App;
