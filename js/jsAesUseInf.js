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
    
});