<?php
include "admin/config.php";
if ($_POST['add']) {
    $name = substr((string)htmlspecialchars(strip_tags($_POST['nickname'])), 0, 64);
    $body = (string)htmlspecialchars(strip_tags($_POST['feedback']));
    $values = "feedback='$body'" . ($name ? ", nickname='$name'" : "");
    mysqli_query($connect, "INSERT INTO feedback SET $values");
}

?>
<div>
    <?php
	include "admin/config.php";
    $result = mysqli_query($connect, "SELECT * FROM feedback");
    while ($feedback = mysqli_fetch_assoc($result)) {
        echo $feedback['nickname']."<a name='".$feedback['id']."' href='#".$feedback['id']."'>#</a><p>".$feedback['feedback']."</p>\n";
    }
    ?>
</div>
<form action="index.php?st=2" method="POST">
    <fieldset class="feedback-form">
        <legend>Оставьте отзыв</legend>
        <div>
            <p><input name="nickname" type="text" placeholder="Введите ваше имя"></p>
            <p><textarea name="feedback" cols="60" rows="10" required></textarea></p>
            <p><input type="submit" name="add"></p>
        </div>
    </fieldset>
</form>
