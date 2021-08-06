<?php

if(!function_exists('getRole')){
    function getRole($id = null){
        $array = [
            trans('admin.user'),
            trans('admin.admin')
        ];
        return $id == null ? $array : $array[$id];
    }
}
