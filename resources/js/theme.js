import { createTheme } from '@mui/material/styles';

const theme = createTheme({
    palette: {
        mode: 'light',
        primary: {
            main: '#323F48',
        },
        secondary: {
            main: '#4B0082',
        },
        background: {
            default: '#f4f4f4',
            paper: '#ffffff',
        },
        text: {
            primary: '#323F48',
            secondary: '#4B0082',
        },
    },
    typography: {
        fontFamily: 'IBM Plex Sans, sans-serif',
        h6: {
            fontWeight: 700,
        },
        button: {
            textTransform: 'none',
        },
    },
});

export default theme;
