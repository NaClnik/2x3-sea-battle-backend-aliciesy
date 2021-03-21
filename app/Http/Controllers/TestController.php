<?php


namespace App\Http\Controllers;


use App\Models\Player;
use App\Services\Test\TestService;
use Core\Base\Abstracts\BaseController;
use Core\Http\Responses\JsonResponse;
use Workerman\Worker;

class TestController extends BaseController
{
    // Write actions here.
    public function index(): JsonResponse {




        return JsonResponse::make([]);
    } // index.
} // TestController.