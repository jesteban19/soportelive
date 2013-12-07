<?php

class errorController extends Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->_view->renderizar('404',false,'404');
	}
}

?>