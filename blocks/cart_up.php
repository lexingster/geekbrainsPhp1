<?php
include "admin/config.php";


if ($_POST['buy']) {
    $buy = intval($_POST['buy']);
    $result = mysqli_query($connect, "SELECT price FROM prod WHERE id=".$buy);
    if (mysqli_num_rows($result)) {
        $product = mysqli_fetch_assoc($result);
        $_SESSION['cart']['prod'][$buy] += 1;
        $_SESSION['cart']['qty'] += 1;
        $_SESSION['cart']['total'] += $prod['price'];
    }
}
if ($_SESSION['cart']['qty']) {
    $inCart = $_SESSION['cart']['qty']." ".getNumEnding($_SESSION['cart']['qty'], array("товар","товара","товаров")).
        " на ".$_SESSION['cart']['total']." руб.";
}
else {
    $inCart = "пусто";
}
$cart = "<b><a href='index.php?st=4'>Корзина</a></b>:<p>".$inCart."</p>";

echo "$cart";