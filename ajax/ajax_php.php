<?php
include '../main.php';
include '../db_connect.php';
$db = DataBase::getDB();
$obj = new Search;
if(isset($_POST["name"])){
	$cat = $_POST["name"];
	$sqll = "SELECT `sum`, `email`, `phone`, `date` FROM `bal` RIGHT JOIN `user` ON `user`.id = `bal`.name_id WHERE `user`.name = '".$cat."' ";
	$result2 = $db->select($sqll); 
	$return = $obj->get_info_name($result2);
}else{
	return false;
}



?>