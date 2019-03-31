<?php

namespace application\models;

use application\core\Model;

class Admin extends Model {
    public $error;
    public function loginValidate($post){
            $this->error = 'Error';
        return true;
    }
}