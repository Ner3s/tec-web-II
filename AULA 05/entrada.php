<?php
    var_dump($_POST);
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $media = ($n1+ $n2)/2;

    echo "<p>Sua média é: $media</p>"
?>