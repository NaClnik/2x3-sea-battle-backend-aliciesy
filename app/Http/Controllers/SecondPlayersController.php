<?php


namespace App\Http\Controllers;


use App\Services\SecondPlayers\SecondPlayersService;
use Core\Http\Requests\PutRequest;
use Core\Http\Requests\Request;
use Core\Http\Responses\JsonResponse;

// TODO: Протестировать.
class SecondPlayersController
{
    // Сервисы класса.
    private SecondPlayersService $secondPlayersService;

    // Конструктор.
    public function __construct(SecondPlayersService $secondPlayersService)
    {
        $this->secondPlayersService = $secondPlayersService;
    } // __construct.

    public function get()
    {
        return JsonResponse::make($this->secondPlayersService->getAllSecondPlayers());
    } // get.

    public function post()
    {
        $this->secondPlayersService->createSecondPlayerFromArray(Request::make()->getData());
        return JsonResponse::make(Request::make()->getData(), [], 201);
    } // post.

    public function put($id)
    {
        $secondPlayer = $this->secondPlayersService->getSecondPlayerById($id);
        $this->secondPlayersService->updateSecondPlayer($secondPlayer, PutRequest::make()->getData());
        return JsonResponse::make([]);
    } // put.

    public function delete($id)
    {
        $secondPlayer = $this->secondPlayersService->getSecondPlayerById($id);
        $this->secondPlayersService->deleteSecondPlayer($secondPlayer);
        return JsonResponse::make([], [], 204);
    } // delete.
} // SecondPlayersController.