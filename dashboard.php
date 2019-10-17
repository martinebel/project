<?php
include 'header.php';

 ?>

<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- Stats -->
<div class="row">
<div class="col-xl-4 col-lg-4 col-12">
    <div class="card">
        <div class="card-content">
            <div class="media align-items-stretch">
                <div class="p-2 text-center bg-primary bg-darken-2">
                    <i class="icon-camera font-large-2 white"></i>
                </div>
                <div class="p-2 bg-gradient-x-primary white media-body">
                    <h5>Proyectos en Curso</h5>
                    <h5 class="text-bold-400 mb-0" id="totalProyectos"> </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-4 col-12">
    <div class="card">
        <div class="card-content">
            <div class="media align-items-stretch">
                <div class="p-2 text-center bg-danger bg-darken-2">
                    <i class="icon-user font-large-2 white"></i>
                </div>
                <div class="p-2 bg-gradient-x-danger white media-body">
                    <h5>Tareas Pendientes</h5>
                    <h5 class="text-bold-400 mb-0" id="totalTareas"> </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-4 col-12">
    <div class="card">
        <div class="card-content">
            <div class="media align-items-stretch">
                <div class="p-2 text-center bg-success bg-darken-2">
                    <i class="icon-wallet font-large-2 white"></i>
                </div>
                <div class="p-2 bg-gradient-x-success white media-body">
                    <h5>Tickets Abiertos</h5>
                    <h5 class="text-bold-400 mb-0" id="totalTickets">  </h5>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--/ Stats -->
<!--Product sale & buyers -->
<div class="row match-height">
  <div class="col-xl-8 col-lg-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Tickets
              <small class="float-right"><a href="tickets.php" target="_blank">Ver Todos los Tickets <i class="ft-arrow-right"></i></a></small>
            </h4>

              <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

          </div>
          <div class="card-content">
              <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Proyecto</th>
                              <th>Cliente</th>
                              <th>Estado</th>
                              <th>Motivo</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="text-truncate">PO-10521</td>
                              <td class="text-truncate"><a href="#">INV-001001</a></td>
                              <td class="text-truncate">Elizabeth W.</td>
                              <td class="text-truncate"><span class="badge badge-success">Paid</span></td>
                              <td class="text-truncate">$ 1200.00</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>

<div class="col-xl-4 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tareas
            <small class="float-right"><a href="tasks.php" target="_blank">Ver Todas las Tareas <i class="ft-arrow-right"></i></a></small></h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

        </div>
        <div class="card-content px-1">
            <div id="recent-buyers" class="media-list height-300 position-relative">
                <a href="#" class="media border-0">

                    <div class="media-body w-100">
                        <h6 class="list-group-item-heading">Kristopher Candy</h6>
                        <p class="list-group-item-text mb-0"><span class="badge badge-primary">Electronics</span><span class="badge badge-warning ml-1">Decor</span></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<!--/ Product sale & buyers -->

    </div>
  </div>
</div>
<!-- END: Content-->

<?php
include 'footer.php';
 ?>
<script src="app-assets/actions/js/dashboard.js"></script>
