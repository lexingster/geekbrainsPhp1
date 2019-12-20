<?php

if ($_POST['minus']) {
    $minus = intval($_POST['minus']);
    $_SESSION['cart']['prod'][$minus] -= 1;
}
if ($_POST['plus']) {
    $plus = intval($_POST['plus']);
    $_SESSION['cart']['prod'][$plus] += 1;
}
if ($_POST['delete']) {
    $delete = intval($_POST['delete']);
    $_SESSION['cart']['prod'][$delete] = 0;
}

$back = "<a href='index.php?st=3'>Вернуться в каталог</a>";
$content = $back;

if ($_SESSION['cart']['qty']>0) {
    $total = 0;
    $qty = 0;
    $content .= "<table>";
    foreach ($_SESSION['cart']['prod'] as $prodId => $prodQty) {
        $result = mysqli_query($connect, "SELECT * FROM prod WHERE id=".$prodId);
        if (($prod = mysqli_fetch_assoc($result)) && $prodQty > 0) {
            $content .= "<tr>
                <td><img src='".IMG_CAT ."mini/".$prod['image']."' width='80' height='60'></td>
                <td><b>".$prod['name']."</b></td>
                <td>".$prod['price']." руб.</td>
                <td>
                    <form action='' method='POST'>
                        <input type='hidden' name='minus' value='".$prodId."'>
                        <input type='submit' value='-'>
                    </form>
                    ".$prodQty." шт.
                    <form action='' method='POST'>
                        <input type='hidden' name='plus' value='".$prodId."'>
                        <input type='submit' value='+'>
                    </form>
                </td>
                <td><b>".$prod['price']*$prodQty." руб.</b></td>
                <td>
                    <form action='' method='POST'>
                        <input type='hidden' name='delete' value='".$prodId."'>
                        <input type='submit' value='Удалить'>
                    </form>
                </td>
            </tr>";
            $total += $prod['price']*$prodQty;
            $qty += $prodQty;
        }
        else {
            unset($_SESSION['cart']['prod'][$prodId]);
        }
    }
    $_SESSION['cart']['total'] = $total;
    $_SESSION['cart']['qty'] = $qty;
    $content .= "<tr><td colspan='4'></td><td><b>".$total." руб.</b></td></tr></table>";
}
if ($qty <=0) {
    $content = $back."<p>Вы не добавили ни одного товара</p>";
}

echo "$content";
