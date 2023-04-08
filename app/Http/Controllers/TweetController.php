<?php

namespace App\Http\Controllers;

use App\Services\CreateTweetService;
use App\Services\GetTweetsService;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index(GetTweetsService $getTweetsService) {
        return $getTweetsService->execute();
    }

    public function create(CreateTweetService $createTweetService, Request $request) {
        $createTweetService->execute($request->getContent());
    }
}
