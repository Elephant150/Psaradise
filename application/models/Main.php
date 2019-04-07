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
    function postsCount(){
            return $this->db->column(/** @lang text */ 'SELECT COUNT(id) FROM posts');
    }

    function postsList($route){
        $max = 10;
        $params = [
            'max' => $max,
            'start' => (((isset($route['page']) ? $route['page'] : 1) - 1) * $max),
        ];
                return $this->db->row(/** @lang text */ 'SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
        }

}