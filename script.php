<?php
if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $year=$_POST["year"];

    include "./class/classes.php";
    $send = new InputData();
    $send->saveData($id,$fname,$lname,$year);

    header('location:./index.php');
}