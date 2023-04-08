<?php

namespace App\Services;

use \DB;
use App\Models\Tweet;

interface CreateTweetDTO {
    const content = "";
    const author = "";
}

class CreateTweetService {
    public function execute(CreateTweetDTO $createTweetDTO) {
        Tweet::create([
            'content' => 'hoje vou travar zap',
            'author' => 'Don Cagão'
        ]);
    }
}