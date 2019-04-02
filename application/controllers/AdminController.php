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
        if (isset($_SESSION['admin'])){
            $this->view->redirect('admin/add');
        }
        if(!empty($_POST)){
            if(!$this->model->loginValidate($_POST)){
                $this->view->message('error !', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('admin/add');
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
    unset($_SESSION['admin']);
    $this->view->redirect('admin/login');
    }
    public function postsAction() {
        $this->view->render('Posts list');
    }
}