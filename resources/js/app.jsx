
import React from 'react';
import ReactDOM from 'react-dom/client';
import Navbar from './components/Navbar';
import LetterAvatar from './components/LetterAvatar';

const username = document.getElementById('app').dataset.username;

const App = () => {
    return (
        <div>
            <Navbar />
            <div style={{ padding: '2rem' }}>
                <h1>Hola {username} 👋</h1>
                <LetterAvatar username={username} />
            </div>
        </div>
    );
};

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(<App />);
