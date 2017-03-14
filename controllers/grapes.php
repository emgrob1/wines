<?php

class Grapes extends Controller{
	function __construct(){
		parent::__construct();
		$this->view->js = array('grapes/js/default.js');
	}
	
	function index() {
		$this->view->render('grapes/index');
	}
	
	
	function insertGrapes(){
		$this->model->grapesInsert();
	}
	
	function getGrapes(){
		$this->model->getGrapes();
	}
	
}

?>
