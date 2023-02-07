<?php

class Student {

    // Alright, here we are making the variables from the table.

    //ID I'm making public because I'm thinking any other class might want to use it to pull a student's ID for example. 
    protected $ID;
    // The rest of the variables are more specific information that I don't want any class to be able to access. More sensitive information.
    protected $lname;
    protected $fname;
    protected $image;
    // ProgramID I'm also making public for the same reason as above
    public $programID;
    protected $level;

    // Additional properties that may make sense to add
    protected $grade;


    // Alright, making a basic student construction
    public function __construct($ID, $lname, $fname, $image, $programID, $level, $grade) {
        
        $this->ID = $ID;
        $this->lname = $lname;
        $this->fname = $fname;
        $this->image = $image;
        $this->programID = $programID;
        $this->level = $level;
        $this->grade = $grade;

    }


    // These are some functions we could do with the variables above
    public function showGrade($studentID){
        $studentGrade = showProfile($studentID);
        echo $studentGrade[6];

    }

    public function showProfile($studentID){
        $studentProfile = StudentFinder($studentID);
        echo $studentProfile;
    }

    public function updateProfile(){

    }


}

class RegisteredStudent extends Student {

    public $totalRegisteredStudents;

    // If we want to update a students' grade for example, I think this would be the way to do it
    public function updateGrade($studentID, $updatedGrade){
        
        $currentGrade = StudentFinder($studentID);
        // I don't know how to do this part
        $grade = $updatedGrade;

    }

    public function addStudent(){
        $this->totalRegisteredStudents = $totalRegisteredStudents + 1;
    }

}

?>