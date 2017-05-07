<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('assets_url'))
{
    function assets_url($var = '')
    {
    	$assets = trim($var,"/");
        return base_url()."assets/".$assets;
    }   
}
if ( ! function_exists('landing_url'))
{
    function landing_url($var = '')
    {
    	$landing= trim($var,"/");
        return base_url()."assets/landing/".$landing;
    }   
}
if ( ! function_exists('transportasi'))
{
    function transportasi($var = '')
    {
        $landing= trim($var,"/");
        return base_url()."assets/transportasi/".$landing;
    }   
}
if ( ! function_exists('user'))
{
    function user($var = '')
    {
        $landing= trim($var,"/");
        return base_url()."assets/user/".$landing;
    }   
}