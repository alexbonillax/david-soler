
import React from 'react';
import Avatar from '@mui/material/Avatar';
import Stack from '@mui/material/Stack';
import {yellow} from '@mui/material/colors';

const LetterAvatar = ({ username }) => {
    const initial = username ? username.charAt(0).toUpperCase(5) : '?';

    return (
        <Stack direction="column" spacing={2}>
            <Avatar sx={{ bgcolor: yellow[800] }}>{initial}</Avatar>
        </Stack>
    );
};

export default LetterAvatar;
