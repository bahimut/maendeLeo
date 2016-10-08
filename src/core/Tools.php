<?php
/**
 * Class containing different static functions.
 * 
 * @version 0.1
 * @package OpenPMS
 * @category Core\DataAccess
 * @since 0.1
 * @author Antonio Buzzelli
*/
class Tools
{   
    /**
     * Function that pushes data into an assoc array
     * 
     * @param array &$array Reference to the array
     * @param string|int $key
     * @param string|int $value
     * 
     * @return array
    */
    public static function array_push_assoc(&$array, $key, $value) : array
    {
        $array[$key] = $value;
        return $array;
    }
    /**
     * Identical to DataAccess->query(), but with the advantage of being
     * called statically.
     *
     * @param string $sql Sql code
     * @param string $fetch ASSOC (for fetch_assoc) or ARRAY (for fetch_array)
     * 
     * @return false if num_rows === 0
     * @return array $assoc if ASSOC
     * @return array $array if ARRAY
    */
    public static function query($sql, $fetch = Null)
    {
        //Usage:
        //$p = Tools::query("SHOW TABLES", 'ARRAY');
        //var_dump($p);
        
        /**
         * MySql connection
        */
        $config = parse_ini_file('../src/core/config.ini');
        
        $mysqli = new mysqli($config['db_host'],
                             $config['db_user'],
                             $config['db_pass'],
                             $config['db_name']);
        
        if ($mysqli->connect_errno) {
            die("<b>Tools::query(): </b>Failed to connect to MySQL: ("
            . $mysqli->connect_errno.") "
            . $mysqli->connect_error);
        }
            
        /**
         * Query
        */
        if (!$result = $mysqli->query($sql)) {
            die("<b>Tools::query: </b>Could not retrieve table data: ("
                  . $mysqli->errno
                  . ") "
                  . $mysqli->error);
        }
        
        //if ($result->num_rows === 0)
        //    return False;
        
        $array = array();
        
        if ($fetch === 'ASSOC') {
            while($row = $result->fetch_array()) {
                self::array_push_assoc($array, $row[0], $row[1]);
            }
            return $array;
            //return $assoc = $result->fetch_assoc();
        } else if ($fetch === 'ARRAY') {
            while($row = $result->fetch_array()) {
                array_push($array, $row[0]);
            }
            return $array;
        }
        else {
            return True;
        }
        
        $mysqli->close();
    }
}
