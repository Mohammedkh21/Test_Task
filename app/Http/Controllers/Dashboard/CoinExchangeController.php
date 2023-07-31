<?php

namespace App\Http\Controllers\Dashboard;

use App\Api\coin\coin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoinExchangeController extends Controller
{
    public function __invoke($from , $to , $amount)
    {
        return coin::exchange($from,$to) * $amount;
    }
}
