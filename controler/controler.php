<?php

require('model/Article.php');


function goToIndex(){
	echo "sommaire";
}

function Article($id){
	echo "article ".$id;
	$article = new Article($id);
	$article -> ViewArticle();
}