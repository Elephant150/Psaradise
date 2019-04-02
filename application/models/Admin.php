<?php

namespace application\models;

use application\core\Model;

class Admin extends Model {
    public $error;
    public function loginValidate($post){
        $config = require 'application/config/admin.php';
        if($config['login'] != $post['login'] and $config['password'] != $post['password']){
            $this->error = 'Login or password incorrect';
            return false;
        }
        return true;
    }
}