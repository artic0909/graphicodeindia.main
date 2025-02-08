<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMarqueeTextModel extends Model
{
    use HasFactory;

    public $fillable = [
        'marquee_text',
    ];
}
