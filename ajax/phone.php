<?php

include '../main.php';
include '../db_connect.php';
$db = DataBase::getDB();
$obj = new Search;


$query2 = "SELECT `name` FROM `user`  WHERE `phone`!='' ";
$query3 = "SELECT `name` FROM `user`  WHERE `phone`='' ";
$result_query2 = $db->select($query2); 
$result_query3 = $db->select($query3); 



if(isset($_POST['phone_info'])){
	$phone_info = htmlspecialchars($_POST['phone_info']);
	if($phone_info == 'have phone'){
		$return = $obj->get_info_by_phone($result_query2);  // у кого есть телефоны
	}else{
		$return = $obj->get_info_by_phone($result_query3); // у кого нет телефонов
	}
}else{	
	return false;
}

?>