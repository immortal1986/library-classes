<?php
interface CheakData{
    function returnClearData($data);
}
class CheakIntegerData implements CheakData{
    public $data;
    function returnClearData($data){
       if(is_numeric($data) && is_integer($data)){
           return $this->data =  strip_tags(trim((integer)$data));
       }elseif(is_float($data)){
           return $this->data =  strip_tags(trim((float)$data));
       }else{
           return false;
       }
    }
}
class CheakStringData implements CheakData{
    public $data;
    function returnClearData($data){
        if(is_string($data) && !empty($data)){
            return $this->data =  strip_tags(trim((string)$data));
        }else{
            return false;
        }
    }

}
class Factory{
    public static function CreateCheakers($type){
        switch($type){
            case 'int':
                 return new CheakIntegerData();
            case 'str':
                 return new CheakStringData();
        }

    }


}