$(document).ready(function(){
	$('#button_name').click(function(){		
		var name = $('.sel option:selected').text();
		var data = { 'name': name }
		$.ajax({
			type: 'POST',
			url: 'ajax/ajax_php.php',
			data:data,
			success:function(data){
				$('.into').remove()
				$('.render').append(data);
			}
		})
	})


	$('.someth').on('click', '.full', function(){		
		var name = $('.sum_sel option:selected').text(); 
		if(name !== ''){
			var data = { 'name': name }
			$.ajax({
				type: 'POST',
				url: 'ajax/balance_change.php',
				data:data,
				success:function(data){
					$('.into_sum').remove();
					$('.except').remove();
					$('.render_date_sum').append(data);
				}
			})
		}else{
			alert('ничего не выбрано')
		}
	});

	$('.someth').on('click', '#button_date_sum', function(){
		var begin = $('.form-control-begin_sum').val();
		var end = $('.form-control-end_sum').val();	
		var name = $('.sum_sel option:selected').text();
		if(name !== '' ){				
			var data ={ 'begin': begin, 'end': end, 'name':name }
			$.ajax({
				type: 'POST',
				url: 'ajax/balance_change_date.php',
				data:data,
				success:function(data){
					$('.into_date_sum').remove();
					$('.except').remove();
					$('.render_date_sum').append(data);
				}
			})
		}else{
			alert('ничего не выбрано')
		}
	});

	$('#button_phone').click(function(){
		var phone_info = $('.phone option:selected').text()
		if(phone_info !== ''){
		var data = { 'phone_info': phone_info }
			$.ajax({
				type: 'POST',
				url: 'ajax/phone.php',
				data:data,
				success:function(data){
					$('.into_phone').remove()
					$('.render_phone').append(data);
				}
			})
		}else{
			alert('ничего не выбрано')
		}
	});

	$('#button_date').click(function(){
		var begin = $('.form-control-begin').val();
		var end = $('.form-control-end').val();	
		if(end !== ''){		
			var data ={ 'begin': begin, 'end': end }
			$.ajax({
				type: 'POST',
				url: 'ajax/date.php',
				data:data,
				success:function(data){
					$('.into_date').remove()
					$('.except').remove()
					$('.render_date').append(data);
				}
			})
		}else{
			alert('выберите дату')
		}
	});





	


	$('#button_s_by_name').click(function(){
		var val = $('.s_name input').val();
		var data = { 'val': val }
		$.ajax({
				type: 'POST',
				url: 'ajax/search_by_name.php',
				data:data,
				success:function(data){
					$('.into_by_name').remove()
					$('.except').remove()
					$('.render_by_name').append(data);
				}
		})
	});


	$('.render_by_name, .render').on('click', '#phone_ignore', function(){
		var ignore = $('.help').text();
		var data = { 'ignore': ignore }
		$.ajax({
				type: 'POST',
				url: 'ajax/mail_sent.php',
				data:data,
				success:function(data){
					if(data){
						alert('mail sended');
						$('#phone_ignore').remove()
					}else{
						alert('все очень плохо');
					}
				}
		})
	});



});  