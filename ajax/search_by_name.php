<?php
include '../main.php';
include '../db_connect.php';
$db = DataBase::getDB();
$search = new Search;




if(isset($_POST['val'])){
	$val = htmlspecialchars($_POST['val']);
	$sql = "SELECT `sum`, `email`, `phone`, `date` FROM `bal` RIGHT JOIN `user` ON `user`.id = `bal`.name_id WHERE `user`.name = '".$val."' ";
	$result = $db->select($sql);
	$return = $search->by_name($result);
	
}else{
	return false;
}

?>