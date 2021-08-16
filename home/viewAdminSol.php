<div class="container" >
	<div>		
		<h2 class="page-title">Solicitud Número </h2>
	</div>
	<form class="row g-3" id="adminSolicitud-form">
		
		<div class="card">
			<div class="row g-3 card-body" id="seccion">
				<div class="col-md-6">
					<label class="form-label">Fecha de Elaboracion</label>	
					<input type="text" id="aes_fechaE" class="form-control" disabled="">
				</div>
				<div class="col-md-6">
					<label class="form-label">Estado de la solicitud</label>	
					<select class="form-select" id="aes_status">
		    			<option selected>Elige...</option>
		    			<option value="En Proceso" style="color:blue">En Proceso</option>
		    			<option value="Cancelado" style="color:red">Cancelado</option>
		    			<option value="Finalizado" style="color:green">Finalizado</option>
		  			</select>
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
					<textarea id="refaccion_descrip" class="form-control" style="height: 100px;" required></textarea>
				</div>
				<div class="col-md-6">	
					<label class="form-label" id="basic-addon1">Cantidad*</label>		
					<input type="text" id="refaccion_cantidad" class="form-control" required>
				</div>
				<div class="col-md-6">
					<label class="form-label" for="refaccion_uMedida">Unidad de medida*</label>
					  	<select class="form-select" id="refaccion_uMedida" required>
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
					<input type="text" id="refaccion_noParte" placeholder="Modelo o Numero de Parte" class="form-control" required>
				</div>
				<div class="col-md-6">
					<span class="form-label" id="basic-addon1">Codigo GM</span>			
					<input type="text" id="refaccion_codigoGM" placeholder="Codigo comun o GM (8 Digitos)" class="form-control">
				</div>
				<div class="form-label">
					<span class="form-label" id="basic-addon1">Marca*</span>			
					<input type="text" id="refaccion_marca" class="form-control" required>
				</div>

				<div class="card">
					<div class="card-body">
						<div class="row g-3" id="aes_tipo_compra">
							<label class="form-label" for="refaccion_tCompra">Tipo de compra*</label>
							<div class="form-check">
		  						<input class="form-check-input typeC" type="radio" name="flexRadioDefault1" value="Unica" id="flexRadioDefault1" checked>
		  						<label class="form-check-label" for="flexRadioDefault1">
		    						Unica
		  						</label>
							</div>
							<div class="form-check">
		  						<input class="form-check-input typeC" type="radio" name="flexRadioDefault1" value="Repetitiva" id="flexRadioDefault2">
		  						<label class="form-check-label" for="flexRadioDefault2">
		    						Repetitiva
		  						</label>
							</div>
						</div>
						<div>
							<label class="form-label mt-5" for="refaccion_pSugerido" id="label_minMax">Parametro sugerido</label>
							<div class="row g-3" id="aes_tipoMM">
								<div class="col-md-6">
									<label class="input-group-text" id="basic-addon1">Minimo</label>	
									<input type="text" id="aes_min" class="form-control aes_minMax">
								</div>		
								<div class="col-md-6">
									<label class="input-group-text" id="basic-addon1">Maximo</label>			
									<input type="text" id="aes_max" class="form-control aes_minMax">		
								</div>	
							</div>
						</div>
					</div>
				</div>


				<div class="form-label">
					<label class="form-label">Consumo Mensual*</label>			
					<input type="text" id="refaccion_cMensual" class="form-control" required>
				</div>
				<div class="form-label">	
					<label class="form-label">Donde se usa*</label>		
					<input type="text" id="refaccion_dUsa" placeholder="Donde se usa el (Equipo, Maquina o Herramineta)" class="form-control" required>
				</div>
				<div class="form-label">
					<label class="form-label">Fuente de Informacion*</label>			
					<input type="text" id="refaccion_fInfo" placeholder="Fuente de Informacion (Manual, Catalogo, link)" class="form-control" required>
				</div>
				<div class="form-label">
					<label class="form-label" for="refaccion_justificacion">Justifica de forma correcta la compra de la refaccion*</label>
					<div class="form-group input-group">
						<label class="input-group-text">¿Por que?</label>			
						<textarea id="refaccion_porque1" class="form-control whys" required></textarea>
					</div>
					<div class="form-group input-group">	
						<span class="input-group-text">¿Por que?</span>		
						<textarea id="refaccion_porque2" class="form-control whys" required></textarea>
					</div>
					<div class="form-group input-group">
						<span class="input-group-text">¿Por que?</span>			
						<textarea id="refaccion_porque3" class="form-control whys" required></textarea>
					</div>
				</div>
				<div>
					<label class="form-label" for="refaccion_prioridad">Selecciona la prioridad*</label>
					<div class="form-check">
		  				<input class="form-check-input prioridadS" type="radio" name="flexRadioDefault3" value="Prioridad de seguridad" id="flexRadioDefault3">
		  				<label class="form-check-label" for="flexRadioDefault3">
		    				1. Prioridad de seguridad
		  				</label>
					</div>
					<div class="form-check">
		  				<input class="form-check-input prioridadS" type="radio" name="flexRadioDefault3" value="Prioridad como paro total" id="flexRadioDefault4">
		  				<label class="form-check-label" for="flexRadioDefault4">
		    				2. Prioridad como paro total
		  				</label>
					</div>
					<div class="form-check">
		  				<input class="form-check-input prioridadS" type="radio" name="flexRadioDefault3" value="Prioridad como paro parcial" id="flexRadioDefault5">
		  				<label class="form-check-label" for="flexRadioDefault5">
		    				3. Prioridad como paro parcial
		  				</label>
					</div>
					<div class="form-check">
		  				<input class="form-check-input prioridadS" type="radio" name="flexRadioDefault3" value="Sin influencia" id="flexRadioDefault6" checked>
		  				<label class="form-check-label" for="flexRadioDefault6">
		    				4. Sin influencia
		  				</label>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="row g-3 card-body" id="seccion">

				<h4 class="datos-solicitante">Seguimiento AES</h4>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Miembro de AES que Realizo la Ultima Actualizacion</label>	
					<input type="text" id="aes_miembro" class="form-control" disabled="">
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Fecha de la ultima Actualizacion</label>	
					<input type="text" id="aes_fechaUA" class="form-control" disabled="">
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Alcance del Trabajo</label>	
					<input type="text" id="aes_alcanceT" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Dibujo Tecnico</label>	
					<input type="text" id="aes_dibujoT" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Muestra o Foto</label>	
					<input type="text" id="aes_muestra" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" for="aes_SC_Sol">Tipo de Compra</label>
					  	<select class="form-select" id="aes_SC_Sol" required>
						    <option selected>Elige...</option>
						    <option value="Solped">Solped</option>
						    <option value="Shopping Car">Shopping Car</option>
					  	</select>
				</div>
				<div class="col-md-6">
					<label class="form-label" for="aes_cuenta">Cuenta</label>
					  	<select class="form-select" id="aes_cuenta" required>
						    <option selected>Elige...</option>
						    <option value="MX2SA00615">Produccion (MX2SA00615)</option>
						    <option value="MX2SA00616">Dados (MX2SA00616)</option>
						    <option value="MX2SA00617">Prensas (MX2SA00617)</option>
					  	</select>
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Numero de SC o Solped</label>	
					<input type="text" id="aes_noSC_Sol" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Fecha de Elaboracion o Liberacion</label>	
					<input type="date" id="aes_fechaL" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Costo Unitario</label>	
					<input type="text" id="aes_costoU" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Costo Total</label>	
					<input type="text" id="aes_costoT1" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Moneda</label>	
					<input type="text" id="aes_moneda1" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Tiempo de Entrega Estimado</label>	
					<input type="date" id="aes_tiempoE" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Aprovador Actual</label>	
					<input type="text" id="aes_aprovadorA" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Comprador del SAP</label>	
					<input type="text" id="aes_compradorSAP" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Numero de PO</label>	
					<input type="text" id="aes_PO" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Fecha de PO</label>	
					<input type="date" id="aes_fechaPO" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Proveedor</label>	
					<input type="text" id="aes_proveedor" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Fecha de Entrega o Realizacion</label>	
					<input type="date" id="aes_fechaR" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Numero de Factura</label>	
					<input type="text" id="aes_noFactura" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Costo Total</label>	
					<input type="text" id="aes_costoT2" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Moneda</label>	
					<input type="text" id="aes_moneda2" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">IR</label>	
					<input type="text" id="aes_IR" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Fecha de IR</label>	
					<input type="date" id="aes_fechaIR" class="form-control" >
				</div>

			</div>
		</div>

		<div class="form-check">
			<button type="submit" class="btn btn-success" id="buttonAct">
				Guardar
			</button>
			<button type="button" class="btn btn-warning" id="buttonCan">
				Cancelar
			</button>
			<button type="button" class="btn btn-info" id="buttonImp">
				Imprimir
			</button>
		</div>

	</form>
</div>