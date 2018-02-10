# 解答

これは解答例です．

```php
<?php
function safe_output(string $input)
{
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

if (!empty($_GET['v'])) {
    echo safe_output($_GET['v']);
}
?>

```
