<div  class="row">		
		
	<img class="col-sm-6" style="width: 75px; height: 50px; margin-left: 3px;" src="../img/GM_logo_sm.jpg">
		<h3 class="page-title col-sm-6" style="margin-left: -15px; margin-top: 5px;"></h3>
</div>
<form class="row g-3" id="solicitud-form">
	<!-- ----------------------------------Informacion del Usuario------------------------------- -->
	<div class="card">
		<div class="row g-3 card-body">
			<h5 class="datos-solicitante">Datos del Usuario</h5>
			<div class="col-sm-4">
				<label class="form-label">Nombre del Solicitante</label>	
				<input type="text" id="aes_name" class="form-control" disabled>
			</div>		
			<div class="col-sm-4">
				<label class="form-label">LGT Solicitante</label>			
				<input type="text" id="aes_jefe" class="form-control" disabled>		
			</div>
			<div class="col-sm-4">
				<label class="form-label">Fecha de registro</label>			
				<input type="text" id="aes_fechaE" class="form-control" disabled>		
			</div>	
			<div class="col-sm-4">
		  		<label class="form-label" >Departamento</label>
		  		<input type="text" id="aes_departamento" class="form-control" disabled>
			</div>
			<div class="col-sm-4">
		   		<label class="form-label">Tripulacion</label>
		  		<input type="text" id="aes_tripulacion" class="form-control" disabled>
			</div>
			<div class="col-sm-4">
		   		<label class="form-label">Firma del solicitante</label>
		  		<input type="text" id="aes_firma" class="form-control" disabled>
			</div>
		</div>
	</div>
	<!-- ----------------------------------Informacion de la refaccion------------------------------- -->
	<div class="card">
		<div class="row g-3 card-body">	
			<div>
				<h5 class="datos-solicitante">Datos de la Refaccion</h5>
			</div>

			<div class="form-label col-sm-6">
				<label class="form-label">Descripcion</label>			
				<textarea id="refaccion_descrip" class="form-control" style="height: 110px;" disabled></textarea>
			</div>
			<div class="col-sm-6">	
				<label class="form-label">Cantidad</label>		
				<input type="text" id="refaccion_cantidad" class="form-control" disabled>
				<label class="form-label">Unidad de medida</label>
		  		<input type="text" id="refaccion_uMedida" class="form-control" disabled >
			</div>
			
			<div class="col-sm-4">
				<span class="form-label">No. de Parte</span>			
				<input type="text" id="refaccion_noParte" class="form-control" disabled>
			</div>
			<div class="col-sm-4">
				<span class="form-label">Codigo GM</span>			
				<input type="text" id="refaccion_codigoGM"  class="form-control" disabled>
			</div>
			<div class="form-label col-sm-4">
				<span class="form-label">Marca</span>			
				<input type="text" id="refaccion_marca" class="form-control" disabled>
			</div>


			<div class="card">
				<div class="row g-3 card-body">
					<div class="form-label col-sm-4">
						<label class="form-label">Tipo de compra</label>
						<input type="text" id="t_compra" class="form-control" disabled>
					</div>
					<div class="form-label col-sm-4 aes_tipoMM">
						<label class="form-label" >Minimo</label>
						<input type="text" id="aes_min" class="form-control" disabled>
					</div>
					<div class="form-label col-sm-4 aes_tipoMM">
						<label class="form-label">Maximo</label>
						<input type="text" id="aes_max" class="form-control" disabled>
					</div>
					
				</div>
			</div>

			<div class="form-label col-sm-4">
				<label class="form-label">Consumo Mensual</label>			
				<input type="text" id="refaccion_cMensual" class="form-control" disabled>
			</div>
			<div class="form-label col-sm-4">	
				<label class="form-label">Donde se usa</label>		
				<input type="text" id="refaccion_dUsa"  class="form-control" disabled>
			</div>
			<div class="form-label col-sm-4">
				<label class="form-label">Fuente de Informacion</label>			
				<input type="text" id="refaccion_fInfo"  class="form-control" disabled>
			</div>
			<div class="col-sm-4">
				<label class="input-group-text">¿Por que?</label>			
				<textarea id="refaccion_porque1" class="form-control" disabled></textarea>
			</div>
			<div class="col-sm-4">	
				<span class="input-group-text">¿Por que?</span>		
				<textarea id="refaccion_porque2" class="form-control" disabled></textarea>
			</div>
			<div class="col-sm-4">
				<span class="input-group-text">¿Por que?</span>			
				<textarea id="refaccion_porque3" class="form-control" disabled></textarea>
			</div>
			<div>
				<span class="input-group-text justify-content-center" >Coloca las firmas correspondientes</span>
			</div>
			<div class="col-sm-3">
				<span class="input-group-text justify-content-center" id="aes_prioridad"></span>
			</div>
			<div class="col-sm-9">
				<span class="  border" style="padding-right: 27%;  padding-bottom: 15px;" >L.G.T.:</span>
				<span class="  border" style="padding-right: 27%; padding-bottom: 15px;" >S.L:       </span>
				<span class="  border" style="padding-right: 27%; padding-bottom: 15px; margin-left: 5px;" >Manager:    </span>
			</div>
		</div>
	</div>
</form>