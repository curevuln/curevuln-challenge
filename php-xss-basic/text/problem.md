# PHP XSS問

正常に動作するかのテスト問題です．

ユーザからの入力を引数として受取，適切にHTMLエスケープして出力する関数 `safe_output($input)` を作成せよ．  

```example.php
<?php
    function safe_output($input) {
        // Edit
        echo $input;
    }

    safe_output($_GET['v']);
?>
```

### 出力例

```
safe_output("test") // => test
safe_output("<script>alert(1)</script>") // => &gt;&lt;script&gt;alert(1)&lt;/script&gt;gt;
```
