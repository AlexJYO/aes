$(document).ready(function(){

	$("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

	$('#sidebarCollapse').on('click', function () {
	    $('#sidebar, #content').toggleClass('active');
	    $('.collapse.in').toggleClass('in');
	    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
	
	function comprobamosSesion()
	{
		$.ajax({
			url: '../backend/sesionOkA.php',
			type: 'GET',
			success: function(response){
				//console.log(response);
				if(response==0)
				{
					alert("la sesion no es valda!");// <-- Aquí sabemos que no es válida
        			clearInterval(sesion_ok);
        			location.reload();
				}
			}
		});
	}
	const sesion_ok = setInterval(() => {
  	comprobamosSesion();
	}, 120000);
	putUserName();
	function putUserName(){
		
		$('#name').val($('span.account-user-name')[0].outerText); 
	}

	
	$(document).on('click','#show_passN',function(){
		var cambio = $("#aes_passN")[0];
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.iconN').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.iconN').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}

	});
	$(document).on('click','#show_passNC',function(){
		var cambio = $("#aes_passNC")[0];
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.iconNC').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.iconNC').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}

	});
	$(document).on('click','#buttonCan',function(){
		location.href = 'aesAdminInfo.php';
	});
	$('#userAct-form').submit(function(e){
		const postData = {
			user: $('#aes_user').val(),
			nombre: $('#aes_name').val(),
			apellido: $('#aes_apellido').val(),
			jefe: $('#aes_jefe').val(),
			departamento: $('#aes_departamento option:selected').html(),
			tripulacion: $('#aes_tripulacion option:selected').html(),
			passN: $('#aes_passN').val(),
			passNC: $('#aes_passNC').val()
			


		};
		
		if (postData['passN']==postData['passNC']) {
			$.post('../backend/updataU.php',postData,function(response){
				//console.log(response);
				location.reload();
				alert('Cambios gurdados exitosamente');
				$('#userAct-form').trigger('reset');
			});
		}else
		{
			alert('Error: Verifique su contraseña');
		}

		
		e.preventDefault();
	});

	function loadingData(){
		$.ajax({
			url: '../backend/loadingData.php',
			type: 'GET',
			success: function(response){
				const user_data = JSON.parse(response);
				$('#aes_user').val(user_data['usuario']);
				$('#aes_name').val(user_data['nombre']);
				$('#aes_apellido').val(user_data['apellido']);
				$('#aes_jefe').val(user_data['jefe']);
				$('#aes_departamento option:selected').html(user_data['departamento']);
				$('#aes_tripulacion option:selected').html(user_data['tripulacion']);
				//console.log(user_data);

			}
		});
	}
	loadingData();
});