<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProjectModel extends Model
{
    use HasFactory;
    
    public $fillable = [
        'image',
        'title',
        'category',
        'link',
        'desc',
    ];
}
