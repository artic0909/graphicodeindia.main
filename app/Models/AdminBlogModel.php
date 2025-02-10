<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminBlogModel extends Model
{
    use HasFactory;

    public $fillable = [
        'image',
        'title',
        'date',
        'desc',
    ];
}
