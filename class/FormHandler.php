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
    public $statusHandler;
    public $formFields;
    
    public function __construct()
    {
        $this->status = new StatusHandler();
    }
    
    public function validate($param){
        if (isset($param["submit"])){
            foreach ($param as $formField => $formValue){
                if ($formField != "submit"){
                    if (empty($formValue)){
                        $this->statusHandler->$formField =  "Please insert this field " . $formField;
                        echo "this field is empty:" . $formField . "</br>";
                    }else{
                        // Excute the code

                    }
                }
            }
            if (empty($this->statusHandler->status)){
                echo "Mail sent";
            }
        }
    }
    
    private function sendMail(){
        
    }
    
}