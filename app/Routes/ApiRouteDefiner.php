<?php


namespace App\Routes;


use Core\Base\Abstracts\RouteDefiner;
use Core\Routing\RoutesCollection;

// Класс, где нужно определять маршруты.
class ApiRouteDefiner extends RouteDefiner
{
    public function getRoutes(): RoutesCollection
    {

        return $this->routesCollection;
    } // getRoutes.
} // ApiRouteDefiner.