<?php

namespace App\Models;

use App\Models\User;
use App\Traits\DateToJalali;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Link extends Model
{
    use HasFactory;
    use DateToJalali;

    protected $fillable = [
        'source_link'
    ];

    public static function boot(){
        parent::boot();
        static::bootJalali();
    }

    public static function genRandomStr(){
        do{
            $randString = str_shuffle('abcdefghijklmnopqrstuvwxyz1234567890');
            $subStr = substr($randString,0,6);
        }
        while(Link::where('destination_link',$subStr)->exists());
        return $subStr;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
