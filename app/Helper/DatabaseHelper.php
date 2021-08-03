<?php
use App\Models\Setting as setting;

if(!function_exists('getSetting')){
    function getSetting($title = 'title'){
        $setting = setting::where('name',$title)->first();
        return $setting == null ?$title : $setting->value;
    }
}
