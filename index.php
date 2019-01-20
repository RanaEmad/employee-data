<?php

require_once __DIR__ . "/vendor/autoload.php";

use Employee\Controllers\Employee;

$employee = new Employee();
if (!isset($_GET["id"])) {
    $employees = $employee->getAllEmployees();
    include_once 'views/employees.php';
} else {
    try {
        $empData = $employee->getEmployee();
        include_once 'views/employee.php';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

