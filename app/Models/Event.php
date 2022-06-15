<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getImageAttribute($value)
    {
        return url('images/event/') . '/' . $value;
    }
    protected $appends=[
        'text'
      ];
  
      public function gettextAttribute()
  {
  return \Illuminate\Support\Str::words(html_entity_decode(strip_tags($this->description)), 20);
  
  }
}
