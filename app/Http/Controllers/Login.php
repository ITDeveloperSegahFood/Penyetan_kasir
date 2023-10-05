<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Globals;
use App\Classes\Conns;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Administrator as ModelsAdministrator;

class Login extends Controller
{
    public function index()
    {
        $C_GLOBAL = new Globals();
        $C_CONNS = new Conns();
        $CONTENTS = [
            "company_full_name" => $C_CONNS->getCompanyDetailByToken("10001", "full_name"),
        ];
        return view('login')->with($CONTENTS);
    }

    public function auth(Request $request)
    {
        $C_GLOBAL = new Globals();

        $request->validate([
            'user_name' => 'required|max:255',
            'password' => 'required'
        ], $C_GLOBAL->validationMessages());

        $data = [];
        $fields = ["user_name"];

        foreach ($fields as $field) {
            ${$field} = $request->$field;
            $data += ["{$field}" => "${$field}"];
        }

        $data += ["is_active" => $C_GLOBAL->STATUS_ACTIVE];

        $selects = ["password_mobile", "token"];

        $user = DB::table(ModelsAdministrator::BASETABLE)->where($data)->select($selects)->first();
        if ($user) {
            $check_password = $C_GLOBAL->authPassword($request->password, $user->password_mobile);
            if ($check_password) {
                Session::put("token", $user->token);
                return redirect(route('marketplace.index'));
            }
            return redirect('login/gagal');
        }
        return redirect('login/gagal'); 
    }

    public function information_failed()
    {
        $C_GLOBAL = new Globals();
        $C_CONNS = new Conns();
        $CONTENTS = [
            "company_full_name" => $C_CONNS->getCompanyDetailByToken("10001", "full_name"),
            "status" => "failed",
            "title" => "GAGAL MASUK",
            "body" => "Maaf, Terjadi kesalahan. Pastikan isian data telah benar dan silahkan coba kembali. Terimakasih.",
        ];
        return view('information')->with($CONTENTS);
    }
}
