<?php
/*
 * Import extension authentication.php
 */
require_once LIB_PATH . '/Extension/authentication/authentication.php';

class Plugins_Authentication_Auth_AuthComponent extends Plugins_Authentication{
    var $allowUsers = array("adm");

    function checkPassword($username, $password){
        if(in_array(strtolower($username),$this->allowUsers)){
            return parent::checkPassword($username, $password);
        }else{
            return false;
        }
    }
}
?>