<?php
namespace App\Model;

class User {
    private static array $users = [
        ['username' => 'admin', 'password' => '123456'],
    ];

    public static function checkLogin(string $username, string $password): bool {
        foreach (self::$users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                return true;
            }
        }
        return false;
    }
}
