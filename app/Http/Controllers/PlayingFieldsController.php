<?php


namespace App\Http\Controllers;


use App\Services\PlayingFields\PlayingFieldsService;
use Core\Http\Requests\PutRequest;
use Core\Http\Requests\Request;
use Core\Http\Responses\JsonResponse;

// TODO: Протестировать.
class PlayingFieldsController
{
    // Сервисы класса.
    private PlayingFieldsService $playingFieldsService;

    // Конструктор.
    public function __construct(PlayingFieldsService $playingFieldsService)
    {
        $this->playingFieldsService = $playingFieldsService;
    } // __construct.

    public function get()
    {
        return JsonResponse::make($this->playingFieldsService->getAllPlayingFields());
    } // get.

    public function post()
    {
        $this->playingFieldsService->createPlayingFieldFromArray(Request::make()->getData());
        return JsonResponse::make(Request::make()->getData(), [], 201);
    } // post.

    public function put($id)
    {
        $playingField = $this->playingFieldsService->getPlayingFieldById($id);
        $this->playingFieldsService->updatePlayingField($playingField, PutRequest::make()->getData());
        return JsonResponse::make([]);
    } // put.

    public function delete($id)
    {
        $playingField = $this->playingFieldsService->getPlayingFieldById($id);
        $this->playingFieldsService->deletePlayingField($playingField);
        return JsonResponse::make([], [], 204);
    } // delete.
} // PlayingFieldsController.