
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="action.js"></script>
<?php
include 'main.php';
include 'db_connect.php';
$db = DataBase::getDB();
$object = new GetForm;
$search = new Search;
$dirrect = $object->get_results();
$dirrect2 = $object->get_results();
$sql = "INSERT INTO `user` (`id`,`name`,`email`,`phone`,`date`) VALUES ".$dirrect."";
$sql2 = "INSERT INTO `bal` (`id`,`sum`,`datesum`,`change_sum`) VALUES ".$dirrect2."";
$query = "SELECT `name` FROM `user` ";
$result_query = $db->select($query); 
$result = $db->query( $sql ); 
$result2 = $db->query( $sql2 ); 
$search->search_by_name($result_query);
$search->search_by_phone();
$search->registration();

print $change_sum;
?>
<div>dasdasdas</div>
<div class="render"></div>
<div class="render_phone"></div>
<div class="render_date"></div>

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
