<?php

class Model{

protected $db;

public function __CONSTRUCT(){
	$this->db = new PDO('mysql:host=localhost;dbname=billet-simple49380;charset=utf8', 'root', '');
}
}