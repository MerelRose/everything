<?php

class student 
{
    public $id;
    public $firstname;
    public $lastname;
    public $birthdate;
    public $city;
    public $education;


function Eat(){
    echo $this->firstname . " ik ben aan het eten";
}

function Sleep(){
    echo $this->firstname . " ik ben aan het slapen";
}

function Study(){
    echo $this->firstname . " ik ben aan het studeren";
}
}
$studentX = new student();
$studentX->firstname = "Remmert";
$studentX->lastname = "Gent";
$studentX->city = "Zwolle";

$studentY = new student();
$studentY->firstname = "Merel Rose";
$studentY->lastname = "De Vries";
$studentY->city = "Wolvega";

$studentX->Sleep();
echo "<br>";
$studentY->Eat();
