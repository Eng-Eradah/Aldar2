<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getImageAttribute($value)
    {
        return url('images/book/') . '/' . $value;
    }
    public function getFileAttribute($value)
    {
        return url('images/bookFile/') . '/' . $value;
    }
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
