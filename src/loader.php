<?php
/**
 * Load the openPMS environment
 *
 * @version 0.1
 * @package Maendeleo
 * @category Backend
 * @since 0.1
 * @author Antonio Buzzelli
*/
require_once '../src/frontend/engine/func_country_list.php';

spl_autoload_register (function ($class)
 {
  $sources = array("../src/core/data/$class.php",
                   "../src/core/$class.php",
                   "../src/frontend/engine/$class.php");

  foreach ($sources as $source) {
      if (file_exists($source)) {
          require_once $source;
      }
  }
 }
);

$n = new Project();
$n->load_selected_project();
