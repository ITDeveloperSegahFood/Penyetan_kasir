<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Globals;
use App\Classes\Conns;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class History extends Controller
{
    public function index()
    {
        $C_GLOBAL = new Globals();
        $C_CONNS = new Conns();
        
        $CONTENTS = [
            "company_full_name" => $C_CONNS->getCompanyDetailByToken("10001", "full_name"),
        ];
        return view('history')->with($CONTENTS);
    }
}
