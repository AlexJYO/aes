<div class="container" >
	<div>		
		<h2 class="page-title">Nueva Solicitud</h2>
	</div>
	<form class="row g-3" id="solicitud-form">
		<!-- ----------------------------------Informacion del Usuario------------------------------- -->
	<div class="card">
	<div class="row g-3 card-body" id="seccion">
		<h4 class="datos-solicitante">Datos del Usuario</h4>
		<div class="col-md-6">
			<label class="form-label" id="basic-addon1">Nombre del Solicitante*</label>	
			<input type="text" id="aes_name" class="form-control" disabled="" required>
		</div>		
		<div class="col-md-6">
			<label class="form-label" id="basic-addon1">LGT Solicitante*</label>			
			<input type="text" id="aes_jefe" class="form-control" required>		
		</div>	
		<div class="col-md-6">
		  <label class="form-label" for="aes_departamento">Departamento*</label>
		  <select class="form-select" id="aes_departamento" disabled="" required>
		    <option selected>Elige...</option>
		    <option value="Produccion">Produccion</option>
		    <option value="Dados">Dados</option>
		    <option value="Prensas/Controles">Prensas/Controles</option>
		  </select>
		</div>
		<div class="col-md-6">
		   <label class="form-label" for="aes_tripulacion">Tripulacion*</label>
		  <select class="form-select" id="aes_tripulacion" disabled=""  required>
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
		<!-- ----------------------------------Informacion de la refaccion------------------------------- -->
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
		<div class="row g-3" id="seccion">
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
		<div id="aes_minMax">
		<label class="form-label mt-5" for="refaccion_pSugerido">Parametro sugerido</label>
		<div class="row g-3 ">
			<div class="col-md-6">
			<label class="input-group-text" id="basic-addon1">Minimo</label>	
			<input type="number" value="0" step="1" id="aes_min" class="form-control">
		</div>		
		<div class="col-md-6">
			<label class="input-group-text" id="basic-addon1">Maximo</label>			
			<input type="number" value="0" step="1" id="aes_max" class="form-control">		
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
				<textarea id="refaccion_porque1" class="form-control" required></textarea>
			</div>
			<div class="form-group input-group">	
				<span class="input-group-text">¿Por que?</span>		
				<textarea id="refaccion_porque2" class="form-control" required></textarea>
			</div>
			<div class="form-group input-group">
				<span class="input-group-text">¿Por que?</span>			
				<textarea id="refaccion_porque3" class="form-control" required></textarea>
			</div>
		</div>
		
	</div>
	</div>
	<div class="card">
	<div class="card-body row g-3">
			<!-- <label class="form-label" for="refaccion_prioridad">Selecciona la prioridad*</label>
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
			</div> -->
			<h4> Formulario de Prioridad</h4>
			<div class="card col-md-4" style="background-color: #F7FAAB;">
				<div class="card-body" >
					<h5 class="card-title">Tipo de paro</h5>
					<div class="form-check">
	  					<input class="form-check-input typeParo" type="radio" name="paroSel1" value="Planta" id="paroSel1" checked>
	  					<label class="form-check-label" for="paroSel1">
	    						Paro de Planta
	  					</label>
					</div>
						<div class="form-check">
	  					<input class="form-check-input typeParo" type="radio" name="paroSel1" value="Linea" id="paroSel2">
	  					<label class="form-check-label" for="paroSel2">
	    						Paro de Linea
	  					</label>
					</div>
					<div class="form-check">
	  					<input class="form-check-input typeParo" type="radio" name="paroSel1" value="Maquina" id="paroSel3">
	  					<label class="form-check-label" for="paroSel3">
	    						Averia de Maquina
	  					</label>
					</div>
				</div>
				<div class="card-body">
					<select class="form-select" id="valPlanta" >
					    <option  value="0" selected>Seleccione...</option>
					    <option value="10">Seguridad (Puede causar lesión).</option>
					    <option value="9">Muy alto impacto, planta PARADA > 1 turno.</option>
					    <option value="8">Alto impacto < 1 turno parado.</option>
					    <option value="7">Impacto moderado. Perdida de throghput.</option>
					    <option value="6">Bajo impacto, perdida o redundancia.</option>
					    <option value="5">Fabricación especial dentro de estampado.</option>
					    <option value="4">Puede ser manufacturado localmente.</option>
					    <option value="3">El OEM o proveedor local tiene la refacción como componente estandar</option>
					    <option value="2">La refacción esta disponible en otro almacén o complejo de GM</option>
					    <option value="1">Otros</option>
					</select>
					<select class="form-select" id="valLinea" >
					    <option  value="0" selected>Seleccione...</option>
					    <option value="10">Esta parte NO es usada en otra maquina o es una parte usada</option>
					    <option value="9">La refacción es obsoleta</option>
					    <option value="8">Requiere fabricación especial fuera del taller de estampado</option>
					    <option value="7">Afecta la calidad del producto</option>
					    <option value="6">Sistema de protección del equipo</option>
					    <option value="5">Fabricación especial dentro de estampado</option>
					    <option value="4">Puede ser manufacturado localmente</option>
					    <option value="3">El OEM o proveedor local tiene la refacción como componente estandar</option>
					    <option value="2">La refacción esta disponible en otro almacén o complejo de GM</option>
					    <option value="1">Otros</option>
					</select>
					<select class="form-select" id="valMaquina">
					    <option  value="0" selected>Seleccione...</option>
					    <option value="10">Esta parte NO es usada en otra maquina o es una parte usada</option>
					    <option value="9">La refacción es obsoleta</option>
					    <option value="8">Afecta la calidad del producto</option>
					    <option value="7">Sistema de protección del equipo.</option>
					    <option value="6">By pass</option>
					    <option value="5">Reparación temporal</option>
					    <option value="4">Equipo similar o estación de backup</option>
					    <option value="3">El OEM o proveedor local tiene la refacción como componente estandar</option>
					    <option value="2">Refacción equivalente</option>
					    <option value="1">La refacción esta disponible en otro almacén o complejo de GM</option>
					</select>
				</div>
			</div>

			<div class="card col-md-4" style="background-color: #BBF8F6;">
				<div class="card-body">
					<h5 class="card-title">Frecuencia de falla</h5>
					<div class="form-check">
	  					<input class="form-check-input typeFalla" type="radio" name="fallaSel1" value="Dia" id="fallaSel1" checked>
	  					<label class="form-check-label" for="fallaSel1">
	    						En Dias
	  					</label>
					</div>
						<div class="form-check">
	  					<input class="form-check-input typeFalla" type="radio" name="fallaSel1" value="Mes" id="fallaSel2">
	  					<label class="form-check-label" for="fallaSel2">
	    						En Meses
	  					</label>
					</div>
				</div>
				<div class="card-body mt-4">
					<select class="form-select" id="valDia">
					    <option  value="0" selected>Seleccione...</option>
					    <option value="10">10</option>
					    <option value="9">12</option>
					    <option value="8">14</option>
					    <option value="7">16</option>
					    <option value="6">18</option>
					    <option value="5">20</option>
					    <option value="4">22</option>
					    <option value="3">24</option>
					    <option value="2">26</option>
					    <option value="1">28</option>
					</select>
					<select class="form-select" id="valMes">
					    <option  value="0" selected>Seleccione...</option>
					    <option value="20">1</option>
					    <option value="19">2</option>
					    <option value="18">3</option>
					    <option value="17">4</option>
					    <option value="16">5</option>
					    <option value="15">6</option>
					    <option value="14">7</option>
					    <option value="13">8</option>
					    <option value="12">9</option>
					    <option value="11">10</option>
					    <option value="10">11</option>
					    <option value="9">12</option>
					    <option value="8">15</option>
					    <option value="7">18</option>
					    <option value="6">21</option>
					    <option value="5">24</option>
					    <option value="4">36</option>
					    <option value="3">42</option>
					    <option value="2">48</option>
					    <option value="1">60</option>
					</select>
				</div>
			</div>

			<div class="card col-md-4" style="background-color: #97B7FF;">
				<div class="card-body">
					<h5>Deteccción</h5>
					<select class="form-select" id="deteccion">
					    <option  value="0" selected>Seleccione...</option>
					    <option value="10">No predecible o instantanea</option>
					    <option value="9">GM o experiencia en otras</option>
					    <option value="8">Recomendación de cambio según OEM</option>
					    <option value="7">Análisis de vibración</option>
					    <option value="6">Monitoreo de energia de motor o ultrasonido</option>
					    <option value="5">Análisis de termografía</option>
					    <option value="4">Otros dispositivos de predictivo (Tribología, Tensiometro, Análisis de redes etc)</option>
					    <option value="3">Inspección visual o ruido</option>
					    <option value="2">La parte puede ser integrada a PM</option>
					    <option value="1">La refacción tiene un autodiagnostico</option>
					</select>
				</div>
			</div>


		</div>
	</div>
	<div class="form-check">
		<button type="submit" class="btn btn-success" id="buttonAct">
			Guardar
		</button>
		<button type="button" class="btn btn-warning" id="buttonCan">Cancelar</button>
		
	</div>
	</form>
</div>