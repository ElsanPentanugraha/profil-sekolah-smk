<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;
    protected $table = 'photos';
    protected $fillable = [
        'name',
        'image',
    ];
}
