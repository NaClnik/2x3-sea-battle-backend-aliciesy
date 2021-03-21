<?php


namespace App\Http\Controllers;


use App\Models\Player;
use App\Services\Test\TestService;
use Core\Base\Abstracts\BaseController;
use Core\Http\Responses\JsonResponse;

class TestController extends BaseController
{
    // Write actions here.
    public function index(): JsonResponse {
        $players = Player::all();

        $player = $players[0];

        return JsonResponse::make($player->player);
    } // index.
} // TestController.