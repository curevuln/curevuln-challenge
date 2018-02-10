<?php
function safe_output(string $input)
{
    // Edit
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

if (!empty($_GET['v'])) {
    echo safe_output($_GET['v']);
}
?>
