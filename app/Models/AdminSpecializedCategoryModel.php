<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSpecializedCategoryModel extends Model
{
    use HasFactory;

    public $fillable = [
        'category',
    ];

    /**
     * Define the relationship with AdminSpecializedModel.
     */
    public function specializedModels()
    {
        return $this->hasMany(AdminSpecializedModel::class, 'specialized_category');
    }
}
