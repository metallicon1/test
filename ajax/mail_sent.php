<?php
if(isset($_post['ignore'])){

	$to = htmlspecialchars($_POST['ignore']);
	$subject = 'какой-то заголовок';
	$message = 'какой-то текст отправили';
	if(mail($to,$subject,$message)){
		print 'письмо отправлено';
	}else{
		print 'все очень плохо';
	}
}else{

	print 'че-то пошло не так';

}


?>