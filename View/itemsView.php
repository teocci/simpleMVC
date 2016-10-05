<?php

/**
 * Created by IntelliJ IDEA.
 * User: teocci
 * Date: 10/4/16
 * Time: 6:05 PM
 */

class itemsView {
    public function __construct($list) {
        static $DVD = 'DVD';
        static $CD = 'CD';

        $obj = $list[0];

        if(is_a($obj, $DVD )) {
            require_once 'DVDView.php';
        } else {
            require_once 'CDView.php';
        }

    }

   // echo is_a($obj, 'D')
}