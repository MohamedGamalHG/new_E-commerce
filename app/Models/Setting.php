<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    // type here to make filed from it like textarea we put in title textarea to make textarea or select or input
    protected  $fillable =['name','title','type','options','value','sorting_number'];

    protected  $hidden = ['created_at','updated_at'];
    // optins for dropdown list and anything can get in array
    public function getOptionsAttribute(){
        $array = [];
        if($this->attributes['options']!=null)
            $array = explode(',',$this->attributes['options']);
        return $array;
    }
    public function getRealValueAttribute(){
        //$this->options access the field option in database because we make it null or like currency have a data
        $set = $this->options;
        /*
         * here we test if the $set return null from the filed of options in DB then will return the value direct
            if the options have data like currency then the $set variable is not null it have data USD,EGP..
            then we get the array of value like $set[USD,EGP..] then $set[$this->attribute['value']]
            it will look to the field value then get the index from it to return
         * */
        /* Look to Field Options and Value in DB  */
        return $set == [] ? $this->attributes['value'] : $set[$this->attributes['value']];
    }
    public function getTitleAttribute()
    {
            return trans('admin.'.$this->attributes['title']);
    }
}
