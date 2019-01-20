<?php
namespace Employee\Models;

use Employee\Core;

class EmployeeModel extends Core\Database{
    public function __construct() {
        parent::__construct();
    }
    
    public function getAllEmployees(){
        $query = "SELECT * FROM employee ;";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result=$stmt->fetchAll(\PDO::FETCH_OBJ);
        return $result;
    }
    
    public function getEmployee($id){
        $query="SELECT employee.*,
            en.introduction as en_introduction, en.workExperience as en_workExperience, en.education as en_education,
            sp.introduction as sp_introduction, sp.workExperience as sp_workExperience, sp.education as sp_education,
            fr.introduction as fr_introduction, fr.workExperience as fr_workExperience, fr.education as fr_education,
            employeelog.datetimeCreated, employeelog.datetimeUpdated,
            createdBy.name as createdByName,
            updatedBy.name as updatedByName
            FROM employee
            LEFT JOIN employeeinfo en ON en.employeeID=employee.id and en.lang='en'
            LEFT JOIN employeeinfo sp ON sp.employeeID=employee.id and sp.lang='sp'
            LEFT JOIN employeeinfo fr ON fr.employeeID=employee.id and fr.lang='fr'
            LEFT JOIN employeelog ON employeelog.employeeID=employee.id
            LEFT JOIN employee createdBy ON employeelog.createdBy=createdBy.id
            LEFT JOIN employee updatedBy ON employeelog.updatedBy=updatedBy.id
            WHERE employee.id=".$id." ;
            ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result=$stmt->fetch(\PDO::FETCH_OBJ);
        return $result;
    }
}

