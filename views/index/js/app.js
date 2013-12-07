$(function(){
	var tTime=null;
	var tTimeAjax=null;
	var CountTime=0;
	var CountTimeInit=0;
	var countPost=0;
	var persitenteIndex=false;
	var generating='false';

	var generating=function(){
		$.post(BASE_URL+'index/generatingTicket',
			$("#generating_ticket").serialize(),
			function(e){
				//success registro
				if(e=='true'){
					generating='true';
				}

				viewTime();
				
		});
	}
	var viewTime=function(){
		$.post(BASE_URL+'index/nextsteep',			
			function(d){

				$("#loading_next").html(d);	
				if(generating=='true'){
					CountTimeInit=parseInt($("#total_count").text());
					
					if(tTime==null){								
						tTime=setInterval(displayTime,1000);
						tTimeAjax=setInterval(viewTime,1000*5);
					}else{
						countPost=countPost+5;
						displayTime();
					}
				}
				

				
			});
	}

	var displayTime=function(){
		var time=(CountTimeInit+countPost)-CountTime;
		var hours = Math.floor( time / 3600 );  
		var minutes = Math.floor( (time % 3600) / 60 );
		var seconds = time % 60;
		//Anteponiendo un 0 a los minutos si son menos de 10 
		minutes = minutes < 10 ? '0' + minutes : minutes;		 
		//Anteponiendo un 0 a los segundos si son menos de 10 
		seconds = seconds < 10 ? '0' + seconds : seconds;		 
		var result = hours + "h:" + minutes + "m:" + seconds+'s'  // 2:41:30
		//$("#total_count").text(time-1);
		CountTime=CountTime+1;
		$(".time-count").text(result);
		if(time<=0){			
			clearInterval(tTime);
			clearInterval(tTimeAjax);
			$("#start_chat").removeClass('disabled');
		}
	}


	if($("#persitenteIndex").length){
		persitenteIndex=true;
		CountTimeInit=parseInt($("#total_count").text());
		tTime=setInterval(displayTime,1000);
	}

	$("#btn_next").click(function(e){
		if($("#generating_ticket").valid()){
			$("#btn_next").hide();
			e.preventDefault();			
			generating();
		}
	});
	

	$("#start_chat").live('click',function(e){
		var time=(CountTimeInit+countPost)-CountTime;
		if(time<=0){
			location.href=$(this).attr('href');
		}		
		e.preventDefault();		
	});

	//login
	$("#confirm-login").click(function(){
		$("#error_login").hide();

		if($("#form-login-index").valid()){
			$("#confirm-login").hide();
			$.post(BASE_URL+'/index/login',
				$('#form-login-index').serialize()
				, function(data) {
				if(data){
					location.href=BASE_URL+'panel';
				}else{
					$("#error_login").show();
					$("#confirm-login").show();
				}
			});
		}
	});


});