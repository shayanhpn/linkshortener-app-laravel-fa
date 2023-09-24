<?php
namespace App\Traits;
trait DateToJalali{
    
    // Creating Set Jalili Date In created_at and updated_at column
    public static function bootJalali(){
        static::creating(function($model){
            $model->created_at = now()->toJalali();
            $model->updated_at = now()->toJalali();
        });
    }
}
