<?php
require_once __DIR__ . '/DAO.php';
class ImageDAO extends DAO {

	public function getAllPlayers(){
        $sql = "SELECT * FROM `BADGES_spelers`";
        $stmt = $this->pdo->prepare($sql);
        if($stmt->execute()){
            $spelers = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($spelers)){
                return $spelers;
            }
        }
        return array();
    }
	

}