<div class="container" >
	<div>		
		<h2 class="page-title">Solicitud Número </h2>
	</div>
	<div class="progress mb-3" style="height:25px">
  		<div class="progress-bar" role="progressbar" style="width: 0%; height:25px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
  		</div>
	</div>
	<form class="row g-3" id="userSolicitud-form">
		
		<div class="card">
			<div class="row g-3 card-body" id="seccion">
				<div class="col-md-6">
					<label class="form-label">Fecha de Elaboracion</label>	
					<input type="text" id="aes_fechaE" class="form-control" disabled="">
				</div>
				<h4 class="datos-solicitante">Datos del Usuario</h4>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Nombre del Solicitante*</label>	
					<input type="text" id="aes_name" class="form-control" disabled="">
				</div>		
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">LGT Solicitante*</label>			
					<input type="text" id="aes_jefe" class="form-control" disabled="">		
				</div>	
				<div class="col-md-6">
		  			<label class="form-label" for="aes_departamento">Departamento*</label>
		  			<select class="form-select" id="aes_departamento" disabled="">
		    			<option selected>Elige...</option>
		    			<option value="Produccion">Produccion</option>
		    			<option value="Dados">Dados</option>
		    			<option value="Prensas/Controles">Prensas/Controles</option>
		  			</select>
				</div>
				<div class="col-md-6">
		   			<label class="form-label" for="aes_tripulacion">Tripulacion*</label>
		  			<select class="form-select" id="aes_tripulacion" disabled="">
		    			<option selected>Elige...</option>
		    			<option value="A">A</option>
		    			<option value="B">B</option>
		    			<option value="C">C</option>
		    			<option value="D">D</option>
		    			<option value="E">E</option>
		 	 		</select>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="row g-3 card-body" id="seccion">	
				<div>
					<h4 class="datos-solicitante">Datos de la Refaccion</h4>
				</div>

				<div class="form-label">
					<label class="form-label" id="basic-addon1">Descripcion*</label>			
					<textarea id="refaccion_descrip" class="form-control" style="height: 100px;" disabled></textarea>
				</div>
				<div class="col-md-6">	
					<label class="form-label" id="basic-addon1">Cantidad*</label>		
					<input type="number" value="0" step="1" id="refaccion_cantidad" class="form-control" disabled>
				</div>
				<div class="col-md-6">
					<label class="form-label" for="refaccion_uMedida">Unidad de medida*</label>
					  	<select class="form-select" id="refaccion_uMedida" disabled>
						    <option selected>Elige...</option>
						    <option value="Piezas">Piezas</option>
						    <option value="Metros">Metros</option>
						    <option value="Litros">Litros</option>
						    <option value="Kilos">Kilos</option>
						    <option value="Pares">Pares</option>
						    <option value="Juegos">Juegos</option>
					  	</select>
				</div>
				<div class="col-md-6">
					<span class="form-label" id="basic-addon1">No. de Parte*</span>			
					<input type="text" id="refaccion_noParte" placeholder="Modelo o Numero de Parte" class="form-control" disabled>
				</div>
				<div class="col-md-6">
					<span class="form-label" id="basic-addon1">Codigo GM</span>			
					<input type="text" id="refaccion_codigoGM" placeholder="Codigo comun o GM (8 Digitos)" class="form-control" disabled>
				</div>
				<div class="form-label">
					<span class="form-label" id="basic-addon1">Marca*</span>			
					<input type="text" id="refaccion_marca" class="form-control" disabled>
				</div>

				<div class="card">
					<div class="card-body">
						<div class="row g-3" id="aes_tipo_compra">
							<label class="form-label" for="refaccion_tCompra">Tipo de compra*</label>
							<div class="form-check">
		  						<input class="form-check-input typeC" type="radio" name="flexRadioDefault1" value="Unica" id="flexRadioDefault1" disabled>
		  						<label class="form-check-label" for="flexRadioDefault1">
		    						Unica
		  						</label>
							</div>
							<div class="form-check">
		  						<input class="form-check-input typeC" type="radio" name="flexRadioDefault1" value="Repetitiva" id="flexRadioDefault2" disabled>
		  						<label class="form-check-label" for="flexRadioDefault2" >
		    						Repetitiva
		  						</label>
							</div>
						</div>
						<div>
							<label class="form-label mt-5" for="refaccion_pSugerido" id="label_minMax">Parametro sugerido</label>
							<div class="row g-3" id="aes_tipoMM">
								<div class="col-md-6">
									<label class="input-group-text" id="basic-addon1">Minimo</label>	
									<input type="number" value="0" step="1" id="aes_min" class="form-control aes_minMax" disabled>
								</div>		
								<div class="col-md-6">
									<label class="input-group-text" id="basic-addon1">Maximo</label>			
									<input type="number" value="0" step="1" id="aes_max" class="form-control aes_minMax" disabled>		
								</div>	
							</div>
						</div>
					</div>
				</div>


				<div class="form-label">
					<label class="form-label">Consumo Mensual*</label>			
					<input type="text" id="refaccion_cMensual" class="form-control" disabled>
				</div>
				<div class="form-label">	
					<label class="form-label">Donde se usa*</label>		
					<input type="text" id="refaccion_dUsa" placeholder="Donde se usa el (Equipo, Maquina o Herramineta)" class="form-control" disabled>
				</div>
				<div class="form-label">
					<label class="form-label">Fuente de Informacion*</label>			
					<input type="text" id="refaccion_fInfo" placeholder="Fuente de Informacion (Manual, Catalogo, link)" class="form-control" disabled>
				</div>
				<div class="form-label">
					<label class="form-label" for="refaccion_justificacion">Justifica de forma correcta la compra de la refaccion*</label>
					<div class="form-group input-group">
						<label class="input-group-text">¿Por que?</label>			
						<textarea id="refaccion_porque1" class="form-control whys" disabled></textarea>
					</div>
					<div class="form-group input-group">	
						<span class="input-group-text">¿Por que?</span>		
						<textarea id="refaccion_porque2" class="form-control whys" disabled></textarea>
					</div>
					<div class="form-group input-group">
						<span class="input-group-text">¿Por que?</span>			
						<textarea id="refaccion_porque3" class="form-control whys" disabled></textarea>
					</div>
				</div>
				
			</div>
		</div>

		<div class="form-check">
			
			<button type="button" class="btn btn-success" id="buttonCan">
				Regresar
			</button>
			<button type="button" class="btn btn-info" id="buttonImp">
				Imprimir
			</button>
		</div>

	</form>
</div>