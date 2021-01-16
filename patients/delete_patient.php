<?php
session_start();
include('../dbconnect.php');

$id = $_POST['id'];


$sql = "DELETE fROM patient WHERE id = $id";
$q = $db->prepare($sql);
$q->execute();

$_SESSION['success_msg'] = "Record Deleted Successfully";
header("location: index.php");


?>