<?php

class Course {

    protected $ID;
    protected $name;
    protected $number;
    protected $description;
    protected $prof;


    public function __construct($ID, $name, $number, $description) {
        $this->name = $name;
        $this->number = $number;
        $this->description = $description;
    }

    public function showCourse() {
        echo $name;
        echo $number;
        echo $description;
        echo $prof;
    }

}
?>