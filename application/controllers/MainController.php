<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

	public function indexAction() {
		$this->view->render('Home');
	}

    public function aboutAction() {
        $this->view->render('About');
    }

    public function contactsAction() {
	    if(!empty($_POST)){
	        if(!$this->model->contactValidate($_POST)){
                $this->view->message('Error!', $this->model->error);
            }
	        mail('miwun@easymail.top','message from blog',$_POST['name'].', '.$_POST['email'].', '.$_POST['text']);
	        $this->view->message('success', 'Message send for Admin');
        }
        $this->view->render('Contacts');
    }

    public function postAction() {
        $this->view->render('Post');
    }
}