<?php
if ($_POST['do']) {
    require "function.php";
    $result = implode(" ", array($_POST['a'], $_POST['do'], $_POST['b']))." = ".math($_POST['a'], $_POST['b'], $_POST['do']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>w1</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="a"><br>
        <select name="do">
            <option value="+">сложенить</option>
            <option value="-">вычесть</option>
            <option value="*">умножить</option>
            <option value="/">разделить</option>
        </select><br>
        <input type="text" name="b"><br>
        <input type="submit" value="Посчитать">
    </form>
    <p><?= $result ? $result : ""; ?></p>
</body>
</html>
