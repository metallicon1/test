<?php
include '../main.php';
include '../db_connect.php';
$db = DataBase::getDB();
$search = new Search;




if(isset($_POST['begin']) && isset($_POST['end'])){
	$begin = htmlspecialchars($_POST['begin']);
	$end = htmlspecialchars($_POST['end']);	
	$sql = "SELECT * FROM `user` WHERE `date` >= '".$begin."' AND `date` <= '".$end."' ";
	$result = $db->select($sql);
	$return = $search->get_info_date($result);
}else{
	return false;
}

?>