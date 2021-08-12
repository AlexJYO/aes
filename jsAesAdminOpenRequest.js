$(document).ready(function(){

	'use strict'

	
	$('#linkRequest').attr('class','active');

	$("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

	$('#sidebarCollapse').on('click', function () {
	    $('#sidebar, #content').toggleClass('active');
	    $('.collapse.in').toggleClass('in');
	    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

	config();
    function comprobamosSesion()
	{
		$.ajax({
			url: '../backend/sesionOkA.php',
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

	function config(){
		$.ajax({
			url: '../backend/getOpenSol.php',
			type: 'GET',
			success: function(response){
				const sol_data = JSON.parse(response);
				//Datos del solicitante
				$('h2').html('Solicitud Número '+sol_data['id']);
				$('#aes_fechaE').val(sol_data['fecha_s']);
				$('#aes_name').val(sol_data['nombre_s']);
				$('#aes_jefe').val(sol_data['nombre_lgt']);
				$('#aes_departamento').val(sol_data['departamento']);
				$('#aes_tripulacion').val(sol_data['tripulacion']);
				//Datos de la solicitud
				$('#refaccion_descrip').val(sol_data['descripcion']);
				$('#refaccion_cantidad').val(sol_data['cantidad']);
				$('#refaccion_uMedida').val(sol_data['u_medida']);
				$('#refaccion_noParte').val(sol_data['no_parte']);
				$('#refaccion_codigoGM').val(sol_data['codigo_gm']);
				$('#refaccion_marca').val(sol_data['marca']);
				if(sol_data['unica_repetitiva']=="Unica"){
					$("#flexRadioDefault1").prop("checked", true);
					$("#flexRadioDefault2").prop("checked", false);
					$('#aes_minMax').hide();

				}else{
					$("#flexRadioDefault1").prop("checked", false);
					$("#flexRadioDefault2").prop("checked", true);
					$('#aes_min').val(sol_data['min']);
					$('#aes_max').val(sol_data['max']);
				}
				$('#refaccion_cMensual').val(sol_data['consumo_mensual']);
				$('#refaccion_dUsa').val(sol_data['donde_se_usa']);
				$('#refaccion_fInfo').val(sol_data['fuente_informacion']);
				$('#refaccion_porque1').val(sol_data['porque1']);
				$('#refaccion_porque2').val(sol_data['porque2']);
				$('#refaccion_porque3').val(sol_data['porque3']);
				if(sol_data['prioridad']=="Prioridad de seguridad")
				{
					$('#flexRadioDefault6').prop('checked',false);
					$('#flexRadioDefault3').prop('checked',true);
				}
				if(sol_data['prioridad']=="Prioridad como paro total")
				{
					$('#flexRadioDefault6').prop('checked',false);
					$('#flexRadioDefault4').prop('checked',true);
				}
				if(sol_data['prioridad']=="Prioridad como paro parcial")
				{
					$('#flexRadioDefault6').prop('checked',false);
					$('#flexRadioDefault5').prop('checked',true);
				}
				console.log(sol_data);
			}
		});
	}

	function loadingData(){
		$.ajax({
			url: '../backend/loadingDataAS.php',
			type: 'GET',
			success: function(response){
				const user_data = JSON.parse(response);
				$('#aes_miembro').val(user_data['name_all']);
				$('#aes_fechaUA').val(user_data['date']);
				//console.log(user_data);

			}
		});
	}
	loadingData();
});