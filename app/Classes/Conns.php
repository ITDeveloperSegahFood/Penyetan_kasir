<?php



namespace App\Classes;


use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

use Carbon\Carbon;

use App\Models\Company as ModelsCompany;
use App\Models\Marketplace as ModelsMarketplace;

class Conns
{
    public function getCompanyDetailByToken($TOKEN, $REQUEST){
        $C_GLOBAL = new Globals();
        $res = DB::table(ModelsCompany::BASETABLE)
                    ->where("token", '=', $TOKEN)
                    ->where("is_active", '=', $C_GLOBAL->STATUS_ACTIVE)
                    ->select($REQUEST)
                    ->first();
        return $res->$REQUEST;
    }

    
}