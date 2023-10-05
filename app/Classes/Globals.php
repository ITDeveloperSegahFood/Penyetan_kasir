<?php

namespace App\Classes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Classes\Conns;
use PDO;

class Globals
{
    public $STATUS_ACTIVE = "1";
    public $STATUS_INACTIVE = "0";

    public $DISPLAY_TABLE_PAGINATE_PER_PAGE = 10;
    public $DISPLAY_TABLE_PAGINATE_PER_PAGE_MAX = 1000;
    public $DISPLAY_TABLE_PAGINATE_PER_PAGE_MAX_X = 100000000000;

    public function validationMessages()
    {
        $res = [
            'required' => 'Bagian ini perlu diisi',
            'min' => 'Bagian ini minimal :min karakter',
            'max' => 'Bagian ini maksimal :max karakter',
            'email.unique' => 'Email ini telah terdaftar',
            "same" => 'Bagian ini tidak sama',
        ];

        return $res;
    }

    public function authPassword($INPUT, $DB)
    {
        return Hash::check($INPUT, $DB);
    }

    public function convertDataToArray($DATAS, $FIELDS)
    {
        $res = [];
        if (count($DATAS) > 0) {
            foreach ($DATAS as $DATA) {
                $temp = [];
                foreach ($FIELDS as $field) {
                    array_push($temp, $DATA->$field);
                }
                array_push($res, $temp);
            }
        }

        return $res;
    }
}