<?php
namespace App\Controllers;
use App\Model\User;

class AuthController {
    public function loginForm() {
        include __DIR__ . '/../views/auth/login.php';
    }

    public function login() {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if (User::checkLogin($username, $password)) {
            session_start();
            $_SESSION['user'] = $username;
            header("Location: /books");
            exit;
        } else {
            echo "somthing wrong";
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: /login");
        exit;
    }
}
