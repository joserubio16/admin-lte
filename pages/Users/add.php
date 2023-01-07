<?php
  require('../../layouts/header.php');
?>
          <div class="col-lg-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Crear
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                 
                  </ul>
                </div>
              </div><!-- /.card-header -->
        <form action="">
              <div class="card-body">
                <div class="tab-content p-0">
                    <div class="row g-3">
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Correo</label>
                          <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Domicilio</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-6">
                          <label for="inputCity" class="form-label">Ciudad</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                          <label for="inputState" class="form-label">Estado</label>
                          <select id="inputState" class="custom-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <label for="inputZip" class="form-label">CP</label>
                          <input type="text" class="form-control" id="inputZip">
                        </div>
                        </div>
                    </div>
                    <!--Contenido de nuestra vista-->
                </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
              </div><!-- /.card-body -->
            </div>
        </form>
            <!-- /.card -->
          </div>
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
        </div>
      
        <?php
  require('../../layouts/footer.php');
?>