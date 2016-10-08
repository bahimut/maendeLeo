<?php

function country_list() : string
{
    $config = parse_ini_file('../src/core/config.ini');
    
    $PATH = '../src/frontend/templates/general/images/flags/';
    
    $flags = scandir($PATH);
    
    //Little adjustments...
    unset($flags[0]);
    unset($flags[1]);
    
    $countries = array();
    foreach ($flags as $flag) {
        array_push($countries, str_replace('.png', '', $flag));
    }
    
    $list = '<select name=ProjectCountry>';
    foreach($countries as $country)
        $list .= "<option value='$country'>$country</option>";
    $list .= '</select>';

    return $list;
}