<?php
/**
 * Project General Info
 *
 * @version 0.1
 * @package Maendeleo
 * @category Frontend
 * @since 0.1
 * @author Antonio Buzzelli
*/

require_once '../src/loader.php';

//Retrieve selected project and load data
if (defined('SELECTED'))
    $this_page = new ProjectProfile('id', SELECTED);
    
if (isset($_GET['update'])) {
    if ($this_page->update($_POST))
        header('Location: ./profile');
}

/**
  *  Body
  *  
  *  DO NOT CHANGE THE NAME OF THE VARIABLES. THIS IS A TEMPLATE
  */
//Loading body template with edit control, otherwise load the display template
$body = (isset($_GET['edit']))
    ? new Template('profile_edit')
    : new Template('profile');


//Setting the content
$body->set('PageType', 'Project Profile');

$body->set('ProjectName',            $this_page->ProjectName);
$body->set('ProjectTitle',           $this_page->ProjectTitle);
$body->set('ProjectImplementingOrg', $this_page->ProjectImplementingOrg);
$body->set('ProjectCountry',         $this_page->ProjectCountry);
$body->set('ProjectLocation',        $this_page->ProjectLocation);
$body->set('ProjectPM',              $this_page->ProjectPM);
$body->set('ProjectPMA',             $this_page->ProjectPMA);
$body->set('ProjectGrant',           $this_page->ProjectGrant);
$body->set('ProjectMainDonor',       $this_page->ProjectMainDonor);
$body->set('ProjectBeneficiaries',    $this_page->ProjectBeneficiaries);
$body->set('ProjectDescription',     $this_page->ProjectDescription);
$body->set('ProjectField',           $this_page->ProjectField);
$body->set('ProjectField1',          $this_page->ProjectField1);
$body->set('ProjectField2',          $this_page->ProjectField2);
$body->set('ProjectField3',          $this_page->ProjectField3);

$body->set('ProjectCountryEDIT', country_list());

//Generates the body
$body_output = $body->parse();

//Load the frame and print the page
require_once '../src/frontend/engine/loadframe.php';
