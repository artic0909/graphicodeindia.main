<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSpecializedModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'title',
        'specialized_category',
    ];

    /**
     * Define the relationship with AdminSpecializedCategoryModel.
     */
    public function category()
    {
        return $this->belongsTo(AdminSpecializedCategoryModel::class, 'specialized_category');
    }
}
