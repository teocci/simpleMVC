<?php

/**
 * Created by IntelliJ IDEA.
 * User: teocci
 * Date: 10/4/16
 * Time: 6:05 PM
 */

require_once 'Disk.php';

class DVD extends Disk{
    private $_runtime;

    public function __construct($title = '', $year = '', $runtime = '') {
        $this->_runtime = $runtime;
        parent::__construct($title, $year);
    }

    public function getTitle(){
        return $this->_title;
    }

    public function getRuntime(){
        return $this->_runtime;
    }
    public function getYear(){
        return $this->_year;
    }

    public function listIt()
    {
        $DVD1 = new DVD('DVD1','1980','60');
        $DVD2 = new DVD('DVD2','1981','80');
        $DVD3 = new DVD('DVD3','1982','72');
        $arrayDVD = array($DVD1, $DVD2, $DVD3);
        return $arrayDVD;
    }
}