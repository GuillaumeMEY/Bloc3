<?php 
require_once('../function/function.php');

    deleteText($db,$_GET['id_text']);
    header("location:../view/profil.php");