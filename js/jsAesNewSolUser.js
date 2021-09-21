$(document).ready(function(){
	'use strict'
	// $('#linkInf').attr('class','active');
	$('#aes_minMax').hide();
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
			url: '../backend/sesionOkU.php',
			type: 'GET',
			success: function(response){
				//console.log(response);
				if(response==0)
				{
					alert("La sesión no es valida!");// <-- Aquí sabemos que no es válida
        			clearInterval(sesion_ok);
        			location.reload();
				}
			}
		});
	}
	const sesion_ok = setInterval(() => {
  	comprobamosSesion();
	}, 120000);
	
	$(document).on('click','#buttonCan',function(){
		location.href = 'aesUserInfo.php';
	});

	$(document).on('change','#flexRadioDefault2',function(){
		//location.href = 'aesAdminInfo.php';
		$('#aes_min').val('');
		$('#aes_max').val('');
		$('#aes_minMax').show();
	});

	$(document).on('click','#flexRadioDefault1',function(){
		//location.href = 'aesAdminInfo.php';
		$('#aes_min').val('');
		$('#aes_max').val('');
		$('#aes_minMax').hide();
	});

	$('#solicitud-form').submit(function(e){
		$('#buttonAct').prop('disabled', true);
		 let t_p = $('.typeParo:checked').val();
		 let t_f = $('.typeFalla:checked').val();

		 const postData = {
			name: $('#aes_name').val(),
			lgt: $('#aes_jefe').val(),
			department: $('#aes_departamento').val(),
			crew: $('#aes_tripulacion').val(),
			description: $('#refaccion_descrip').val(),
			quantity: $('#refaccion_cantidad').val(),
			measure: $('#refaccion_uMedida').val(),
			noParte: $('#refaccion_noParte').val(),
			gmCode: $('#refaccion_codigoGM').val(),
			brand: $('#refaccion_marca').val(),
			buyType:$('.typeC:checked').val(),
			min: $('#aes_min').val(),
			max: $('#aes_max').val(),
			monthlyCon: $('#refaccion_cMensual').val(),
			whereUse: $('#refaccion_dUsa').val(),
			sourceInfo: $('#refaccion_fInfo').val(),
			why1: $('#refaccion_porque1').val(),
			why2: $('#refaccion_porque2').val(),
			why3: $('#refaccion_porque3').val(),
			c_p: "",
			c_f: "",
			v_p: "",
			v_f: "",
			v_d: $('#deteccion').val()


			//priority: $('.prioridadS:checked').val()


			//departamento: $('#aes_departamento option:selected').html(),
			//tripulacion: $('#aes_tripulacion option:selected').html(),
			
		};
		//console.log(postData);
		if (t_p == "Planta") {
			postData.c_p = 20.0;
			postData.v_p = $('#valPlanta').val();

		}else{
			if (t_p == "Linea") {
				postData.c_p = 10.0;
				postData.v_p = $('#valLinea').val();
			}else{
				postData.c_p = 5.0;
				postData.v_p = $('#valMaquina').val();
			}
		}

		if (t_f == "Dia") {
			postData.c_f = 20.0;
			postData.v_f = $('#valDia').val();
		}else{
			postData.v_f = $('#valMes').val();
			if (postData.v_f>10) {
				postData.c_f = 10.0;
				postData.v_f -=10;
			}else{
				postData.c_f = 5.0;
			}
		}
		$.post('../backend/aesNewSol.php',postData,function(response){
			console.log(response);
			if (response==1) {
				alert('Registro exitoso.');
				$('#solicitud-form').trigger('reset');
				//window.open('imprimir.php', '_blank');
				location.reload();
			}else{
				alert('Error: No se pudo completar el registro');
			}
			
		});

		
		// console.log($('#refaccion_uMedida').val());
		// console.log($('.typeC:checked').val());
		// console.log($('.prioridadS:checked').val());
		e.preventDefault();
	});
	function loadingData(){
		$.ajax({
			url: '../backend/loadingData.php',
			type: 'GET',
			success: function(response){
				const user_data = JSON.parse(response);
				$('#aes_name').val(user_data['nombre']+ ' ' +user_data['apellido']);
				$('#aes_jefe').val(user_data['jefe']);
				$('#aes_departamento').val(user_data['departamento']);
				$('#aes_tripulacion').val(user_data['tripulacion']);
				

			}
		});
	}
	loadingData();




});