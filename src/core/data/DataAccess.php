<?php
/**
 * Main abstract class for accessing database data. This class contains the
 * necessary methods to connect, disconnect, and operate on the database.
 * The main idea behim this module is making the pages' code more simple.
 * 
 * @version 0.1
 * @package Maendeleo
 * @category Frontend
 * @since 0.1
 * @author Antonio Buzzelli
*/
class DataAccess
{
    /**
     * @access private
     * @var object $mysqli Mysqli connection handle
    */
    private $mysqli;
    
    /**
     * @access protected
     * @var array $config config.ini
    */
    protected $config;
    
    /**
     * Connects to the MySql database
     * 
     * @access protected
     * @return true if connected
     * @return false if can't connect
    */
    protected function connect()
    {
        $this->config  = parse_ini_file('../src/core/config.ini');
        $this->mysqli = new mysqli($this->config['db_host'],
                                   $this->config['db_user'],
                                   $this->config['db_pass'],
                                   $this->config['db_name']);
        
        if ($this->mysqli->connect_errno) {
            die("<b>DataAccess->connect(): </b>Failed to connect to MySQL: ("
            . $this->mysqli->connect_errno.") "
            . $this->mysqli->connect_error);
            
            return false;
        } else {
            return true;
        }
    }
    
    /**
     * Submits a query to MySql
     *
     * @access protected
     * 
     * @param string $sql Sql code
     * @param string $fetch ASSOC (for fetch_assoc) or ARRAY (for fetch_array)
     * 
     * @return false if num_rows === 0
     * @return array $assoc if ASSOC
     * @return array $array if ARRAY
    */
    protected function query(string $sql, string $fetch = Null)
    {
        if (!$result = $this->mysqli->query($sql)) {
            die("<b>DataAccess->query: </b>Could not retrieve table data: ("
                  . $this->mysqli->errno
                  . ") "
                  . $this->mysqli->error);
        }
        
    //    if ($result->num_rows === 0)
    ////print("<b>Warning: </b>DataAccess::query() returned 0 rows.<br><br>");
    //        return False;
        
        $array = array();
        
        if ($fetch === 'ASSOC') {
            return $assoc = $result->fetch_assoc();
        } else if ($fetch === 'ARRAY') {
            while($row = $result->fetch_array()) {
                array_push($array, $row[0]);
            }
            return $array;
        } else {
            return True;
        }
    }
    
    /**
     * Closes connection from MySql
     *
     * @access protected
    */
    protected function disconnect()
    {
        $this->mysqli->close();
    }
}
