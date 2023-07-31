<?php

namespace App\Api\coin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class coin{



    public static function exchange($from , $to ){
        $result = Http::get("https://open.er-api.com/v6/latest/$from");
        return $result['rates'][$to];
    }
}
