import ReactDOM from 'react-dom/client';
function App () {
    return <>
        <h1>Hello World!</h1>
    </>
}

const app = document.getElementById('root');
const root = ReactDOM.createRoot(app);

root.render(<App></App>)