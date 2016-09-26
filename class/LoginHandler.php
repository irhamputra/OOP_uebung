<?php

/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 9/26/16
 * Time: 4:48 PM
 */

require_once "StatusHandler.php";
class LoginHandler
{
    public $database;
    
    public $status;
    
    public function __construct(){
        
        $this->status = new StatusHandler();
    }
    
    public function userLogin(){
        
    }
    
}