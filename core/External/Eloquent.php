<?php

namespace Core\External;

use Config\ArrayConfig\ConnectionArrayConfig;
use Core\Base\Interfaces\IBootable;
use Illuminate\Database\Capsule\Manager as Capsule;

class Eloquent implements IBootable
{
    // Приватный конструктор.
    private function __construct()
    {
    } // __construct.

    // Статический метод, создающий экземпляр класса.
    public static function make()
    {
        return new self();
    } // make.

    public function boot(): void
    {
        $capsule = new Capsule();

        $capsule->addConnection((new ConnectionArrayConfig())->getConfig());

        $capsule->bootEloquent();
    } // boot.
}