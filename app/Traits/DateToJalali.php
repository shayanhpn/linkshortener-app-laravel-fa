<?php
namespace App\Traits;
trait DateToJalali{
    public static function bootJalali(){
        static::creating(function($model){
            $model->created_at = now()->toJalali();
            $model->updated_at = now()->toJalali();
        });
    }

    public function getBootJalali(){
        return $this->created_at;
    }
}
