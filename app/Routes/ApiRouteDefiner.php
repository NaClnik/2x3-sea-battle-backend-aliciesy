<?php


namespace App\Routes;


use App\Http\Controllers\PlayersController;
use Core\Base\Abstracts\RouteDefiner;
use Core\Routing\RoutesCollection;

// Класс, где нужно определять маршруты.
class ApiRouteDefiner extends RouteDefiner
{
    public function getRoutes(): RoutesCollection
    {
        $this->routesCollection->get('players', PlayersController::class, 'get');
        $this->routesCollection->post('players', PlayersController::class, 'post');
        $this->routesCollection->put('players/{id}', PlayersController::class, 'put');
        $this->routesCollection->delete('players/{id}', PlayersController::class, 'delete');

        return $this->routesCollection;
    } // getRoutes.
} // ApiRouteDefiner.