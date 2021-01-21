<?php
session_start();
include('../dbconnect.php');
$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$tel = $_POST['tel'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$amount = $_POST['amount'];
$address = $_POST['address'];
$ins = $_POST['ins'];


// query
$sql = "UPDATE patient SET 
    firstName = '$firstName', 
    lastName = '$lastName',
    tel = '$tel',
    age = '$age',
    sex = '$sex',
    amount = '$amount',
    address = '$address',
    ins = '$ins'
    WHERE id = $id
    
";
$q = $db->prepare($sql);
$q->execute();

$_SESSION['success_msg'] = "Record Updated Successfully";

header("location: index.php");


?>