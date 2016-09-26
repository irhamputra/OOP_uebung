<?php

/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 9/26/16
 * Time: 4:45 PM
 */
class Application
{
    private $home = "home";
    public $frontend_nav = array(
        "home" => "Home",
        "reference" => "Referenzen",
        "contact" => "Contact",
        "login" => "Login"
    );
    
    public function validateParams(){
        if (!isset($_GET['p']) || empty($_GET['p'])){
            return $this->home;
        }else{
            if (!array_key_exists($_GET['p'], $this->frontend_nav)){
                //echo "Wrong!";
                return $this->home;
            }else{
                //echo "You are in the page";
                return $_GET['p'];
            }
        }
    }
}