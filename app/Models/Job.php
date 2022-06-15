<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'start_date',
        'end_date',
        'title',
        'requirment',

    ];

    protected $appends=[
      'text'
    ];

    public function gettextAttribute()
{
return \Illuminate\Support\Str::words(html_entity_decode(strip_tags($this->requirment)), 20);

}

}
