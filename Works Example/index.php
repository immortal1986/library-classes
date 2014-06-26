<?php
class Db_ext {
    protected static $dsn = 'mysql:dbname=mysql;host=127.0.0.1';
    protected static $user = 'root';
    protected static $password = '';
    protected static $_instance;
        public static function getInstance(){
            if(self::$_instance){
                return self::$_instance;
            }else{
                try{
                return self::$_instance = new PDO(self::$dsn,self::$user,self::$password);
                }catch(Exception $error){
                    echo $error->getCode().'<br>';
                    echo $error->getMessage().'<br>';
                    echo $error->getLine().'<br>';
                }
            }
        }
}
