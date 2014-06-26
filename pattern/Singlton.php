<?php
/**
 * Created by PhpStorm.
 * User: S.Shetinskiy
 * Date: 26.06.14
 * Time: 13:13
 */

namespace pattern;
class Singlton{
//  $_instance is our obj, default value is NULL
    protected static $_instance = null;
        public static function getInstance(){
            if(self::$_instance instanceof self){
                return self::$_instance;
            }else{
                return self::$_instance = new self;
            }
        }


}



//Create a two obj
$obj = Singlton::getInstance();
$objTwo = Singlton::getInstance();
//Like see this is #1 obj!
var_dump($obj);
var_dump($objTwo);
