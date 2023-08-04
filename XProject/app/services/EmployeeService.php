<?php
class EmployeeService{
    public function getConn(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        return $conn;
    }
    public function getAllEmloyees(){
        $conn = $this->getConn();
        $sql = "SELECT id , name , address , salary  FROM employees ORDER BY id DESC";
        $stmt = $conn->query($sql);
        $employees = [];
        while($row = $stmt->fetch()){
            $employee = new Employee(
                $row[0],
                $row[1],
                $row[2],
                $row[3],
            );
            $employees[] = $employee;
        }
        return $employees;
    }
    public function getEmployeeById($id){
        $conn = $this->getConn();
        $sql = "SELECT id , name , address , salary  FROM employees WHERE id = $id";
        $stmt = $conn->query($sql);
        if($row = $stmt->fetch()){
            $employee = new Employee(
                $row[0],
                $row[1],
                $row[2],
                $row[3],
            );
            return $employee;
        }
    }
    public function delete($id){
        $conn = $this->getConn();
        $sql = "DELETE FROM employees WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    public function create(Employee $employee){
        $conn = $this->getConn();
        $sql = "INSERT INTO employee(id , name , address , salary) VALUES(null,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1,$employee->getName());
        $stmt->bindValue(2,$employee->getAddress());
        $stmt->bindValue(3,$employee->getSalary());
        $stmt->execute();
    }
    public function update(Employee $employee){
        $conn = $this->getConn();
        $sql = "UPDATE employee SET name = ? , address = ? , salary = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1,$employee->getName());
        $stmt->bindValue(2,$employee->getAddress());
        $stmt->bindValue(3,$employee->getSalary());
        $stmt->bindValue(5, $employee->getId());
        $stmt->execute();
    }
} 
?>