<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected  $fillable =['name','title','type','options','value','sorting_number'];
    protected  $hidden = ['created_at','updated_at'];
    // optins for dropdown list and anything can get in array
    public function getOptionsAttribute(){
        $array = [];
        if($this->attributes['options']!=null)
            $array = explode(',',$this->attributes['options']);
        return $array;
    }
    public function getTitleAttribute()
    {
            return trans('admin'.$this->attributes['title']);
    }
}
