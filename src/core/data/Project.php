<?php
/**
 * Class that manage the system for selecting a project
 * 
 * @version 0.1
 * @package Maendeleo
 * @category Core\DataAccess\Load
 * @since 0.1
 * @author Antonio Buzzelli
*/
class Project extends DataAccess
{
    /**
     * DB connection and function call
    */
    public function __construct()
    {
        $this->connect();
    }
    
    /**
     * Prints out the html list of the available projects for the menu
     * 
     * @access private
     * @return string $list
    */
    public function print_project_list() : string
    {
        $row = Tools::query("SELECT id, ProjectName FROM "
                     . $this->config['ProjectProfile'], 'ASSOC');
        
        $list = '';
        foreach ($row as $id => $PName) {
            $list .= "<li><a href='../control/selectproject?id=$id'>$PName</a></li>";
        }
        
        return $list;
    }
    
    /**
     * Loads the selected project
     * 
     * Defines the 'SELECTED' constant by attributing it the value of the
     * SelectedProject table
    */
    public function load_selected_project()
    {
        $row = $this->query("SELECT * FROM " . $this->config['SelectedProject'],
                            'ARRAY');
        define ('SELECTED', $row[0]);
    }
    
    /**
     * Disconnection
    */
    public function __destruct()
    {
        $this->disconnect();
    }
}