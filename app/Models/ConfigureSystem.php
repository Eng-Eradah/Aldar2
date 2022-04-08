<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigureSystem extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getAbouts(): string
    {
        return (int) self::query()->where('title','AboutUs')->first()->description??0;
    }

    public static function setAbouts($description): bool
    {
        return (bool) self::query()->updateOrInsert(['title'=>'AboutUs'],['description'=>$description]);
    }
    public static function getBrifes(): string
    {
        return (int) self::query()->where('title','Brife')->first()->description??0;
    }

    public static function setBrifes($description): bool
    {
        return (bool) self::query()->updateOrInsert(['title'=>'Brife'],['description'=>$description]);
    }
    public static function getVisions(): string
    {
        return (int) self::query()->where('title','Vision')->first()->description??0;
    }

    public static function setVisions($description): bool
    {
        return (bool) self::query()->updateOrInsert(['title'=>'Vision'],['description'=>$description]);
    }

    public static function getMissions(): string
    {
        return (int) self::query()->where('title','Mission')->first()->description??0;
    }

    public static function setMissions($description): bool
    {
        return (bool) self::query()->updateOrInsert(['title'=>'Mission'],['description'=>$description]);
    }
    public static function getScopes(): string
    {
        return (int) self::query()->where('title','Scope')->first()->description??0;
    }

    public static function setScopes($description): bool
    {
        return (bool) self::query()->updateOrInsert(['title'=>'Scope'],['description'=>$description]);
    }
    public static function getStrategys(): string
    {
        return (int) self::query()->where('title','Strategy')->first()->description??0;
    }

    public static function setStrategys($description): bool
    {
        return (bool) self::query()->updateOrInsert(['title'=>'Strategy'],['description'=>$description]);
    }
    public static function setAtt($AboutUs,$Vision,$Brife,$Mission,$Scope,$Strategy)
    {
         self::setAbouts($AboutUs);
         self::setVisions($Vision);
         self::setBrifes($Brife);
         self::setMissions($Mission);
         self::setScopes($Scope);
         self::setStrategys($Strategy);
         return true;
    }
}
