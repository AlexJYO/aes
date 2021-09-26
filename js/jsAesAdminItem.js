$(document).ready(function(){
	'use strict'
	$('#linkUser').attr('class','active');

	$("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

	$('#sidebarCollapse').on('click', function () {
	    $('#sidebar, #content').toggleClass('active');
	    $('.collapse.in').toggleClass('in');
	    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

    $('#tableItem').DataTable({
		 language: {
	        processing:     "Procesando...",
	        search:         "Buscar:",
	        lengthMenu:    "Mostrar _MENU_ registros",
	        info:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
	        infoEmpty:      "Mostrando registros del 0 al 0 de un total de 0 registros",
	        infoFiltered:   "(filtrado de un total de _MAX_ registros)",
	        infoPostFix:    "",
	        loadingRecords: "Cargando...",
	        zeroRecords:    "No se encontraron resultados",
	        emptyTable:     "Ningún dato disponible en esta tabla",
	        paginate: {
	            first:      "Primero",
	            previous:   "Anterior",
	            next:       "Siguiente",
	            last:       "Último"
	        },
	        aria: {
	            sortAscending:  ": Activar para ordenar la columna de manera ascendente",
	            sortDescending: ": Activar para ordenar la columna de manera descendente"
	        }
	    },
	    order: [[0,'desc']],
	    lengthMenu: [ 10, 20, 50]

	});

    $(document).on('click','.modif_item',function(){
		let element = $(this)[0].parentElement.parentElement;
		let id = $(element).attr('userId');
		
		let nop_i = $(element).find('td')[1];
		//let nop_i_v = $(element).find('td')[1].innerHTML;
		let nop_i_input=$(nop_i).find('input')[0];
		let nop_i_span=$(nop_i).find('span')[0];

		let marca_i = $(element).find('td')[2];
		//let marca_i_v = $(element).find('td')[2].innerHTML;
		let marca_i_input = $(marca_i).find('input')[0];
		let marca_i_span = $(marca_i).find('span')[0];

		let cost_i = $(element).find('td')[3];
		//let cost_i_v = $(element).find('td')[3].innerHTML;
		let cost_i_input = $(cost_i).find('input')[0];
		let cost_i_span = $(cost_i).find('span')[0];

		let but = $(element).find('td')[5];
		let but_M = $(but).find('button')[0];
		let but_D = $(but).find('button')[1];
		let but_S = $(but).find('button')[2];
		let but_C = $(but).find('button')[3];
		
		
	
		$(nop_i_input).attr('type','text');
		$(nop_i_span).hide();

		$(marca_i_input).attr('type','text');
		$(marca_i_span).hide();

		$(cost_i_input).attr('type','text');
		$(cost_i_span).hide();

		$(but_M).hide();
		$(but_S).removeAttr('hidden');
		$(but_D).hide();
		$(but_C).removeAttr('hidden');

	});

    $(document).on('click','.save_item',function(){
    	let element = $(this)[0].parentElement.parentElement;
		let id = $(element).attr('userId');

		let nop_i = $(element).find('td')[1];
		let nop_i_input=$(nop_i).find('input')[0];
		let nop_i_val=$(nop_i_input).val();

		let marca_i = $(element).find('td')[2];
		let  marca_i_input = $(marca_i).find('input')[0];
		let marca_i_val = $(marca_i_input).val();

		let cost_i = $(element).find('td')[3];
		let cost_i_input = $(cost_i).find('input')[0];
		let cost_i_val = $(cost_i_input).val();

		
		$.post('../backend/update_item.php',{id,nop_i_val,marca_i_val,cost_i_val},function(response){
			if(response==1)
			{
				alert('Cambio Exitoso');
				location.reload();
			}else{
				alert('Error: No se modifico el artículo');
			}
			
		});
		

		//console.log(nop_i_val+" "+marca_i_val+" "+cost_i_val);
    });
	$(document).on('click','.can_item',function(){
		location.reload();
	});
	$(document).on('click','.eli_item',function(){
		let element = $(this)[0].parentElement.parentElement;
		let id = $(element).attr('userId');
		//console.log(id);
		$.post('../backend/eli_item.php',{id},function(response){
			if(response==1)
			{
				alert('Artículo Eliminado con Exito');
				location.reload();
			}else{
				alert('Error: al intentar eliminar el Artículo.');
			}
			
		});
	});
});