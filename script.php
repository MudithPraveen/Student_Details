<?php
if(isset($_POST["submit"])){
    include "./class/DBClass.php";
    $db = new DBClass();
    $conn = $db->connect();

    $id=mysqli_real_escape_string($conn,$_POST["id"]);
    $fname=mysqli_real_escape_string($conn,$_POST["fname"]);
    $lname=mysqli_real_escape_string($conn,$_POST["lname"]);
    $year=mysqli_real_escape_string($conn,$_POST["year"]);

    include "./class/classes.php";
    $send = new InputData();
    $send->saveData($id,$fname,$lname,$year);

    header('location:./index.php');
}