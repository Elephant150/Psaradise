<?php

namespace application\models;

use application\core\Model;

class Admin extends Model
{
    public $error;

    public function loginValidate($post)
    {
        $config = require 'application/config/admin.php';
        if ($config['login'] != $post['login'] and $config['password'] != $post['password']) {
            $this->error = 'Login or password incorrect';
            return false;
        }
        return true;
    }

    public function postValidate($post, $type)
    {
        $nameLen = iconv_strlen($post['name']);
        $descriptionLen = iconv_strlen($post['description']);
        $textLen = iconv_strlen($post['text']);
        if ($nameLen < 2 or $nameLen > 100) {
            $this->error = 'Name has been more 2 and less 100 chars';
            return false;
        } elseif ($descriptionLen < 2 or $descriptionLen > 100) {
            $this->error = 'Description has been more 2 and less 100 chars';
            return false;
        } elseif ($textLen < 2 or $textLen > 500) {
            $this->error = 'Text area has been more 2 and less 5000 chars';
            return false;
        }

        if(empty($_FILES['img']['tmp_name']) and $type == 'add'){
            $this->error = 'File not selected';
            return false;
        }

        return true;
    }
}

