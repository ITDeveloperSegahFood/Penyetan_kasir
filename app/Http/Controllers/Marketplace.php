<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Globals;
use App\Classes\Conns;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Marketplace as ModelsMarketplace;


class Marketplace extends Controller
{
    public function index()
    {
        $C_GLOBAL = new Globals();
        $C_CONNS = new Conns();
        
        $xdatas = ModelsMarketplace::where('is_active', '=', '1')
                ->paginate($C_GLOBAL->DISPLAY_TABLE_PAGINATE_PER_PAGE);
        $datas = $C_GLOBAL->convertDataToArray($xdatas, ["id", "token", "ina", "eng", "image_name"]);

        $CONTENTS = [
            "company_full_name" => $C_CONNS->getCompanyDetailByToken("10001", "full_name"),
            "datas" => $datas,
        ];
        return view('marketplace')->with($CONTENTS);
    }
}
