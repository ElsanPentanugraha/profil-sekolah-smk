<?php

namespace App\Models;

// use App\Models\Information;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
        'name',
    ];

    public function informations()
    {
        return $this->belongsToMany(Information::class, 'informations_category', 'category_id', 'informations_id');
    }
}
