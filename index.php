<?php
/**
 * Created by IntelliJ IDEA.
 * User: teocci
 * Date: 10/4/16
 * Time: 6:05 PM
 */

require_once 'Control/ItemController.php';
require_once 'Model/DVD.php';

$itemController = new ItemController(new DVD());