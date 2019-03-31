<?php

namespace application\models;

use application\core\Model;

class Main extends Model {
    public $error;
    public function contactValidate($post){
        $nameLen = iconv_strlen($post['name']);
        $textLen = iconv_strlen($post['text']);
        if($nameLen<2 or $nameLen>20){
            $this->error = 'Name has been more 2 and less 20 chars';
            return false;
        }elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
            $this->error = 'E-mail incorrect';
            return false;
        }elseif($textLen<2 or $textLen>500){
            $this->error = 'Text area has been more 2 and less 500 chars';
            return false;
        }
        return true;
    }
}