<?php
class InputData{

    public function saveData($id,$fname,$lname,$year)
    {
        include "./class/DBClass.php";
        $db = new DBClass();
        $conn = $db->connect();

        $sql="INSERT INTO student VALUES('$id','$fname','$lname','$year');";
        mysqli_query($conn,$sql);
    }
}