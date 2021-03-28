<?php


namespace App\Http\Controllers;


use App\Services\FirstPlayers\FirstPlayersService;
use Core\Http\Requests\PutRequest;
use Core\Http\Requests\Request;
use Core\Http\Responses\JsonResponse;

// TODO: Протестировать.
class FirstPlayersController
{
    // Сервисы класса.
    private FirstPlayersService $firstPlayersService;

    // Конструктор.
    public function __construct(FirstPlayersService $firstPlayersService)
    {
        $this->firstPlayersService = $firstPlayersService;
    } // __construct.

    public function get()
    {
        return JsonResponse::make($this->firstPlayersService->getAllFirstPlayers());
    } // get.

    public function post()
    {
        $this->firstPlayersService->createFirstPlayerFromArray(Request::make()->getData());
        return JsonResponse::make(Request::make()->getData(), [], 201);
    } // post.

    public function put($id)
    {
        $firstPlayer = $this->firstPlayersService->getFirstPlayerById($id);
        $this->firstPlayersService->updateFirstPlayer($firstPlayer, PutRequest::make()->getData());
        return JsonResponse::make([]);
    } // put.

    public function delete($id)
    {
        $firstPlayer = $this->firstPlayersService->getFirstPlayerById($id);
        $this->firstPlayersService->deleteFirstPlayer($firstPlayer);
        return JsonResponse::make([], [], 204);
    } // delete.
} // FirstPlayersController.