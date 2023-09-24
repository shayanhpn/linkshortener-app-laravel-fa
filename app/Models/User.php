<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Link;
use Webpatser\Uuid\Uuid;

use App\Traits\DateToJalali;
use Hekmatinasser\Verta\Verta;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use DateToJalali;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'phonenumber',
        'email',
        'password'
    ];

    public static function boot(){
        parent::boot();
        static::bootJalali();
        self::creating(function ($model) {
            $model->id = (string) Uuid::generate(4);
        });
        
    }

    // Define A Relationship Between The User Model And The Link Model
    public function links(){
        return $this->hasMany(Link::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
