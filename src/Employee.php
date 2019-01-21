<?php

namespace Employee\Controllers;

use Employee\Models;

class Employee{
    protected $employeeModel;
    public function __construct() {
        $this->employeeModel= new Models\EmployeeModel();
    }
    
    public function getAllEmployees(){
        $employees= $this->employeeModel->getAllEmployees();
        if(!empty($employees)){
            foreach ($employees as $employee){
                foreach ($employee as $key=>$value){
                    $employee->{$key}=  htmlspecialchars($value);
                }
            }
        }
        return $employees;
    }


    public function getEmployee(){
        $id=$_GET["id"];
        $employee= $this->employeeModel->getEmployee($id);
        if(empty($employee)){
            throw new \Exception("User Not Found");
        }
        return $employee;
    }
    
}
