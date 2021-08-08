<?php

if(!function_exists('editIconEdit'))
{
    function editIconEdit($url){
        return '<a href="'.$url.'" class="btn btn-primary"><i class="fa fa-edit"></i></a>';
    }
}

if(!function_exists('editIconDelete'))
{
    function editIconDelete($url){
        return '<a href="'.$url.'" class="btn btn-danger" id="delete" ><i class="fa fa-trash"></i></a>';
    }
}
