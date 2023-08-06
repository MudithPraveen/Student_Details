<?php

class InputData{
    private $id;
    private $fname;
    private $lname;
    private $year;

    public function __construct($id,$fname,$lname,$year)
    {
        $this->$id=$id;
        $this->$fname=$fname;
        $this->$lname=$lname;
        $this->$year=$year;
    }
}