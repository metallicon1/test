<?php


class Search {


	function search_by_name($name){
		$select = '';
		$select .= '<h3>select man</h3>';
		$select .= '<form class="sel" method="post"><select id="name" multiple>';
		foreach($name as $result){       
          	$select .= '<option value="'.$result['name'].'">'.$result['name'].'</option>';
        }
        $select .= '</select></form>'; 
        $select .= '<input type="button" id="button_name" value="select">'; 
        print $select;
	}


	function search_by_sum_name($name){
		$select = '';
		$select .= '<h1>Данные о платежах</h1>';
		$select .= '<h3>Выберите человека</h3>';
		$select .= '<form class="sum_sel" method="post"><select id="sum_name" multiple>';
		foreach($name as $result){       
          	$select .= '<option value="'.$result['name'].'">'.$result['name'].'</option>';
        }
        $select .= '</select></form>'; 
        print $select;
	}


	function get_results_by_sum_change($name){		
		$select = '';
		$select .= '<div class="into_sum">';
		$select .= '<div>';
		if(!empty($name)){
			foreach($name as $result){
				$get_sql = $result['plus'];
				$get_massive = explode(',',$get_sql);	
				$avg = array_sum($get_massive)/count($get_massive);	
	        }
	        $select .= '<div>среднее значение платежей за весь период '.$avg.' рубасов</div>';	
	        $select .= '</div>';
	    }else{
	    	print '<div class="except">платежи еще не пополнялись</div>';
	    }
        $select .= '</div>';         
        print $select;
	}



	
	function get_info_name($name){
		$select = '';
		$select .= '<div class="into">';
		foreach($name as $result){
	        $select .= '<div>баланс  '.$result['sum'].'</div>';         
          	if($result['phone'] == ''){
		        $select .= 'Телефона нет <input type="button" id="phone_ignore" value="отправить">';
		    }else{
		    	$select .= '<div>Phone  '.$result['phone'].'</div>';  
		    }
          	$select .= '<div>Email  '.$result['email'].'</div>';
          	$select .= '<div>Registration date  '.$result['date'].'</div>';
        }
        $select .= '</div>';         
        print $select;


	}
	function get_info_by_phone($phone_info){
		$select = '';
		$select .= '<div class="into_phone">';
		foreach($phone_info as $result){
	        $select .= '<h3>Name  '.$result['name'].'</h3>';    
        }
        $select .= '</div>';         
        print $select;
	}

	

	function get_info_date($int){
		$select = '';
		$select .= '<div class="into_date">';
		if( !empty($int)){			
			foreach($int as $result){
		        $select .= '<h3>'.$result['name'].'</h3>';
	        }
	    }else{
	    	print '<div class="except">данных по этим датам нет</div>';
	    }
	    $select .= '</div>'; 
	    print $select; 
	}


	function get_info_date_by_sum($int){
		$select = '';
		$select .= '<div class="into_date_sum">';
		$select .= '<div>';
		if( !empty($int)){			
			foreach($int as $result){
				$get_sql = $result['plus'];
				$get_massive = explode(',',$get_sql);	
				$avg = array_sum($get_massive)/count($get_massive);	
		         	
	        } 
	        $select .= '<div>среднее значение платежей за выбранные даты '.$avg.' рубасов</div>';	
	        $select .= '</div>';	        
	    }else{
	    	print '<div class="except">данных по этим датам нет</div>';
	    }
	    $select .= '</div>'; 
	    print $select; 
	}



	function get_info_sum_date($int){
		$select = '';
		$select .= '<div class="into_date_sum">';
		if( !empty($int)){			
			foreach($int as $result){
		        $select .= '<h3>'.$result['name'].'</h3>'; 
	        }
	    }else{
	    	print '<div class="except">данных по этим датам нет</div>';
	    }
	    $select .= '</div>'; 
	    print $select; 
	}



	function by_name($name_filter){
		$select = '';
		$select .= '<div class="into_by_name">';
		if(!empty($name_filter)){
			foreach($name_filter as $result){
		        $select .= '<h3>Баланс  '.$result['sum'].'</h3>'; 
		        if($result['phone'] == ''){
		        	$select .= 'Телефона нет <input type="button" id="phone_ignore" value="отправить">';
		    	}else{
		    		$select .= '<h3>Phone  '.$result['phone'].'</h3>';  
		    	}
		        $select .= '<h3>Registration date  '.$result['date'].'</h3>';         
		        $select .= '<h3 >Email <span class="help"> '.$result['email'].'</span></h3>';         
	          	
	        }
    	}else {
    		print '<div class="except">ничего не найдено</div>';
    	}
        $select .= '</div>';         
        print $select;
	}
	
}




class Forms {
	function registration(){
		$select = '';
		$select .= '<h1>ДАТА РЕГИСТРАЦИИ</h1>';
		$select .= '<form>';
		$select .= '<div class="form-group">';
		$select .= '<label for="inputDate">Выберите нтервал дат регитсрации пользователей:</label>';
		$select .= '<input type="date" class="form-control-begin">';		
		$select .= '<input type="date" class="form-control-end">';		
		$select .= '</div>';
		$select .= '</form>';
		$select .= '<input type="button" id="button_date" value="select">';
		print $select;
	}


	function search_by_phone(){
		$select = '';
		$select .= '<h1>ПРОВЕРКА НАЛИЧИЯ ТЕЛЕФОНОВ</h1>';
		$select .= '<h3>select phone</h3>';
		$select .= '<form class="phone"><select id="phone" multiple="multiple">';
		$select .= '<option value="have phone">have phone</option>';
		$select .= '<option value="have not phone">have not phone</option>';  
        $select .= '</select></form>'; 
        $select .= '<input type="button" id="button_phone" value="select">'; 
        print $select;
	}

	function s_by_name(){
		$select = '';
		$select .= '<h3>Введите ФИО</h3>';
		$select .= '<div class="s_name">';
		$select .= '<input class="s_by" type="text"></input>';
		$select .= '</div>';
		$select .= '<input type="button" id="button_s_by_name" value="select">';
        print $select;
	}
	function change_by_date(){
		$select = '';
		$select = '<div class="someth">';
		$select .= '<form>';
		$select .= '<div class="form-group">';
		$select .= '<label for="inputDate">Выберите нтервал дат платежей:</label>';
		$select .= '<input type="date" class="form-control-begin_sum">';		
		$select .= '<input type="date" class="form-control-end_sum">';		
		$select .= '</div>';
		$select .= '</form>';		
		$select .= '<input type="button" id="button_date_sum" value="select"></br>';
		$select .= '<input style="margin-top:20px" type="button" value="показать за весь период" class="full"></input>';
		$select .= '</div>';
		print $select;
	}
	
}



?>