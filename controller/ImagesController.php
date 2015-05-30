<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'ImageDAO.php';

class ImagesController extends Controller {

	private $imageDAO;

	function __construct() {
		$this->imageDAO = new ImageDAO();
	}

	public function index() {
		
		$this->set("spelers",$this->imageDAO->getAllPlayers());
		$this->set("bekers",$this->imageDAO->getRandomBekers());
		
	}


}