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

    // Convert Date To Jalali Date
    public static function boot(){
        parent::boot();
        static::bootJalali();
    }

    // Generate Unique Random 6 length String For Links
    public static function genRandomStr(){
        do{
            $randString = str_shuffle('abcdefghijklmnopqrstuvwxyz1234567890');
            $subStr = substr($randString,0,6);
        }
        while(Link::where('destination_link',$subStr)->exists());
        return $subStr;
    }

    // Define A Relationship Between The Link Model And The User Model
    public function user(){
        return $this->belongsTo(User::class);
    }
}
