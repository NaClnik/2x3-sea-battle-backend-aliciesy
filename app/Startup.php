<?php


namespace App;


use Core\Base\Interfaces\IBootable;

class Startup implements IBootable
{
    // Приватный конструктор.
    public function __construct()
    {
    } // __construct.

    // Приватный метод, возвращающий экземпляр объекта.
    public static function make()
    {
        return new self();
    } // make.

    public function boot(): void
    {
    }
} // Startup.