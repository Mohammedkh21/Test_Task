<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Coin\CoinExchangeService;

class CoinExchangeController extends Controller
{
    public function __invoke($from , $to , $amount , CoinExchangeService $coinExchangeService)
    {
        return  $coinExchangeService->exchange($from,$to) * $amount;
    }
}
