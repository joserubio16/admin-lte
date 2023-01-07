<?php
  require('../../layouts/header.php');
?>

          <div class="col-lg-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Listado
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

                <div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>
<th>ID</th>
<th>User</th>
<th>Date</th>
<th>Status</th>
<th>Reason</th>
</tr>
</thead>
<tbody>
<tr>
<td>183</td>
<td>John Doe</td>
<td>11-7-2014</td>
<td><span class="tag tag-success">Approved</span></td>
<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
</tr>
<tr>
<td>219</td>
<td>Alexander Pierce</td>
<td>11-7-2014</td>
<td><span class="tag tag-warning">Pending</span></td>
<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
</tr>
<tr>
<td>657</td>
<td>Bob Doe</td>
<td>11-7-2014</td>
<td><span class="tag tag-primary">Approved</span></td>
<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
</tr>
<tr>
<td>175</td>
<td>Mike Doe</td>
<td>11-7-2014</td>
<td><span class="tag tag-danger">Denied</span></td>
<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
</tr>
</tbody>
</table>
</div>
                    <!--Contenido de nuestra vista-->
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
        </div>
       
        <?php
  require('../../layouts/footer.php');
?>