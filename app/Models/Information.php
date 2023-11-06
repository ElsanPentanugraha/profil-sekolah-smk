<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Information extends Model
{
    use HasFactory;
    protected $table = 'informations';
    protected $fillable = [
        'name',
        'write_by',
        'description',
        'image',
        'created_at',
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class, 'informations_category', 'informations_id', 'category_id');
    }
}
