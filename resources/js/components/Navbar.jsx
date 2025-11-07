import React from 'react';
import AppBar from '@mui/material/AppBar';
import Box from '@mui/material/Box';
import Toolbar from '@mui/material/Toolbar';
import Typography from '@mui/material/Typography';
import Button from '@mui/material/Button';

const Navbar = () => {
    return (
        <Box sx={{ flexGrow: 1 }}>
            <AppBar position="static">
                <Toolbar>
                    <Typography variant="h6" component="div" sx={{ flexGrow: 1 }}>
                        Desaverse
                    </Typography>
                    <Button color="inherit">Inicio</Button>
                    <Button color="inherit">Pedidos</Button>
                    <Button color="inherit">Facturas</Button>
                    <Button color="inherit">Clientes</Button>
                </Toolbar>
            </AppBar>
        </Box>
    );
};

export default Navbar;
