<?php
include '../main.php';
include '../db_connect.php';
$db = DataBase::getDB();
$search = new Search;


if(isset($_POST['name']) && isset($_POST['begin']) && isset($_POST['end']) ){
	$val = htmlspecialchars($_POST['name']);
	$begin = htmlspecialchars($_POST['begin']);
	$end = htmlspecialchars($_POST['end']);
	$sql = "SELECT `date_change`, `plus` FROM `change_sum` JOIN `bal` ON `bal`.id = `change_sum`.sum_id JOIN `user` ON `user`.id = `bal`.name_id WHERE `user`.name = '".$val."' AND `change_sum`.date_change >= '".$begin."' AND `change_sum`.date_change <= '".$end."' ";
	$result = $db->select($sql);
	$return = $search->get_info_date_by_sum($result);
}else{
	return false;
}


?>