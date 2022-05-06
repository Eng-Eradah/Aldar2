<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getFileAttribute($value)
    {
        return url('images/report/') . '/' . $value;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function lawyer()
    {
        return $this->belongsTo(User::class, 'lawyer_id');
    }
}
