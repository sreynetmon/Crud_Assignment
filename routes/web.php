<?php
require_once "./app/controller/UserController.php";

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$userconntroller = new UserController();

if ($url == '/') {
    $userconntroller->getAllUser();
} elseif ($url == '/add') {
    $userconntroller->addUser();
} elseif ($url == '/edit') {
    $userconntroller->editUser();
} elseif ($url == '/update') {
    $userconntroller->updateUser();
}
elseif ($url == '/delete') {
    $userconntroller->deleteUser();
}elseif ($url == '/about') {
    return include 'app/view/about.php';
}
else {
    echo "404 Not Found";
}
