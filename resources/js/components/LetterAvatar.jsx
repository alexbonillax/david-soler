import React, { useEffect, useState } from 'react';
import Avatar from '@mui/material/Avatar';
import Stack from '@mui/material/Stack';
import { red, blue, green, yellow, purple, orange } from '@mui/material/colors';

const LetterAvatar = ({ username }) => {
    const initial = username ? username.charAt(0).toUpperCase() : '?';

    const colors = [red[500], blue[500], green[500], yellow[800], purple[500], orange[500]];


    const [randomColor, setRandomColor] = useState(colors[0]);

    useEffect(() => {
        const color = colors[Math.floor(Math.random() * colors.length)];
        setRandomColor(color);
    }, []);

    return (
        <Stack direction="column" spacing={2}>
            <Avatar sx={{ bgcolor: randomColor }}>{initial}</Avatar>
        </Stack>
    );
};

