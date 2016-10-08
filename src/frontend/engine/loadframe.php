<?php
/**
 * Loadframe
 *
 * Page that loads the frame and prints the finale page. It MUST be included
 * at the end of each page.
 * 
 * @version 0.1
 * @package Maendeleo
 * @category Frontend
 * @since 0.1
 * @author Antonio Buzzelli
*/

/**
  *  Loading the general layout
  */
$genLayout = new Template("Frame", 'g');

$genLayout->set('PageTitle',      $this_page->ProjectName);
$genLayout->set('ProjectName',    $this_page->ProjectName);
$genLayout->set('ProjectCountry', $this_page->ProjectCountry);

//Menu
//Generates the Dashboard>Select project list
$n = new Project();
$MenuProjectList = $n->print_project_list();
$genLayout->set('MenuProjectList',    $MenuProjectList);

//Puts the body page in the {{body}} of the general Frame
$genLayout->set('body',          $body_output);

/**
  *  Generate and print the whole page 
  */
echo $genLayout->parse();