<?php


namespace Core\Bootstrap;


use App\Startup;
use Core\Base\Interfaces\IBootable;
use Core\External\Eloquent;

class WebApplicationLoader implements IBootable
{
    // Приватный конструктор.
    public function __construct()
    {
    } // __construct.

    // Статический метод, возвращающий экземпляр класса.
    public static function make(): WebApplicationLoader
    {
        return new self();
    } // make.

    public function boot(): void
    {
        Eloquent::make()->boot();
        Startup::make()->boot();
    } // boot.
}