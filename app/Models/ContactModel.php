<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    public $fillable = [
        'name',
        'phone_number',
        'email',
        'service',
        'inquiry',
    ];
    
}
