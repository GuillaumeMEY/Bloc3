<?php

session_start();
require_once('../function/function.php');
var_dump($_SESSION);

var_dump($_POST);

$title = $_POST['title'];
$text = $_POST['text'];
$id_user = ($_SESSION['id_user']);



creatText($db, $title, $id_user, $text);

header('location:../view/profil.php');