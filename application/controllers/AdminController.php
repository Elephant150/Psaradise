<?php

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller {

    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }

    public function loginAction() {
        if(!empty($_POST)){
            if(!$this->model->loginValidate($_POST)){
                $this->view->message('success!', 'Welcome in Admin menu');
            }
            mail('miwun@easymail.top','message from blog',$_POST['name'].', '.$_POST['email'].', '.$_POST['text']);
            $this->view->message('success', 'Message send for Admin');
        }
		$this->view->render('Login');
	}

    public function addAction() {
        $this->view->render('Add post');
    }

    public function editAction() {
        $this->view->render('Edit post');
    }

    public function deleteAction() {
	    exit('Delete');
    }

    public function logoutAction() {
        exit('Logout');
    }
}