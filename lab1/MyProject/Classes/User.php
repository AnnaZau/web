<?php
declare(strict_types=1);

namespace MyProject\Classes;

class User extends AbstractUser {
    private static int $userCount = 0; // Статическое свойство для подсчета экземпляров
    protected string $login; // Добавлено свойство login

    //Конструктор класса User
    public function __construct(string $username, string $login, string $password) {
        parent::__construct($username, $password); // Передаем username и password в родительский класс
        $this->login = $login; // Инициализация свойства login
        self::$userCount++; // Инкремент счетчика при создании нового экземпляра
    }
    
    public static function getUserCount(): int {
        return self::$userCount; // Метод для получения количества экземпляров
    }

    //Метод для отображения информации о пользователе
    public function showInfo() {
        echo "Username: {$this->username}, Login: {$this->login}\n";
    }

    //Деструктор класса User

    public function __destruct() {
        echo "Пользователь {$this->login} удален.\n";
    }
}
