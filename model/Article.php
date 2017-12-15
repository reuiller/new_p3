<?php
require 'Model.php';

class Article extends Model{

	private $id;


	public function __CONSTRUCT($id){
		$this-> id = $id;
	}


	public function ViewArticle(){
		echo var_dump($this->db);

	}
}