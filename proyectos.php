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
      						<a href="createProject.php" class="btn btn-primary btn-sm "><i class="d-md-none d-block ft-plus white"></i>
      							<span class="d-md-block d-none">Crear Proyecto</span></a>
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
                    <?php
                    $stmt = $dbh->prepare("select * from projects");
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach($result as $row){
                      echo '<tr>
                      <td>'.$row["project_id"].'</td>
                      <td><a href="viewProject.php?id='.$row["project_id"].'">'.$row["name"].'</a></td>
                      <td>'.$row["date_creation"].'</td>';
                      $status='';
                      switch($row["status"])
                      {
                        case 'OPEN': $status='<span class="badge badge-success">Abierto</span>'; break;
                        case 'CLOSED': $status='<span class="badge badge-warning">Cerrado</span>'; break;
                        case 'HOLD': $status='<span class="badge badge-danger">En Espera</span>'; break;
                        case 'PROGRESS': $status='<span class="badge badge-secondary">En Progreso</span>'; break;
                      }
                      echo '<td>'.$status.'</td></tr>';
                    }

                     ?>
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
