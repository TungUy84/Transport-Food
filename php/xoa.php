<?php
if(isset($_GET["id"])){
$id = $_GET["id"]; include "ketnoi.php";
$sql = "DELETE FROM qlthucpham WHERE id=$id";
$conn->query($sql); header("location: ../php/trangchu.php"); exit;
}
?>
