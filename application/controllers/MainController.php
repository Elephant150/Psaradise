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
	        $this->view->message('success', 'Work');
        }
        $this->view->render('Contacts');
    }

    public function postAction() {
        $this->view->render('Post');
    }
}