<?php

// This is a simple one
class Program {

    protected $ID;
    protected $name;
    protected $description;

    protected $tuitionCost;

    public function __construct($ID, $name, $description){
        $this->name = $name;
        $this->description = $description;
    }

    // This is the only function I could think of with these two variables
    public function showProgram(){
        echo $name;
        echo $description;
        echo $tuitionCost;
    }

}

?>