<?php

namespace App\Services\Coin;

use Illuminate\Support\Facades\Http;

class CoinExchangeService
{
    public function exchange($from , $to ){
        $result = Http::get("https://open.er-api.com/v6/latest/$from");
        return $result['rates'][$to];
    }

}
