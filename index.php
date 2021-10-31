<!-- Bootstrap CSS (jsDelivr CDN) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<!-- Bootstrap Bundle JS (jsDelivr CDN) -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>

<link rel='stylesheet' href='style.css'>
<form action="post.php" method="post">

    <p>Называние фильма : <input required type="text" name="name"/></p>
    <p>Дата выхода: <input required type="text" name="ageyear"/></p>
    <p>Бюджет: <input required type="text" name="sel"/></p>
    <p>Режисер: <input required type="text" name="prod"/></p>
    <p><input type="submit"/></p>

</form>

<?php

include "db.php";
include "functions.php";

$stmt = $conn->prepare("SELECT * FROM pwerfilm");
$stmt->execute();

// set the resulting array to associative
$films = $stmt->fetchAll();
pre($films);
?>
<ul>
    <?php
    foreach ($films as $film):
        ?>
        <li><?= $film['name']; ?></li>
    <?php
    endforeach;
    ?>
</ul>




