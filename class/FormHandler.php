<?php

/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 9/26/16
 * Time: 4:51 PM
 */
require_once "StatusHandler.php";
class FormHandler
{
    public $status;
    public $formFields;
    
    public function __construct()
    {
        $this->status = new StatusHandler();
    }
    
    public function validate(){
        
    }
    
    private function sendMail(){
        
    }
    
}