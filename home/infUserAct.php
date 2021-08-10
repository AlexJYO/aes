<div class="container" >
	<div>		
		<h4 class="page-title">Informacion de Usuario</h4>
	</div>
	<form id="userAct-form">
		<div class="form-group input-group">
			<input type="text" id="aes_user" placeholder="GMIN" class="form-control" required>				
			<input type="text" id="aes_name" placeholder="Nombre" class="form-control" required>
		</div>		
		<div class="form-group input-group">
			<input type="text" id="aes_apellido" placeholder="Apellido" class="form-control" required>		
			<input type="text" id="aes_jefe" placeholder="Lider directo" class="form-control" required>	
		</div>	
		<div class="input-group">
		  <label class="input-group-text" for="aes_departamento">Departamento</label>
		  <select class="form-select" id="aes_departamento">
		    <option selected>Elige...</option>
		    <option value="1">Produccion</option>
		    <option value="2">Dados</option>
		    <option value="3">Prensas/Controles</option>
		  </select>
		   <label class="input-group-text" for="aes_tripulacion">Tripulacion</label>
		  <select class="form-select" id="aes_tripulacion">
		    <option selected>Elige...</option>
		    <option value="1">A</option>
		    <option value="2">B</option>
		    <option value="3">C</option>
		    <option value="3">D</option>
		    <option value="3">E</option>
		  </select>
		</div>
		<!-- <div class="form-group input-group">
			<input type="text" id="aes_departamento" placeholder="Departamento" class="form-control" required>		
			<input type="text" id="aes_tripulacion" placeholder="Tripulacion" class="form-control" required>		
		</div>	 -->
		<div class="form-group input-group">
			<input type="password" id="aes_passN" placeholder="Nueva Contraseña" class="form-control">	
			<button id="show_passN" class="btn btn-primary" type="button"> <span class="fa fa-eye-slash iconN"></span> </button>				
		</div>
		<div class="form-group input-group mb-4">
			<input type="password" id="aes_passNC" placeholder="Confirmar Contraseña" class="form-control">	
			<button id="show_passNC" class="btn btn-primary" type="button"> <span class="fa fa-eye-slash iconNC"></span> </button>			
		</div>
		
		<button type="submit" class="btn btn-success" id="buttonAct">
			Guardar
		</button>
		<button type="button" class="btn btn-warning" id="buttonCan">Cancelar</button>
	</form>
	</div>