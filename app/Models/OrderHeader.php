<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHeader extends Model
{
    use HasFactory;
    protected $table = "order_header";
    const BASETABLE = "order_header";
}
