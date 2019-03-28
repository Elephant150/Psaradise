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