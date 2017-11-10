<?php

class post extends controller
{

  function __construct()
  {
    parent::__construct();
    parent::loadModel("postce");

  }


  function post(){

    echo $_POST["text"];

  }

  function delete(){
    echo $_POST['id'];
  }

  function preview(){
  $this->view->render("post");
  }
  function load(){
      $this->model->load();
  }

}


 ?>
