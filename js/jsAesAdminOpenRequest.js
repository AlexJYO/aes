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
				$('#aes_status').val(sol_data['status']);
				const status = $('#aes_status').val();
				console.log(status);
				if(status=="En Proceso" || status=="" || status==null){
					$("#aes_status").css("color", "blue");
				}else{
					$('#refaccion_descrip').prop('disabled', true);
					$('#refaccion_cantidad').prop('disabled', true);
					$('#refaccion_uMedida').prop('disabled', true);
					$('#refaccion_noParte').prop('disabled', true);
					$('#refaccion_codigoGM').prop('disabled', true);
					$('#refaccion_marca').prop('disabled', true);
					$('.typeC').prop('disabled', true);
					$('.aes_minMax').prop('disabled', true);
					$('#refaccion_cMensual').prop('disabled', true);
					$('#refaccion_dUsa').prop('disabled', true);
					$('#refaccion_fInfo').prop('disabled', true);
					$('.whys').prop('disabled', true);
					$('.prioridadS').prop('disabled', true);
					$('#aes_alcanceT').prop('disabled', true);
					$('#aes_dibujoT').prop('disabled', true);
					$('#aes_muestra').prop('disabled', true);
					$('#aes_SC_Sol').prop('disabled', true);
					$('#aes_cuenta').prop('disabled', true);
					$('#aes_noSC_Sol').prop('disabled', true);
					$('#aes_fechaL').prop('disabled', true);
					$('#aes_costoU').prop('disabled', true);
					$('#aes_costoT1').prop('disabled', true);
					$('#aes_moneda1').prop('disabled', true);
					$('#aes_tiempoE').prop('disabled', true);
					$('#aes_aprovadorA').prop('disabled', true);
					$('#aes_compradorSAP').prop('disabled', true);
					$('#aes_PO').prop('disabled', true);
					$('#aes_fechaPO').prop('disabled', true);
					$('#aes_proveedor').prop('disabled', true);
					$('#aes_fechaR').prop('disabled', true);
					$('#aes_noFactura').prop('disabled', true);
					$('#aes_costoT2').prop('disabled', true);
					$('#aes_moneda2').prop('disabled', true);
					$('#aes_IR').prop('disabled', true);
					$('#aes_fechaIR').prop('disabled', true);
				}
				if(status=="Cancelado"){
					$("#aes_status").css("color", "red");
				}
				if(status=="Finalizado"){
					$("#aes_status").css("color", "green");
				}
				
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
					$('#aes_min').val('0');
					$('#aes_max').val('0');

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
				$('#aes_alcanceT').val(sol_data['alcance_trabajo']);
				$('#aes_dibujoT').val(sol_data['dibujo_tecnico']);
				$('#aes_muestra').val(sol_data['muestra_foto']);
				$('#aes_SC_Sol').val(sol_data['tipo_compra']);
				$('#aes_cuenta').val(sol_data['cuenta']);
				$('#aes_noSC_Sol').val(sol_data['no_sc_solped']);
				$('#aes_fechaL').val(sol_data['fecha_liberacion']);
				$('#aes_costoU').val(sol_data['costo_unitario']);
				$('#aes_costoT1').val(sol_data['costo_total_1']);
				$('#aes_moneda1').val(sol_data['moneda_1']);
				$('#aes_tiempoE').val(sol_data['tiempo_estimado']);
				$('#aes_aprovadorA').val(sol_data['aprobador_actual']);
				$('#aes_compradorSAP').val(sol_data['comprador_sap']);
				$('#aes_PO').val(sol_data['po']);
				$('#aes_fechaPO').val(sol_data['fecha_po']);
				$('#aes_proveedor').val(sol_data['proveedor']);
				$('#aes_fechaR').val(sol_data['fecha_realizacion']);
				$('#aes_noFactura').val(sol_data['no_factura']);
				$('#aes_costoT2').val(sol_data['costo_total_2']);
				$('#aes_moneda2').val(sol_data['moneda_2']);
				$('#aes_IR').val(sol_data['ir']);
				$('#aes_fechaIR').val(sol_data['fecha_ir']);
				//console.log(sol_data);
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
	$('#adminSolicitud-form').submit(function(e){
		const postData = {
			fecha_s: $('#aes_fechaE').val(),
			status: $('#aes_status').val(),
			nombre_s: $('#aes_name').val(),
			nombre_lgt: $('#aes_jefe').val(),
			departamento: $('#aes_departamento').val(),
			tripulacion: $('#aes_tripulacion').val(),

			descripcion: $('#refaccion_descrip').val(),
			cantidad: $('#refaccion_cantidad').val(),
			u_medida: $('#refaccion_uMedida').val(),
			no_parte: $('#refaccion_noParte').val(),
			codigo_gm: $('#refaccion_codigoGM').val(),
			marca: $('#refaccion_marca').val(),
			unica_repetitiva:$('.typeC:checked').val(),
			min: $('#aes_min').val(),
			max: $('#aes_max').val(),
			consumo_mensual: $('#refaccion_cMensual').val(),
			donde_se_usa: $('#refaccion_dUsa').val(),
			fuente_informacion: $('#refaccion_fInfo').val(),
			porque1: $('#refaccion_porque1').val(),
			porque2: $('#refaccion_porque2').val(),
			porque3: $('#refaccion_porque3').val(),
			prioridad: $('.prioridadS:checked').val(),

			alcance_trabajo: $('#aes_alcanceT').val(),
			dibujo_tecnico: $('#aes_dibujoT').val(),
			muestra_foto: $('#aes_muestra').val(),
			tipo_compra: $('#aes_SC_Sol').val(),
			cuenta: $('#aes_cuenta').val(),
			no_sc_solped: $('#aes_noSC_Sol').val(),
			fecha_l: $('#aes_fechaL').val(),
			costo_unitario: $('#aes_costoU').val(),
			costo_total_1: $('#aes_costoT1').val(),
			moneda_1: $('#aes_moneda1').val(),
			tiempo_estimado: $('#aes_tiempoE').val(),
			aprobador_actual: $('#aes_aprovadorA').val(),
			comprador_sap: $('#aes_compradorSAP').val(),
			po: $('#aes_PO').val(),
			fecha_po: $('#aes_fechaPO').val(),
			proveedor: $('#aes_proveedor').val(),
			fecha_realizacion: $('#aes_fechaR').val(),
			no_factura: $('#aes_noFactura').val(),
			costo_total_2: $('#aes_costoT2').val(),
			moneda_2: $('#aes_moneda2').val(),
			ir: $('#aes_IR').val(),
			fecha_ir: $('#aes_fechaIR').val()
		};

		$.post('../backend/aesSaveRequestAdm.php',postData,function(response){
			// config();
			// loadingData();
			alert('Cambios realizados con exito');
		});
	});

	$(".typeC").change(function(){
		const UR = $('.typeC:checked').val();
		if(UR == "Repetitiva")
		{
			$('#aes_minMax').show();
		}else{
			$('#aes_minMax').hide();
		}
	});
	
	$('#aes_status').change(function(){
		const status = $('#aes_status').val();
		if(status=="En Proceso"){
			$("#aes_status").css("color", "blue");
		}
		if(status=="Cancelado"){
			$("#aes_status").css("color", "red");
		}
		if(status=="Finalizado"){
			$("#aes_status").css("color", "green");
		}
		if(status=="En Proceso" || status=="" || status==null){
			$("#aes_status").css("color", "blue");
			$('#refaccion_descrip').prop('disabled', false);
			$('#refaccion_cantidad').prop('disabled', false);
			$('#refaccion_uMedida').prop('disabled', false);
			$('#refaccion_noParte').prop('disabled', false);
			$('#refaccion_codigoGM').prop('disabled', false);
			$('#refaccion_marca').prop('disabled', false);
			$('.typeC').prop('disabled', false);
			$('.aes_minMax').prop('disabled', false);
			$('#refaccion_cMensual').prop('disabled', false);
			$('#refaccion_dUsa').prop('disabled', false);
			$('#refaccion_fInfo').prop('disabled', false);
			$('.whys').prop('disabled', false);
			$('.prioridadS').prop('disabled', false);
			$('#aes_alcanceT').prop('disabled', false);
			$('#aes_dibujoT').prop('disabled', false);
			$('#aes_muestra').prop('disabled', false);
			$('#aes_SC_Sol').prop('disabled', false);
			$('#aes_cuenta').prop('disabled', false);
			$('#aes_noSC_Sol').prop('disabled', false);
			$('#aes_fechaL').prop('disabled', false);
			$('#aes_costoU').prop('disabled', false);
			$('#aes_costoT1').prop('disabled', false);
			$('#aes_moneda1').prop('disabled', false);
			$('#aes_tiempoE').prop('disabled', false);
			$('#aes_aprovadorA').prop('disabled', false);
			$('#aes_compradorSAP').prop('disabled', false);
			$('#aes_PO').prop('disabled', false);
			$('#aes_fechaPO').prop('disabled', false);
			$('#aes_proveedor').prop('disabled', false);
			$('#aes_fechaR').prop('disabled', false);
			$('#aes_noFactura').prop('disabled', false);
			$('#aes_costoT2').prop('disabled', false);
			$('#aes_moneda2').prop('disabled', false);
			$('#aes_IR').prop('disabled', false);
			$('#aes_fechaIR').prop('disabled', false);
		}else{
			$('#refaccion_descrip').prop('disabled', true);
			$('#refaccion_cantidad').prop('disabled', true);
			$('#refaccion_uMedida').prop('disabled', true);
			$('#refaccion_noParte').prop('disabled', true);
			$('#refaccion_codigoGM').prop('disabled', true);
			$('#refaccion_marca').prop('disabled', true);
			$('.typeC').prop('disabled', true);
			$('.aes_minMax').prop('disabled', true);
			$('#refaccion_cMensual').prop('disabled', true);
			$('#refaccion_dUsa').prop('disabled', true);
			$('#refaccion_fInfo').prop('disabled', true);
			$('.whys').prop('disabled', true);
			$('.prioridadS').prop('disabled', true);
			$('#aes_alcanceT').prop('disabled', true);
			$('#aes_dibujoT').prop('disabled', true);
			$('#aes_muestra').prop('disabled', true);
			$('#aes_SC_Sol').prop('disabled', true);
			$('#aes_cuenta').prop('disabled', true);
			$('#aes_noSC_Sol').prop('disabled', true);
			$('#aes_fechaL').prop('disabled', true);
			$('#aes_costoU').prop('disabled', true);
			$('#aes_costoT1').prop('disabled', true);
			$('#aes_moneda1').prop('disabled', true);
			$('#aes_tiempoE').prop('disabled', true);
			$('#aes_aprovadorA').prop('disabled', true);
			$('#aes_compradorSAP').prop('disabled', true);
			$('#aes_PO').prop('disabled', true);
			$('#aes_fechaPO').prop('disabled', true);
			$('#aes_proveedor').prop('disabled', true);
			$('#aes_fechaR').prop('disabled', true);
			$('#aes_noFactura').prop('disabled', true);
			$('#aes_costoT2').prop('disabled', true);
			$('#aes_moneda2').prop('disabled', true);
			$('#aes_IR').prop('disabled', true);
			$('#aes_fechaIR').prop('disabled', true);
		}

	})
	$(document).on('click','#buttonCan',function(){
		location.href = 'aesAdminSol.php';
	});
});