<?php

/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 9/26/16
 * Time: 4:51 PM
 */
class StatusHandler
{
    public $status = array();
    
    
    
    public function __get($param){
        $this->status[$param];
    }
    public function __set($param, $value){
        $this->status[$param] = $value;
    }
}