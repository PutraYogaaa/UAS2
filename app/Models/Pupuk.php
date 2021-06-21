<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pupuk extends Model
{
    use HasFactory;
    protected $table = "pupuks";
    protected $fillable = [
        'category_id',
        'title',
        'content',
        'gambar',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
