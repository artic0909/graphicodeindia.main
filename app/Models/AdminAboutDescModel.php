<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAboutDescModel extends Model
{
    use HasFactory;

    public $fillable = [
        'desc_one',
        'desc_two',
        'desc_three',
    ];
}
