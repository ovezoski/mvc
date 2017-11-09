<?php

  class Home extends Controller
  {

    public function pokazi($poraka){
      echo $poraka;
    }

    function __construct()
    {
    	parent::__construct();
    	$this->view->render("home");
    }
  }
