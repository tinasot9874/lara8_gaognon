<?php
//if(!function_exists('isActived')){
//    function isActived(String $name){
//        return (strpos(Route::currentRouteName(), $name) === 0) ? 'active' : '';
//    }
//}


if(!function_exists('isDisplay')){
    function isDisplay($value){
       return $value == 1 ? "Display" : "Hidden";
    }
}
