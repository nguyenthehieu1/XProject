<?php
    class EmployeeController{
        public function index(){
            $employeeService = new EmployeeService();
            $employees = $employeeService->getAllEmloyees();
            include APP_ROOT."/app/views/employee/index.php";
        }
        public function destroy(){
            $id = $_GET['id'];
            $employeeService = new EmployeeService();
            $employeeService->delete($id);
            header("Location: ".DOMAIN."/public/index.php");
            exit();
        }
        public function create(){
            include APP_ROOT."/app/views/employee/add.php";
        }
        public function store(){
            $name = $_POST['name'];
            $address = $_POST['address'];
            $salary = $_POST['salary'];
            $employeeService = new EmployeeService();
            $employee = new Employee(null,$name , $address , $salary);
            $employeeService->create($employee);
            header("Location: ".DOMAIN."/public/index.php");
            exit();
        }
        public function edit(){
            $id = $_GET['id'];
            $employeeService = new EmployeeService();
            $employees = $employeeService->getEmployeeById($id);
            include APP_ROOT."/app/views/employee/edit.php";
        }
        public function update(){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $salary = $_POST['salary'];
            $employeeService = new EmployeeService();
            $employee = new Employee($id,$name , $address , $salary);
            $employeeService->update($employee);
            header("Location: ".DOMAIN."/public/index.php");
            exit();
        }
    }
?>