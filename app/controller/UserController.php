<?php
require_once "./app/model/User.php";
class UserController {
    public function getAllUser(){
        $userModel = new User();
        $users = $userModel->getAllUsers();
        include 'app/view/listAllUser.php'; 
    }
    public function addUser(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $hireDate = $_POST['hire_date'];
            $jobTitle = $_POST['job_title'];
            $salary = $_POST['salary'];
            $departmentName = $_POST['department_name'];
            $userModel = new User();
           $success  = $userModel->addUser($firstName, $lastName, $email, $hireDate, $jobTitle, $salary, $departmentName);
            if ($success) {
                header("Location: /add");
                exit();
            } else {
                $error = "Failed to add user.";
            }
        }
        include 'app/view/add_user.php'; 
    }
public function editUser() {
    $id = $_GET['id'] ?? null;
    if ($id) {
        $userModel = new User();
        $user =   $userModel->getUserById($id);
        include 'app/view/edit_user.php';
    } else {
        echo " Invalid employee ID. dfdf";
    }
}

public function updateUser() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $hireDate = $_POST['hire_date'];
        $jobTitle = $_POST['job_title'];
        $salary = $_POST['salary'];
        $departmentName = $_POST['department_name'];

        if ($id && $firstName && $lastName && $email && $hireDate && $jobTitle && $salary && $departmentName) {
            $userModel = new User();
            $success = $userModel->updateUser($id, $firstName, $lastName, $email, $hireDate, $jobTitle, $salary, $departmentName);

            if ($success) {
                echo "✅ User updated successfully!";
                // Optionally redirect to user list
                header("Location: /");
                exit();
            } else {
                echo "❌ Failed to update user.";
            }
        } else {
            echo "❗ Please fill in all required fields.";
        }
    }
}

public function deleteUser() {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $userModel = new User();
        $success = $userModel->deleteUserById($id);

        if ($success) {
            header("Location: /");
            exit();
        } else {
            echo "❌ Failed to delete user.";
        }
    } else {
        echo "❗ User ID not provided.";
    }
}



}