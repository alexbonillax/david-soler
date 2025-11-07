import React, { useState } from 'react';
import ReactDOM from 'react-dom/client';
import { ThemeProvider, CssBaseline } from '@mui/material';
import ResponsiveAppBar from './components/ResponsiveAppBar';
import themeBase from './theme';

const username = document.getElementById('app').dataset.username;

const App = () => {
    const [darkMode, setDarkMode] = useState(false);

    const theme = {
        ...themeBase,
        palette: {
            ...themeBase.palette,
            mode: darkMode ? 'dark' : 'light',
        },
    };

    return (
        <ThemeProvider theme={theme}>
            <CssBaseline />
            <ResponsiveAppBar username={username} toggleDarkMode={() => setDarkMode(!darkMode)} darkMode={darkMode} />
        </ThemeProvider>
    );
};

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(<App />);
