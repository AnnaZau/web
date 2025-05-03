<?php
namespace Factory\Models;

class Users extends Collection
{
    public function __construct(public ?array $users = null)
    {
        $users ??= [
            new User('dmitry.koterov@gmail.com', 'password', 'Дмитрий', 'Котеров'),
            new User('igorsimdyanov@gmail.com', 'password', 'Игорь', 'Симдянов'),
            new User('oleg.ivanov@gmail.com', 'password', 'Олег', 'Иванов'),
            new User('ivan.smirnov@gmail.com', 'password', 'Иван', 'Смирнов'),
            new User('olga.sidorova@gmail.com', 'password', 'Ольга', 'Сидорова')
        ];
        parent::__construct($users);
    }
}
?>
