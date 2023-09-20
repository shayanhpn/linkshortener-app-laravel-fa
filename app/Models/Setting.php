<?php

namespace App\Models;

use App\Traits\DateToJalali;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    use DateToJalali;


    public static function boot(){
        parent::boot();
        static::bootJalali();
    }
    protected $fillable = [
        'logo',
        'site_description',
        'title',
        'copyright',
        'about'
    ];
}
