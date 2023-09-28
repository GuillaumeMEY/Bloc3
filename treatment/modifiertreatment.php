<?php
session_start();
require_once('../function/function.php');

echo $_POST['title'];
echo $_POST['text'];
echo $_POST['id_text'];

updateText($db,$_POST['title'], $_POST['text'], $_POST['id_text']);

header('location:../view/profil.php');