<?php

/**
 *
 */
class Login extends controller
{

  function __construct()
  {
    # code...
    parent::__construct();
    $this->view->render("login");
  }

  function login(){

    $this->model->login();

  }

}





 ?>
