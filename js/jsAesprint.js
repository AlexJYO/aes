$(document).ready(function(){
	
	function config(){
		$.ajax({
			url: '../backend/getOpenSol.php',
			type: 'GET',
			success: function(response){
				const sol_data = JSON.parse(response);
				$('h3').html('Solicitud Número '+sol_data['id']);
				$('#aes_fechaE').val(sol_data['fecha_s']);
				$('#aes_name').val(sol_data['nombre_s']);
				$('#aes_jefe').val(sol_data['nombre_lgt']);
				$('#aes_departamento').val(sol_data['departamento']);
				$('#aes_tripulacion').val(sol_data['tripulacion']);
				$('#refaccion_descrip').val(sol_data['descripcion']);
				$('#refaccion_cantidad').val(sol_data['cantidad']);
				$('#refaccion_uMedida').val(sol_data['u_medida']);
				$('#refaccion_noParte').val(sol_data['no_parte']);
				$('#refaccion_codigoGM').val(sol_data['codigo_gm']);
				$('#refaccion_marca').val(sol_data['marca']);
				$('#t_compra').val(sol_data['unica_repetitiva']);
				if(sol_data['unica_repetitiva']=="Unica"){
					$('.aes_tipoMM').hide();
	

				}else{
					$('#aes_min').val(sol_data['min']);
					$('#aes_max').val(sol_data['max']);
				}
				$('#refaccion_cMensual').val(sol_data['consumo_mensual']);
				$('#refaccion_dUsa').val(sol_data['donde_se_usa']);
				$('#refaccion_fInfo').val(sol_data['fuente_informacion']);
				$('#refaccion_porque1').val(sol_data['porque1']);
				$('#refaccion_porque2').val(sol_data['porque2']);
				$('#refaccion_porque3').val(sol_data['porque3']);
				$('#aes_prioridad').html(sol_data['prioridad']);
				
			}
		});
	}
	
	config();

});