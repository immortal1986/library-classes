<?php
/**
 * Created by PhpStorm.
 * User: S.Shetinskiy
 * Date: 26.06.14
 * Time: 13:34
 */

namespace pattern;

interface dataClearReturn{
    function check($inputData);
}
class checkString implements dataClearReturn{
   function check($inputData){
       if(is_string($inputData)){
           return "yes this is really is string - " . $inputData;
       }else{
           return "no this is not string - " . gettype($inputData);
       }
   }
}
class checkInteger{
    function check($inputData){
        if(is_numeric($inputData)){
            return "is yours integer - {$inputData}";
        }else{
            return "Nope";
        }
    }
}


class Factory_method {
    public static function checker($data){
        $data = gettype($data);
            switch($data){
                case "integer": return new checkInteger();break;
                case "string": return new checkString();break;
            }
    }

}

$str = "MYSTRING";
$int =  100;

$objInt = Factory_method::checker($int);
    echo $objInt->check($int);
    echo $objInt->check($str);
$objStr = Factory_method::checker($str);
    echo $objStr->check($str);
    echo $objStr->check($int);