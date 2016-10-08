<?php
/**
 * Class for parsing HTML5 templates
 * 
 * @version 0.1
 * @package Maendeleo
 * @category Backend
 * @since 0.1
 * @author Antonio Buzzelli
*/
class Template
{
    /**
     * Tags. They can be changed from here.
     * 
     * @access private
     * @var array
    */
    private $tag = array('open' => '{{', 'close' => '}}');
    
    /**
     * Name of the file extension.
     *
     * @access private
     * @var string
    */
    private $t_ext = ".tpl";
    
    /**
     * Directory path of the template file.
     *
     * @access private
     * @var string
    */
    private $t_dir;
    
    /**
     * Name of the template file to load.
     * 
     * @access private
     * @var string 
    */
    private $t_name;
    
    /**
     * Array of values which will be substituted.
     * 
     * @access private
     * @var array
    */
    private $content = array();
    
    /**
     * File path+filename
     * 
     * @access private
     * @var string
    */
    private $FILE;
    
    /**
     * @access private
     * @var object
    */
    private $handle;
    
    /**
     * New template object, and check if the file is reachable.
     * 
     * @param string $this->t_name
     * @param string $type Type of the template to load. 'p' for page and 'g'
     * for general
    */
    public function __construct(string $t_name, string $type = 'p')
    {
        $this->t_name = $t_name;
        
        $config = parse_ini_file('../src/core/config.ini');
        
        $this->t_dir = ($type === 'g')
            ? $config['GeneralLayoutDir']
            : $config['TemplatesDir'];
        
        $this->FILE = $this->t_dir . $this->t_name . $this->t_ext;
        
        if (!file_exists($this->FILE))
            die("<b>Template->__construct:</b> could not open the template file");
    }
    
    /**
     * Associates the tag with the content that will replace it.
     *
     * @param string $k Tag
     * @param string $v Content
    */
    public function set(string $k, string $v)
    {
        $this->content[$k] = $v;
    }
    
    /**
     * Opens the file, substitutes tags with content set with set() and
     * returns the html template.
     *
     * @return string $output
    */
    public function parse() : string
    {
        $this->handle = fopen($this->FILE, 'r');
        $output = fread($this->handle, filesize($this->FILE));

        foreach ($this->content as $k => $v)
            $output = str_replace($this->tag['open']
                                  . $k
                                  . $this->tag['close'],
                                  $v, $output);
        return $output;
    }
    
    /**
     * Close file as a destruct function
    */
    public function __destruct()
    {
        @fclose($this->handle);
    }
}
