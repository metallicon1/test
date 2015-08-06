<?php
include '../main.php';
include '../db_connect.php';
$db = DataBase::getDB();
$search = new Search;


if(isset($_POST['name'])){
	$val = htmlspecialchars($_POST['name']);
	$sql = "SELECT `date_change`, `plus`  FROM `change_sum` JOIN `bal` ON `bal`.id = `change_sum`.sum_id JOIN `user` ON `user`.id = `bal`.name_id WHERE `user`.name = '".$val."' ";
	$result = $db->select($sql);
	$return = $search->get_results_by_sum_change($result);
}else{
	return false;
}


?>