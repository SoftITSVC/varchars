<!DOCTYPE html>
<html>
  <head>
    <?php require 'assets/librerias/head.php'; ?>
  </head>

  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <?php require 'assets/librerias/linea_gris.php';
            require 'assets/librerias/menu.php'; ?>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="assets/librerias/validacionRegistro.js"></script>
    </header>

     
      
    
    <div id="all">
      <div id="content">
     <div class="container">
          <div class="row">
            <div class="col-lg-3"></div>
           <div class="col-lg-6">
             <div class="box">
                <h1>Registrate  <i class="fa fa-check"></i></h1>
                <p class="lead">Completa todos los campos</p>
                <form action="Controller/registro_usuarios_Controller.php" method="post" onsubmit="return validar();">
                  <div class="form-group">
                    <label for="user">Nombre(s) <i class="fa fa-user"></i></label>
                    <input id="user" name="user" type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="user">Apellidos <i class="fa fa-user"></i></label>
                    <input id="user" name="user" type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="correo">Correo Electronico  <i class="fa fa-mail"></i></label>
                    <input id="correo" name="correo" type="email" class="form-control" 
                    required>
                  </div>
                  <div class="form-group">
                    <label for="contrasena">Contraseña <i class="fa fa-lock"></i></label>
                    <input id="contrasena" type="password" name="contrasena" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="contrasena">Verifica tu Contraseña  <i class="fa fa-lock"></i></label>
                    <input id="contrasena2" name="contrasena2" type="password" class="form-control" required>
                  </div> 
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="check" name="check" class="form-check-input" value="0" required>Acepto los terminos y condiciones</label>
                        </div>
                        <br>
                  <div class="text-center">
                    <button type="submit" id="enviar" onclick="validar();" class="btn btn-primary">Registrarte <i class="fa fa-check"></i></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
    </div>
  </body>

<footer>
      <?php require 'assets/librerias/footer.php'; ?>
    </footer>
    <!-- JavaScript files-->
    <?php require 'assets/librerias/files_js.php'; ?>
  </body>
</html>