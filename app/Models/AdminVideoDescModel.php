<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminVideoDescModel extends Model
{
    use HasFactory;

    protected $fillable =[
        'wlcm_txt',
        'desc',
        'contact',
        'email',
    ];
}
