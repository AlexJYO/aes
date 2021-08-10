$(document).ready(function(){
	let edit=false;

	$('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
     });
	
	$('#linkCust').attr('class','active');
	$('#buttonCan').hide();

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

	$('#tableL').DataTable({
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
	    lengthMenu: [ 5, 10, 20]

	});

	$(document).on('click','.del-leader',function(){
		if (confirm('¿ Esta seguro de que quiere eliminar al cliente?')) {
			let element = $(this)[0].parentElement.parentElement;
			let id = $(element).attr('custId');
			$.post('../backend/leader-delete.php',{id},function(response){
				location.reload();
			});
		}
	});

	$(document).on('click','#buttonCan',function(){
		$('#buttonCan').hide();
		$('#buttonAct').html('Guardar');
		$('#leader-form').trigger('reset');
		edit = false;
	});

	$(document).on('click','.nombreL',function(){
		$('#buttonCan').show();
		$('#buttonAct').html('Actualizar');
		let element = $(this)[0].parentElement.parentElement;
		let id = $(element).attr('id');
		$.post('../backend/leader-single.php',{id},function(response){

			const cust = JSON.parse(response);
			$('#id').val(cust[0].id);
			$('#gmin').val(cust[0].gmin);
			$('#nombre').val(cust[0].nombre);
			$('#aes_puesto').val(cust[0].aes_puesto);
			edit = true;
			
		});
	});

	
	$('#leader-form').submit(function(e){
		const postData = {
			id: $('#id').val(),
			gmin: $('#gmin').val(),
			nombre: $('#nombre').val(),
			aes_puesto: $('#aes_puesto').val(),
		};
		//Metodo POST mas corto usando JQUERY
		// Parametros requeridos
		//1.- URL del servidor
		//2.- Datos a enviar
		//3.- Funcion o metodo para manejar la solicitud
		//console.log(postData);
		$('#buttonAct').html('Guardar');
		$('#buttonCan').hide();
		let url = edit === false ? '../backend/leader-add.php' : '../backend/leader-edit.php';
		$.post(url,postData,function(response){
			$('#leader-form').trigger('reset');
			edit = false;
			location.reload();
		});
		e.preventDefault();
	});
});