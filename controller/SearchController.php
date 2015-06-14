<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'SearchDAO.php';

class SearchController extends Controller {

	private $searchDAO;

	function __construct() {
		$this->searchDAO = new SearchDAO();
	}

	public function zoek() {

		echo "okeeeeeee";
		
		$zoekbekers = array();
        $zoekbeker = "";
        if(!empty($_POST) && !empty($_POST['txtzoek'])){
            $zoekbekers = $this->imageDAO->zoekBekers($_POST['txtzoek'], 100);
            $searchItem = $_POST['txtzoek'];
        }
        $this->set('zoekbeker', $zoekbeker);
        $this->set('zoekbekers', $zoekbekers);
		
	}


}