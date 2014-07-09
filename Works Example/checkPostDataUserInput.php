
<?php

class checkPostDataUserInput {
    public $param = array();
        public function __construct(array $arrPost){
            if(is_array($arrPost) && !empty($arrPost)){
                return $this->param = $arrPost;
            }else{
                die("Error input POST");
            }
        }
        public function getInputData(array $arrPost){
            $this->param['name'] = $this->checkData($arrPost['name']);
            $this->param['age'] =  $this->checkData($arrPost['age']);
            $this->param['email'] =  $this->checkData($arrPost['email']);
            $this->param['password'] =  $this->checkPass($arrPost['password']);
        }

        protected function checkData($var){
            if(is_string($var)){
                return $var = (string)strip_tags(trim($var));
            }elseif(is_numeric($var)){
                return $var = (int)trim($var);
            }else{
                return false;
            }
        }
        protected function checkPass($var){
           return $var = md5($var);
        }
        protected function __clone(){}
        public function __toString(){
            echo '<pre>';
            print_r($this->param);
                return "";
        }

}






$obj = new checkPostDataUserInput($_POST);
$obj->getInputData($_POST);
print_r($obj->param);

?>

<form action="" method="post">
    <input type="text" name="name"/>
    <input type="password" name="password"/>
    <input type="text" name="age"/>
    <input type="submit"/>
</form>
