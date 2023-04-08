<?php


namespace App\Services;

use App\Models\Tweet;
use \DB;

class GetTweetsService {
    public function execute() {
        return Tweet::get();
    }
}