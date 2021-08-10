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
				$('h2').html('Solicitud Número '+sol_data['id']);
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
				$('#aes_name').val(user_data['nombre']+ ' ' +user_data['apellido']);
				$('#aes_jefe').val(user_data['jefe']);
				$('#aes_departamento').val(user_data['departamento']);
				$('#aes_tripulacion').val(user_data['tripulacion']);
				

			}
		});
	}
	loadingData();
});