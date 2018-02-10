<?php
function safe_output(string $input)
{
    // Edit
    return $input;
}

if (!empty($_GET['v'])) {
    echo safe_output($_GET['v']);
}
?>
