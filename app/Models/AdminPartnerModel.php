<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPartnerModel extends Model
{
    use HasFactory;

    public $fillable = [
        'partner_logo',
    ];
}
