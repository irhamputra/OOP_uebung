<?php
require_once "class/Application.php";
require_once "class/FormHandler.php";

$app = new Application();
$form = new FormHandler();
$form->validate($_POST['contact']);


?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <!-- Navigation -->
    <?php include "include/navigation.php"?>

    <?php include "pages/" . $app->validateParams() . ".php"; ?>

</body>
</html>