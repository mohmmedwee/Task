<?php


class Employee
{
    private $firstName = "";
    private $lastName = "";
    private $monthlySalary = 0;
    public function __construct($firstName, $lastName, $monthlySalary){
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setMonthlySalary($monthlySalary);
    }
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setMonthlySalary($monthlySalary){
        if($monthlySalary >= 0){
            $this->monthlySalary = $monthlySalary;
        }
    }
    public function getMonthlySalary(){
        return $this->monthlySalary;
    }
}
