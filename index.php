<?php
  require('./layouts/header-index.php');
?>


          <div class="col-lg-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Ventas
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                    <!--Contenido de nuestra vista-->
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
        </div>
       
<?php
  require('./layouts/footer-index.php');
?>