<?php

$text = $_POST['text'];

$path=$_GET['openid'];

file_put_contents($path,$text);

echo'<script type="text/javascript">
    alert("Texto Actualizado");
    window.location.href="index.php";
    </script>';




?>