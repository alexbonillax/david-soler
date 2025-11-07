
import React from 'react';
import Avatar from '@mui/material/Avatar';
import Stack from '@mui/material/Stack';
import { deepOrange } from '@mui/material/colors';

const LetterAvatar = ({ username }) => {
    const initial = username ? username.charAt(0).toUpperCase(5) : '?';

    return (
        <Stack direction="row" spacing={1}>
            <Avatar sx={{ bgcolor: deepOrange[500] }}>{initial}</Avatar>
        </Stack>
    );
};

export default LetterAvatar;
