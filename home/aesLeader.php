<div class="row" id="listU">
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<form id="leader-form">
					<input type="hidden" id="custId">
					<div class="form-group">
						<input type="text" id="gmin" placeholder="GMIN" class="form-control">							
					</div>	
					<div class="form-group mb-2">
						<input type="text" id="nombre" placeholder="Nombre" class="form-control" required>					
					</div>
					<div class="col-md-6 mb-3">
					<label class="form-label" for="aes_cuenta">Puesto</label>
					  	<select class="form-select" id="aes_puesto" required>
						    <option selected>Elige...</option>
						    <option value="LGT">LGT</option>
						    <option value="Shift Leader">Shift Leader</option>
						    <option value="Gerente">Gerente</option>
					  	</select>
					</div>
					<button type="submit" class="btn btn-success" id="buttonAct">
						Guardar
					</button>
					<button type="button" class="btn btn-warning" id="buttonCan">Cancelar</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		
		<table id="tableL" class="table table-sm " >
			<thead class="thead-light">
				<tr>
					<th>ID</th>
					<th>GMIN</th>
					<th>Nombre</th>
					<th>Puesto</th>
					<th></th>
				</tr>
			</thead>
			<tbody id="usuarios">
				<?php include('../backend/tableLeader.php'); ?>
			</tbody>
		</table>
	</div>
</div>