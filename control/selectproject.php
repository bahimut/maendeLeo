<?php
/**
 * Select a project
 *
 * @version 0.1
 * @package Maendeleo
 * @category Control
 * @since 0.1
 * @author Antonio Buzzelli
*/

require_once '../src/loader.php';

if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT) !== false) {
    
    $id = $_GET['id'];
    $config = parse_ini_file('../src/core/config.ini');
    
    //SECURITY: check if $_GET['id'] is a good id to load
    $ids_arr = Tools::query("SELECT id from "
                 . $config['ProjectProfile'], 'ARRAY');
    
    if (in_array($id, $ids_arr)) {
        Tools::query("UPDATE `"
                     . $config['SelectedProject']
                     . "` SET `ProjectID` = '$id' LIMIT 1;", 'NO_RET');
        
        header("Location: ../overview/profile");
    } else {
        header("Location: ../overview/profile");
    }
} else {
    header("Location: ../overview/profile");
}
