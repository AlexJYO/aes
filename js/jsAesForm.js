$(document).ready(function(){

	'use strict'

	function config(){
		let typeP=$('.typeParo:checked').val();
		let typeF=$('.typeFalla:checked').val();
		let typeT=$('.typeTime:checked').val();

		if (typeP=='Planta') {
			$('#valPlanta').show();
			$('#valLinea').hide();
			$('#valMaquina').hide();
		}
		if (typeP=='Linea') {
			$('#valPlanta').hide();
			$('#valLinea').show();
			$('#valMaquina').hide();
		}
		if (typeP=='Maquina') {
			$('#valLinea').hide();
			$('#valPlanta').hide();
			$('#valMaquina').show();
		}

		if (typeF=='Dia') {
			$('#valDia').show();
			$('#valMes').hide();
		}
		if (typeF=='Mes') {
			$('#valDia').hide();
			$('#valMes').show();
		}
		
		if (typeT=='Semanas') {
			$('#valSemanas').show();
			$('#valDias').hide();
			$('#valHoras').hide();
		}
		if (typeT=='Dias') {
			$('#valSemanas').hide();
			$('#valDias').show();
			$('#valHoras').hide();
		}
		if (typeT=='Horas') {
			$('#valSemanas').hide();
			$('#valDias').hide();
			$('#valHoras').show();
		}
		
	}
	config();
	$('.typeParo').change(function(){
		let typeP = $('.typeParo:checked').val();
		$('#valPlanta').val('0');
		$('#valLinea').val('0');
		$('#valMaquina').val('0');

		if (typeP=='Planta') {
			$('#valPlanta').show();
			$('#valLinea').hide();
			$('#valMaquina').hide();
		}
		if (typeP=='Linea') {
			$('#valPlanta').hide();
			$('#valLinea').show();
			$('#valMaquina').hide();
		}
		if (typeP=='Maquina') {
			$('#valLinea').hide();
			$('#valPlanta').hide();
			$('#valMaquina').show();
		}
	});
	$('.typeFalla').change(function(){
		let typeF=$('.typeFalla:checked').val();
		$('#valDia').val('0');
		$('#valMes').val('0');

		if (typeF=='Dia') {
			$('#valDia').show();
			$('#valMes').hide();
		}
		if (typeF=='Mes') {
			$('#valDia').hide();
			$('#valMes').show();
		}
	});
	$('.typeTime').change(function(){
		let typeT=$('.typeTime:checked').val();
		$('#valSemanas').val('0');
		$('#valDias').val('0');
		$('#valHoras').val('0');

		if (typeT=='Semanas') {
			$('#valSemanas').show();
			$('#valDias').hide();
			$('#valHoras').hide();
		}
		if (typeT=='Dias') {
			$('#valSemanas').hide();
			$('#valDias').show();
			$('#valHoras').hide();
		}
		if (typeT=='Horas') {
			$('#valSemanas').hide();
			$('#valDias').hide();
			$('#valHoras').show();
		}
	});

	/*$('#calcular').click(function(){
		let data = {
			porParo: "",
			porFrec: "",
			porTime: "",
			porDetc: $('#deteccion').val()
		};
		let tipo = {
			paro: $('.typeParo:checked').val(),
			frec:  $('.typeFalla:checked').val(),
			time: $('.typeTime:checked').val()
		}
		let constant = {
			paro: "",
			frec: "",
			time: "",
			detc: "",
			pasoP: "",
			pasoF: "",
			pasoT: "",
			pasoD: ""
		}
		let valM= 0.0;
		let valT= 0.0;
		let costo = $('#costoT').val();

		if (tipo.paro == "Planta") {
			data.porParo = $('#valPlanta').val();
			constant.paro = 20.0;
			constant.pasoP = 1.0;
		}else{
			if (tipo.paro == "Linea") {
				data.porParo = $('#valLinea').val();
				constant.paro = 10.0;
				constant.pasoP = 0.5;
			}else{
				data.porParo = $('#valMaquina').val();
				constant.paro = 5.0;
				constant.pasoP = 0.5;
			}
		}
		if (tipo.frec == "Dia") {
			data.porFrec = $('#valDia').val();
			constant.frec = 20.0;
			constant.pasoF = 1.0;
		}else{
			data.porFrec = $('#valMes').val();
			if (data.porFrec>10) {
				data.porFrec -=10;
				constant.frec = 10.0;
				constant.pasoF = 0.5;
			}else{
				constant.frec = 5.0;
				constant.pasoF = 0.5;
			}
		}
		if (tipo.time == "Semanas") {
			data.porTime = $('#valSemanas').val();
			constant.time = 7.0;
			constant.pasoT = 0.2;
		}else{
			if (tipo.time == "Dias") {
				data.porTime = $('#valDias').val();
				constant.time = 5.0;
				constant.pasoT = 0.2;
			}else{
				data.porTime = $('#valHoras').val();
				constant.time = 3.0;
				constant.pasoT = 0.3;
			}
		}
		data.porDetc = $('#deteccion').val();
		constant.detc = 15.0;
		constant.pasoD = 1.5;

		valM = 10.0 -(10.0 -5.0)*(0.5);
		valM += 10.0 -(10.0 -5.0)*(0.5);
		valM += 5.0 -(10.0 -5.0)*(0.2);
		valM += constant.detc -(10.0 -5.0)*(constant.pasoD);

		valT = constant.paro -(10.0 -data.porParo)*(constant.pasoP);
		valT += constant.frec -(10.0 -data.porFrec)*(constant.pasoF);
		valT += constant.time -(10.0 -data.porTime)*(constant.pasoT);
		valT += constant.detc -(10.0 -data.porDetc)*(constant.pasoD);
		
		if(costo<10000)
		{
			if(valT>=valM)
			{
				$('#result').html('Categoria: <b>A</b>');
			}else{
				$('#result').html('Categoria: <b>D</b>');
			}
		}else{
			if(costo>=10000 && costo<48000)
			{
				if(valT>=valM)
				{
					$('#result').html('Categoria: <b>B</b>');
				}else{
					$('#result').html('Categoria: <b>E</b>');
				}
			}else{
				if(valT>=valM)
				{
					$('#result').html('Categoria: <b>C</b>');
				}else{
					$('#result').html('Categoria: <b>F</b>');
				}
			}
		}
		console.log(valM);
		console.log(valT);

		//$('#result').html('Hola');
	});*/
});