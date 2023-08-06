<?php

class DBClass{

    public function connect(){

        try{
            $un="root";
            $pw="";
            $host="localhost";
            $db="studentdb";
            $con=mysqli_connect($host,$un,$pw,$db);
            return $con;
        }
        catch(PDOException $e){
            print "Error!: ".$e->getMessage()."<br/>";
            die();
        }
    }
}