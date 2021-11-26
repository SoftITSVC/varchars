<?php require_once 'vista/head.php' ?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mi perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Perfil de usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="dist/img/user4-128x128.jpg"
                        alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center">Nombre Admin</h3>

                  <p class="text-muted text-center">Profesion</p>
                  <input type="file" class="form-control-file border">
                  <div class="upload-btn-wrapper">
                    <button class="boton-standar-rw">Carga un archivo</button>
                    <input class="upload-file-buton" type="file">
                  </div>
              </div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Acerca de mi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-map-marker-alt mr-1"></i>Ubicación</strong>

                <p class="text-muted">Veracruz, Papantla</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i>Descripción</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">Descripción de mis productos u empresa</span>
                 
                </p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item" >
                        <a class="nav-link active"  href="#settings" data-toggle="tab">Configuración</a>
                    </li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row" action="" method="POST">
                        <label for="inputName" class="col-md-2 col-form-label">Nombre</label>
                        <div class="col-md-10">
                          <input type="email" required class="form-control" id="inputName" placeholder="Nombre (s)" name="Nombre completo">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Correo</label>
                        <div class="col-sm-5">
                          <input type="email" required class="form-control" id="inputEmail" placeholder="Correo" name="Correo">
                        </div>
                        <div class="col-sm-5">
                          <input type="text" required class="form-control" id="inputTelefono" placeholder="Telefono" name="Telefono">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Correo de contacto</label>
                        <div class="col-sm-7">
                          <input type="email" required class="form-control" id="inputEmail" placeholder="Correo" name="Correo">
                        </div>
                        
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputContraseña" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10">
                          <input type="text" required class="form-control" id="inputContraseña" placeholder="Contraseña" name="Password">
                        </div>
                      </div>
                     
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">C.P</label>
                        <div class="col-sm-3">
                          <input type="text"   class="form-control" id="inputSkills" placeholder="Códgio postal" required>
                        </div>
                        <label for="inputClabe" class="col-sm-2 col-form-label">Clabe Bancaria</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputClabe" placeholder="Clabe Bancaria" required>
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require_once 'vista/footer.php' ?>