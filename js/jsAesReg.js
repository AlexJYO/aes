$(document).ready(function(){
	$(document).on('click','#show_pass1',function(){
		var cambio = $("#aesPass1")[0];
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.iconN').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.iconN').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}

	});
	$(document).on('click','#show_pass2',function(){
		var cambio = $("#aesPass2")[0];
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.iconNC').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.iconNC').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}

	});

	$('#aesReg-form').submit(function(e){
		const postData = {
			user: $('#aesUser').val(),
			pass1: $('#aesPass1').val(),
			pass2: $('#aesPass2').val(),
			name: $('#nombre').val(),
			last: $('#apellido').val(),
			boss: $('#jefe').val(),
			department: $('#departamento option:selected').html(),
			crew: $('#tripulacion option:selected').html()
		};
		//console.log(postData);

		$.post('../backend/aesReg.php',postData,function(response){
			//console.log(response);
			if(response!=0)
			{
				alert('Registro realizado con éxito');
				location.href ="../index.php";
			}else{
				alert('Error: Vuelva a intentar');
			}
		});

		$('#aesReg-form').trigger('reset');
		e.preventDefault();
	});
});