<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perosnalDetail extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        "dar_rate_srishak" => "array",
        "prati_ekai_dar" => "array",
        "parimad" => "array",
        "kaifiyat" => "array",
    ];
}
