<?php
session_start();
include('../dbconnect.php');
$a = $_POST['firstName'];
$b = $_POST['lastName'];
$c = $_POST['tel'];
$d = $_POST['age'];
$e = $_POST['sex'];
$f = $_POST['amount'];
$g = $_POST['address'];
$h = $_POST['ins'];
//$h = $_POST['date'];
// query
$sql = "INSERT INTO patient (firstName,lastName,tel,age,sex,amount,address,ins) VALUES (:a,:b,:c,:d,:e,:f,:g,:h)";
$q = $db->prepare($sql);
$q->execute(array(':a' => $a, ':b' => $b, ':c' => $c, ':d' => $d, ':e' => $e, ':f' => $f, ':g' => $g, ':h' => $h));

$_SESSION['success_msg'] = "Record Saved Successfully";

header("location: index.php");


?>