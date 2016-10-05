<?php

/**
 * Created by IntelliJ IDEA.
 * User: teocci
 * Date: 10/4/16
 * Time: 6:05 PM
 */

require_once 'ItemInterface.php';

abstract class  Disk implements ItemInterface {
    protected $_title;
    protected $_year;

    public function __construct($title = "", $year = "") {
        $this->_title = $title;
        $this->_year = $year;
    }
}
