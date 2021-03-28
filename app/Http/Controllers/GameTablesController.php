<?php


namespace App\Http\Controllers;


use App\Services\GameTables\GameTablesService;
use Core\Http\Requests\PutRequest;
use Core\Http\Requests\Request;
use Core\Http\Responses\JsonResponse;

// TODO: Протестировать.
class GameTablesController
{
    // Сервисы класса.
    private GameTablesService $gameTablesService;

    // Конструктор.
    public function __construct(GameTablesService $gameTablesService)
    {
        $this->gameTablesService = $gameTablesService;
    } // __construct.

    public function get()
    {
        return JsonResponse::make($this->gameTablesService->getAllGameTables());
    } // get.

    public function post()
    {
        $this->gameTablesService->createGameTableFromArray(Request::make()->getData());
        return JsonResponse::make(Request::make()->getData(), [], 201);
    } // post.

    public function put($id)
    {
        $gameTable = $this->gameTablesService->getGameTableById($id);
        $this->gameTablesService->updateGameTable($gameTable, PutRequest::make()->getData());
        return JsonResponse::make([]);
    } // put.

    public function delete($id)
    {
        $gameTable = $this->gameTablesService->getGameTableById($id);
        $this->gameTablesService->deleteGameTable($gameTable);
        return JsonResponse::make([], [], 204);
    } // delete.
} // GameTablesController.