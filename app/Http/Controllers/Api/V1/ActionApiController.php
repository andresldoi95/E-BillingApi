<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\ActionService;

class ActionApiController extends Controller
{
    protected $actionService;
    public function __construct(ActionService $actionService)
    {
        $this->actionService = $actionService;
    }
    public function index()
    {
        return $this->actionService->all();
    }
}
