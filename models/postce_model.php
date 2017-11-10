<?php

class postce_model extends model
{

  function __construct()
  {
    parent::__construct();
  }

  function post(){

    echo $_POST["text"];

  }

  function delete(){
    echo $_POST['id'];
  }

  function preview(){

  }
  function load(){
    $query = $this->db->prepare("SELECT * FROM posts");
    $query->execute();
    echo json_encode($query->fetchAll());
  }

}


 ?>
