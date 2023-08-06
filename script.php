<?php
if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $year=$_POST["year"];

    include "./classes.php";
    $send = new InputData($id,$fname,$lname,$year);
}