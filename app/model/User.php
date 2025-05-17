<?php
require_once "./config/BDConnection.php";
class User {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getAllUsers() {
        $sql = 'SELECT * FROM employees.employees ';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
 public function addUser($firstName, $lastName, $email, $hireDate, $jobTitle, $salary, $departmentName) {
    $sql = 'INSERT INTO employees.employees 
            (first_name, last_name, email, hire_date, job_title, salary, department_name) 
            VALUES (:first_name, :last_name, :email, :hire_date, :job_title, :salary, :department_name)';

    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':first_name', $firstName);
    $stmt->bindParam(':last_name', $lastName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':hire_date', $hireDate);
    $stmt->bindParam(':job_title', $jobTitle);
    $stmt->bindParam(':salary', $salary);
    $stmt->bindParam(':department_name', $departmentName);

    return $stmt->execute(); 
}
public function getUserById($id) {
    $sql = 'SELECT * FROM employees.employees WHERE employee_id = :id';
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function updateUser($id, $firstName, $lastName, $email, $hireDate, $jobTitle, $salary, $departmentName) {
    $sql = 'UPDATE employees.employees 
            SET first_name = :first_name, last_name = :last_name, email = :email, hire_date = :hire_date,
                job_title = :job_title, salary = :salary, department_name = :department_name
            WHERE employee_id = :id';

    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':first_name', $firstName);
    $stmt->bindParam(':last_name', $lastName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':hire_date', $hireDate);
    $stmt->bindParam(':job_title', $jobTitle);
    $stmt->bindParam(':salary', $salary);
    $stmt->bindParam(':department_name', $departmentName);
    $stmt->bindParam(':id', $id);

    return $stmt->execute();
}

public function deleteUserById($id) {
    $sql = "DELETE FROM employees.employees WHERE employee_id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}


}
?>
