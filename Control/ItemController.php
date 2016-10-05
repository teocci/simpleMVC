<?php
/**
 * Created by IntelliJ IDEA.
 * User: teocci
 * Date: 10/4/16
 * Time: 6:05 PM
 */

require_once __DIR__ . '/../Model/ItemInterface.php';
require_once __DIR__ . '/../View/itemsView.php';

class ItemController {
    private $_items = array();

    public function __construct(ItemInterface $Items) {
        $this->_items= $Items->listIt();
        $this->showForm($this->_items);
    }

    public function showForm($list){
        $itemsView = new itemsView($list);
    }
}