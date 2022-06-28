<?php
require_once("connection.php");
$estado=$_GET['estado'];
$id=$_GET['id'];
$sql="UPDATE newsletter SET estado = $estado WHERE id=$id";
mysqli_query($con, $sql) or die ($sql);
header("Location:newsletter.php");
?>