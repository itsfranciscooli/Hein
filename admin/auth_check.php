<?php
if(!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['idUser'])){
    header("Location:index.php");
}
?>