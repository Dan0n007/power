<?php

include "db.php";

?>

<link rel='stylesheet' href='style.css'>
<form action="post.php" method="post">

    <p>Называние фильма : <input required type="text" name="name" /></p>
    <p>Дата выхода: <input required type="text" name="ageyear" /></p>
    <p>Бюджет: <input required type="text" name="sel" /></p>
    <p>Режисер: <input required type="text" name="prod" /></p>
    <p><input type="submit"/></p>

</form>

