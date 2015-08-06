
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script src="action.js"></script>
	<div class="main"></div>
<?php
include 'main.php';
include 'db_connect.php';
$db = DataBase::getDB();
$search = new Search;
$forms = new Forms;

/*$date = date("y.m.d");
$datetime = date("y.m.d H:i:s");
$values[] = "(0, 'as', 'ss@mail.ru', '', '$date')"; 
$val = implode(',',$values);

	$values2[] = "(0, '28.21','16.12','96')"; 
	$val2 = implode(',',$values2);
$values3[] = "(0,'$datetime','12.11','135')";
$val3 = implode(',',$values3);
$sql = "INSERT IGNORE INTO `change_sum`(`id`,`date_change`,`plus`,`sum_id`) VALUES ".$val3." ";

//$sql = "INSERT INTO `user` (`id`,`name`,`email`,`phone`,`date`) VALUES ".$val."";
//$sql2 = "INSERT  INTO `bal` (`id`,`sum`,`datesum`,`change_sum`,`name_id`) VALUES ".$val2." ";
$sql3 = "UPDATE `bal` SET `sum` = `sum`+ `change_sum` WHERE `name_id` = '96'";
$sql4 = "UPDATE `bal` SET `change_sum` = ".$change." ";

//$re = $db->query($sql3); 
//$ree = $db->query($sql4); 

//$b = "SELECT `sum` FROM `bal` RIGHT JOIN `user` ON `user`.id = `bal`.name_id WHERE `user`.id = ".$id." ";
//$c = $db->select($b); 
//var_dump($c);*/

/*$val = 'as';

$sql = "SELECT `date_change`, `plus`, `name` FROM `change_sum` JOIN `bal` ON `bal`.id = `change_sum`.sum_id JOIN `user` ON `user`.id = `bal`.name_id WHERE `user`.name = '".$val."' ";
$result = $db->select($sql);
var_dump($result);*/


$query = "SELECT `name` FROM `user` ";
$result_query = $db->select($query); 


$result = $db->query( $sql ); 
$result2 = $db->query( $sql2 ); 
$search->search_by_name($result_query); ?>
<div class="render"></div>
<?php $forms->search_by_phone(); ?>
<div class="render_phone"></div>
<?php $forms->registration(); ?>
<div class="render_date"></div>
<?php $search->search_by_sum_name($result_query); ?> 
<?php $forms->change_by_date(); ?>


<div class="render_date_sum" style="margin-bottom:50px"></div>
<div style="font-size:50px;text-align:center">поиск</div>

<?php $forms->s_by_name(); ?>
<div class="render_by_name"></div>
<?php

?>
<style type="text/css">
	.sel {
		width: 400px;
		height: 200px;
	}
	#name {
		width: 400px;
		height: 200px;
	}
</style>

	