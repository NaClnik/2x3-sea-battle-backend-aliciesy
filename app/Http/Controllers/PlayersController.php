<?php


namespace App\Http\Controllers;


use App\Services\Players\PlayersService;
use Core\Base\Abstracts\BaseController;
use Core\Http\Requests\PutRequest;
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
        $this->playersService->createPlayerFromArray(Request::make()->getData());
        return JsonResponse::make(Request::make()->getData(), [], 201);
    } // post.

    public function put($playerId)
    {
        $player = $this->playersService->getPlayerById($playerId);
        $this->playersService->updatePlayer($player, PutRequest::make()->getData());
        return JsonResponse::make([]);
    } // put.

    public function delete($playerId)
    {
        $player = $this->playersService->getPlayerById($playerId);
        $this->playersService->deletePlayer($player);
        return JsonResponse::make([], [], 204);
    } // delete.
} // PlayersController.