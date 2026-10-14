<?php

class Student
{
    public $name;
    public $age;
    public $grade;

    public function introduce(){
        echo " Hi, I'm " . $this->name . ", " . $this->age . " years old, and I'm in grade " . $this->grade . ".";
    }

    public function study($Mathematics){
            echo "Alice is studying Mathematics.";
        }
}


