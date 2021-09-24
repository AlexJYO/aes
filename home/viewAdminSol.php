<div class="container" >
	<div>		
		<h2 class="page-title">Solicitud Número </h2>
	</div>
	<div class="progress mb-3" style="height:25px">
  		<div class="progress-bar" role="progressbar" style="width: 0%; height:25px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%
  		</div>
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
					<input type="number" value="0" step="1" id="refaccion_cantidad" class="form-control" required>
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
									<input type="number" value="0" step="1" id="aes_min" class="form-control aes_minMax">
								</div>		
								<div class="col-md-6">
									<label class="input-group-text" id="basic-addon1">Maximo</label>			
									<input type="number" value="0" step="1" id="aes_max" class="form-control aes_minMax">		
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
				<!-- <div>
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
				</div> -->
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
						    <option value="CO21">CO21</option>
						    <option value="CO31">CO31</option>
						    <option value="CO41">CO41</option>
						    <option value="CO51">CO51</option>
						    <option value="CO61">CO61</option>
						    <option value="CO71">CO71</option>
						    <option value="CO81">CO81</option>
						    <option value="CO91">CO91</option>
	
					  	</select>
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Numero de SC o Solped</label>	
					<input type="number" value="0" step="1" id="aes_noSC_Sol" class="form-control" required>
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Fecha de Elaboracion o Liberacion</label>	
					<input type="date" id="aes_fechaL" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Costo Unitario</label>	
					<input type="number" value="0.0" step="0.01" id="aes_costoU" class="form-control" >
				</div>
				<div class="card" id="prioridadCal" >
				<div class="card-body">
					<h4> Formulario de Prioridad</h4>

					<div class="form-group input-group mb-3">
						<label class="input-group-text" >Costo Unitario en Dolares</label>	
						<input type="number" value="0.0" step="0.01" id="aes_costoUD" class="form-control" >
					</div>
					<div class="card" style="background-color: #C6F8BB;">
						<div class="card-body">
							<h5 class="card-title">Tiempo de entrega</h5>
							<div class="form-check">
	  							<input class="form-check-input typeTime" type="radio" name="timeSel1" value="Semanas" id="timeSel1" checked>
	  							<label class="form-check-label" for="timeSel1">
	    						En Semanas
	  							</label>
							</div>
							<div class="form-check">
	  							<input class="form-check-input typeTime" type="radio" name="timeSel1" value="Dias" id="timeSel2">
	  							<label class="form-check-label" for="timeSel2">
	    						En Dias
	  							</label>
							</div>
							<div class="form-check">
	  							<input class="form-check-input typeTime" type="radio" name="timeSel1" value="Horas" id="timeSel3">
	  							<label class="form-check-label" for="timeSel3">
	    						En Horas
	  							</label>
							</div>
						</div>

						<div class="card-body">
							<select class="form-select" id="valSemanas">
					    		<option  value="0" selected>Seleccione...</option>
					    		<option value="10">16</option>
					    		<option value="9">12</option>
					    		<option value="8">10</option>
					    		<option value="7">8</option>
					    		<option value="6">7</option>
					    		<option value="5">6</option>
					    		<option value="4">5</option>
					    		<option value="3">4</option>
					    		<option value="2">3</option>
					    		<option value="1">2</option>
							</select>
							<select class="form-select" id="valDias">
					    		<option  value="0" selected>Seleccione...</option>
					    		<option value="10">7</option>
					    		<option value="9">6</option>
					    		<option value="8">5</option>
					    		<option value="7">4</option>
					    		<option value="6">3</option>
					    		<option value="5">2</option>
							</select>
							<select class="form-select" id="valHoras">
					    		<option  value="0" selected>Seleccione...</option>
					    		<option value="10">24</option>
					    		<option value="9">22</option>
					    		<option value="8">19</option>
					    		<option value="7">17</option>
					    		<option value="6">14</option>
					    		<option value="5">12</option>
					    		<option value="4">10</option>
					    		<option value="3">7</option>
					    		<option value="2">5</option>
					    		<option value="1">2</option>
							</select>
						</div>
					</div>
					<button type="button" class="btn btn-primary mt-3" id="calcularP">Calcular</button>
				</div>

				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Costo Total</label>	
					<input type="number" value="0.0" step="0.01" id="aes_costoT1" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Moneda</label>	
					<input type="text" id="aes_moneda1" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Tiempo de Entrega Estimado</label>	
					<input type="text" id="aes_tiempoE" class="form-control" disabled>
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Aprovador Actual</label>	
					<div class="input-group mb-3 col-md-4">
  						<select class="form-select" id="aes_rango">
    						<option value="0" selected>Nivel</option>
    						<option value="1">1. Planner</option>
    						<option value="2">2. Finanzas</option>
    						<option value="3">3. Director</option>
    						<option value="4">4. Compras</option>
  						</select>
  						<div class="input-group-append col-md-8">
    						<input type="text" class="input-group form-control" id="aes_aprovadorA" ></input>
  						</div>
					</div>
					<!-- <input type="text" id="aes_aprovadorA" class="form-control" > -->
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Comprador del SAP</label>	
					<input type="text" id="aes_compradorSAP" class="form-control" >
				</div>
				<div class="col-md-6">
					<label class="form-label" id="basic-addon1">Numero de PO</label>	
					<input type="number" value="0" step="1" id="aes_PO" class="form-control" >
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
					<input type="number" value="0.0" step="0.01" id="aes_costoT2" class="form-control" >
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