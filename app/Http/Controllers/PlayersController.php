<?php


namespace App\Http\Controllers;


use App\Services\Players\PlayersService;
use Core\Base\Abstracts\BaseController;
use Core\Http\Requests\Request;
use Core\Http\Responses\JsonResponse;

// TODO: Протестировать.
class PlayersController extends BaseController
{
    // Сервисы класса.
    private PlayersService $playersService;

    // Конструктор.
    public function __construct(PlayersService $playersService)
    {
        $this->playersService = $playersService;
    } // __construct.

    public function get()
    {
        return JsonResponse::make($this->playersService->getAllPlayers());
    } // get.

    public function post()
    {
    } // post.

    public function put()
    {

    }

    public function delete()
    {

    }
} // PlayersController.