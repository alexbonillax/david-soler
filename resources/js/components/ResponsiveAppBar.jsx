import * as React from 'react';
import AppBar from '@mui/material/AppBar';
import Box from '@mui/material/Box';
import Toolbar from '@mui/material/Toolbar';
import IconButton from '@mui/material/IconButton';
import Typography from '@mui/material/Typography';
import MenuIcon from '@mui/icons-material/Menu';
import Container from '@mui/material/Container';
import Avatar from '@mui/material/Avatar';
import Tooltip from '@mui/material/Tooltip';
import Drawer from '@mui/material/Drawer';
import List from '@mui/material/List';
import ListItem from '@mui/material/ListItem';
import ListItemButton from '@mui/material/ListItemButton';
import ListItemIcon from '@mui/material/ListItemIcon';
import ListItemText from '@mui/material/ListItemText';
import Divider from '@mui/material/Divider';

import ShoppingCartIcon from '@mui/icons-material/ShoppingCart';
import InventoryIcon from '@mui/icons-material/Inventory';
import LocalOfferIcon from '@mui/icons-material/LocalOffer';
import DownloadIcon from '@mui/icons-material/Download';
import Brightness4Icon from '@mui/icons-material/Brightness4';
import Brightness7Icon from '@mui/icons-material/Brightness7';

const menuItems = [
    { text: 'Pedidos', icon: <ShoppingCartIcon />, link: '/desaOrders' },
    { text: 'Productos', icon: <InventoryIcon />, link: '/products' },
    { text: 'Cupones', icon: <LocalOfferIcon />, link: '/coupons' },
    { text: 'Descargas', icon: <DownloadIcon />, link: '/downloads' },
    { text: 'Perfil', icon: <Person />, link: '/perfil' },
];

const colors = ['#1976d2', '#388e3c', '#f57c00', '#7b1fa2', '#d32f2f', '#0288d1'];

function ResponsiveAppBar({ username, toggleDarkMode, darkMode }) {
    const [drawerOpen, setDrawerOpen] = React.useState(false);

    const initials = username ? username.trim().substring(0, 2).toUpperCase() : '?';
    const colorIndex = username ? (username.charCodeAt(0) % colors.length) : 0;
    const avatarColor = colors[colorIndex];

    const toggleDrawer = (open) => () => setDrawerOpen(open);

    return (
        <>
            {}
            <AppBar position="static">
                <Container maxWidth="xl">
                    <Toolbar disableGutters>
                        {}
                        <IconButton
                            size="large"
                            edge="start"
                            color="inherit"
                            aria-label="menu"
                            onClick={toggleDrawer(true)}
                            sx={{ mr: 2 }}
                        >
                            <MenuIcon />
                        </IconButton>

                        <Typography variant="h6" sx={{ flexGrow: 1 }}>
                            DESAVERSE
                        </Typography>

                        {}
                        <IconButton color="inherit" onClick={toggleDarkMode} sx={{ mr: 2 }}>
                            {darkMode ? <Brightness7Icon /> : <Brightness4Icon />}
                        </IconButton>

                        {}
                        <Tooltip title={username || 'Usuario'}>
                            <IconButton sx={{ p: 0 }}>
                                <Avatar sx={{ bgcolor: avatarColor, color: 'white' }}>
                                    {initials}
                                </Avatar>
                            </IconButton>
                        </Tooltip>
                    </Toolbar>
                </Container>
            </AppBar>

            {}
            <Drawer anchor="left" open={drawerOpen} onClose={toggleDrawer(false)}>
                <Box sx={{ width: 250 }} role="presentation" onClick={toggleDrawer(false)}>
                    <Typography variant="h6" sx={{ p: 2 }}>
                        Menú Principal
                    </Typography>
                    <Divider />
                    <List>
                        {menuItems.map((item) => (
                            <ListItem key={item.text} disablePadding>
                                <ListItemButton component="a" href={item.link}>
                                    <ListItemIcon>{item.icon}</ListItemIcon>
                                    <ListItemText primary={item.text} />
                                </ListItemButton>
                            </ListItem>
                        ))}
                    </List>
                </Box>
            </Drawer>
        </>
    );
}

export default ResponsiveAppBar;
