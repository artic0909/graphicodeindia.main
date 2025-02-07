<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminNumbersModel extends Model
{
    use HasFactory;

    public $fillable = [
        'n_title',
        'n_num',
    ];
}
