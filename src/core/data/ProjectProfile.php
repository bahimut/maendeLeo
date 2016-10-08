<?php
/**
 * Class for accessing the project's profile
 * 
 * @version 0.1
 * @package Maendeleo
 * @category Core\DataAccess
 * @since 0.1
 * @author Antonio Buzzelli
*/
class ProjectProfile extends DataAccess
{
    /**
     * @access public
     * @var string $ProjectName
    */
    public $ProjectName;
    
    /**
     * @access public
     * @var string $ProjectTitle
    */
    public $ProjectTitle;
    
    /**
     * @access public
     * @var string $ProjectImplementingOrg
    */
    public $ProjectImplementingOrg;
    /**
     * @access public
     * @var string $ProjectCountry
    */
    public $ProjectCountry;
    
    /**
     * @access public
     * @var string $ProjectLocation
    */
    public $ProjectLocation;
    
    /**
     * @access public
     * @var string $ProjectPM
    */
    public $ProjectPM;
    
    /**
     * @access public
     * @var string $ProjectPMA
    */
    public $ProjectPMA;
    
    /**
     * @access public
     * @var string $ProjectGrant
    */
    public $ProjectGrant;
    
    /**
     * @access public
     * @var string $ProjectMainDonor
    */
    public $ProjectMainDonor;
    
    /**
     * @access public
     * @var string $ProjectBeneficiaries
    */
    public $ProjectBeneficiaries;
    
    /**
     * @access public
     * @var string $ProjectDescription
    */
    public $ProjectDescription;
    
    /**
     * @access public
     * @var string $ProjectField
    */
    public $ProjectField;
    
    /**
     * @access public
     * @var string $ProjectField1
    */
    public $ProjectField1;
    
    /**
     * @access public
     * @var string $ProjectField2
    */
    public $ProjectField2;
    
    /**
     * @access public
     * @var string $ProjectField3
    */
    public $ProjectField3;
    
    /**
     * Connects to the database through DataAccess->connect() e redirects to the
     * other functions based on the arguments given.
     * 
     * @access public
     * @param string $handle_type Table key
     * @param string $handle Table value
    */
    public function __construct(
        string $handle_type=NULL,
        string $handle=NULL
    ) {
        $this->handle_type = $handle_type;
        $this->handle      = $handle;
        
        $this->connect();
        
        if (isset($this->handle_type) && isset($this->handle))
            self::extract();
        else if (isset($this->handle_type) || isset($this->handle))
            print('<b>ProjectProfile->__construct:
                  </b>class takes 2 arguments
                  or 0. Check usage.<br><br>');
        else;
            //
    }
    
    /**
     * Selects * from the ProjectProfile table and attributes
     * the results to the class' vars.
     * 
     * @access private
     * @param string $this->handle_type Table key
     * @param string $this->handle Table value
    */
    private function extract()
    {
        $sql = "SELECT * FROM "
        . $this->config['ProjectProfile']
        . " WHERE " . $this->handle_type . " = '" . $this->handle . "'";
        
        if (!$row = $this->query($sql, 'ASSOC'))
            die("<b>ProjectProfile->extract: </b>reported 0 rows.
                Check handles.");
        else {
            $this->ProjectName            = $row['ProjectName'];
            $this->ProjectTitle           = $row['ProjectTitle'];
            $this->ProjectImplementingOrg = $row['ProjectImplementingOrg'];
            $this->ProjectCountry         = $row['ProjectCountry'];
            $this->ProjectLocation        = $row['ProjectLocation'];
            $this->ProjectPM              = $row['ProjectPM'];
            $this->ProjectPMA             = $row['ProjectPMA'];
            $this->ProjectGrant           = $row['ProjectGrant'];
            $this->ProjectMainDonor       = $row['ProjectMainDonor'];
            $this->ProjectBeneficiaries    = $row['ProjectBeneficiaries'];
            $this->ProjectDescription     = $row['ProjectDescription'];
            $this->ProjectField1          = $row['ProjectField1'];
            $this->ProjectField2          = $row['ProjectField2'];
            $this->ProjectField3          = $row['ProjectField3'];
            $this->ProjectField = '<a class=one href=>' . $this->ProjectField1
                                . '</a>'
                                . ', <a class=one href=>' . $this->ProjectField2
                                . '</a>'
                                . ', <a class=one href=>' . $this->ProjectField3
                                . '</a>';
        }
    }
    
    /**
     * Function that updates the ProjectProfile table
     * 
     * @access public
     * @param array $args
    */
    public function update(array $args)
    {
        unset($args['edit']);
        //Sql prep
        $sql = "UPDATE " . $this->config['ProjectProfile'] . " SET ";
        
        foreach ($args as $k => $v)
            $sql .= " `$k` = '$v',";
            
        $sql = rtrim($sql, ",");
        $sql .= " WHERE " . $this->handle_type . " = " . $this->handle . ";";
        //Query
        $this->query($sql, 'NO_RET');
        return true;
    }
    
    /**
     * Closes the connection with DataAccess::disconenct() as a
     * destruct function.
     *
     * @access public
    */
    public function __destruct()
    {
        $this->disconnect();
    }
}
