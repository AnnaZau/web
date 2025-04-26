<?php

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php'; 
    // echo str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php';
   
    if (file_exists($file)) {
        require $file;
        
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

$user1 = new User("Петя", "petya_123", "qwertyuiop");
$user2 = new User("Федя", "fedya_456", "asdfghjkl");
$user3 = new User("Ваня", "vanya_789", "zxcvbnm");

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user = new SuperUser("Анна", "anna_150", "b46tbakmr", "admin");
$user->showInfo();
$user->getInfo();

echo "<p>Всего обычных пользователей: " . User::$userCount . "\n</p>";
echo "<p>Всего cупер-пользователей: " . SuperUser::$superUserCount . "\n</p>";

