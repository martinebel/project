<?php
include 'header.php';
 ?>
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/rowReorder.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/responsive.dataTables.min.css">
<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- Stats -->
      <section class="row all-contacts">
      	<div class="col-12">
      		<div class="card">
      			<div class="card-head">
      				<div class="card-header">
      					<h4 class="card-title">Todos los Proyectos</h4>
      					<div class="heading-elements mt-0">
      						<button class="btn btn-primary btn-sm "><i class="d-md-none d-block ft-plus white"></i>
      							<span class="d-md-block d-none">Crear Proyecto</span></button>
      					</div>
      				</div>
      			</div>
      			<div class="card-content">
      				<div class="card-body">
                <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center dataTable">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Creado</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody id="listaproyectos"></tbody>
                </table>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>
<!--/ Stats -->


    </div>
  </div>
</div>
<!-- END: Content-->

<?php
include 'footer.php';
 ?>
<script src="app-assets/vendors/js/tables/jquery.dataTables.min.js"></script>
<script src="app-assets/vendors/js/tables/dataTables.bootstrap4.min.js"></script>
<script src="app-assets/vendors/js/tables/dataTables.responsive.min.js"></script>
<script src="app-assets/vendors/js/tables/dataTables.rowReorder.min.js"></script>
<script src="app-assets/actions/js/projects.js"></script>
