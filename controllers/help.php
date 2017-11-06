<?php
	class Help extends Controller{

		public function __construct(){
			echo " HELP ";
			$this->view->render("help");
		}

		public function other($opt = ""){

			echo "\n other  optional $opt \n";

		}

	}