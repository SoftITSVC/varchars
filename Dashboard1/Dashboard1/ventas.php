<?php 
require_once 'vista/head.php'
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mis Ventas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Panel</a></li>
              <li class="breadcrumb-item active">Mis Ventas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-info-circle "></i> Visualiza tus ventas hechas ademas del estado en el que se encuentra</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Orden ID</th>
                    <th>Producto</th>
                    <th>Piezas / Unidades</th>
                    <th>Cliente</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>VT0001</td>
                    <td>Aretes 24K Papantecos MIX</td>
                    <td>2 Piezas</td>
                    <td>Armando Lopez Cabrera</td>
                    <td><h5><span class="badge bg-warning">Pendiente</span></h5></td>
                    <td><button type="button" class="btn btn-sm btn-primary">Actualizar </button> <button type="button" class="btn btn-sm btn-success">Imprimir</button></td>
                  </tr>
                  <tr>
                    <td>VT0001</td>
                    <td>Aretes 24K Papantecos MIX</td>
                    <td>2 Piezas</td>
                    <td>Armando Lopez Cabrera</td>
                    <td><h5><span class="badge bg-success">Enviado</span></h5></td>
                    <td><button type="button" class="btn btn-sm btn-primary">Actualizar </button> <button type="button" class="btn btn-sm btn-success">Imprimir</button></td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Orden ID</th>
                    <th>Producto</th>
                    <th>Piezas / Unidades</th>
                    <th>Cliente</th>
                    <th>Estado</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
    </section>
    <!-- /.content -->
  </div>
<?php 
require_once 'vista/footer.php'
?>