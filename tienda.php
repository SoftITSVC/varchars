<?php //require 'assets/librerias/buscar_sesion.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <?php require 'assets/librerias/head.php'; ?>
  </head>
  <body>


    <!-- menu-->
    <header class="header mb-5">
      <?php require 'assets/librerias/linea_gris.php';
            require 'assets/librerias/menu.php'; ?>
    </header>



    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="assets/librerias/cerrar_sesion.php">Cerrar Sesion</a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">

              <!--
              *** MENU CATEGORIA ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Categorias</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column category-menu">
                    <li><a href="category.html" class="nav-link">Categoria 1<span class="badge badge-secondary">42</span></a>
                      <!--
              *** poner un while para desglozar las categorias ***
              _________________________________________________________
              -->
                      <ul class="list-unstyled">
                        <li><a href="category.html" class="nav-link">Producto 1</a></li>
                        <li><a href="category.html" class="nav-link">Producto 2</a></li>
                        <li><a href="category.html" class="nav-link">Producto 3</a></li>
                        <li><a href="category.html" class="nav-link">Producto 4</a></li>
                      </ul>
                    </li>
                    <li><a href="category.html" class="nav-link active">Categoria 2<span class="badge badge-secondary">Stock</span></a>
                      <!--
              *** poner un while para desglozar las categorias ***
              _________________________________________________________
              -->
                      <ul class="list-unstyled">
                        <li><a href="category.html" class="nav-link">Producto 1</a></li>
                        <li><a href="category.html" class="nav-link">Producto 2</a></li>
                        <li><a href="category.html" class="nav-link">Producto 3</a></li>
                        <li><a href="category.html" class="nav-link">Producto 4</a></li>
                      </ul>
                    </li>
                    
                  </ul>
                </div>
              </div>
              <!--
              *** TERMINA EL MENU CATEGORIA ***
              _________________________________________________________
              -->
              
            </div>




            <div class="col-lg-9">
              <div class="box">
                <h1>CATEGORIA DESDE BD</h1>
              </div>
              <!--
              *** CREAR UN PRODUCTO DE SEGUN SU CATEGORIA ***
              _________________________________________________________
              -->

              <div class="row products">
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="#"><img src="assets/img/product1.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="#"><img src="assets/img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="detail.html" class="invisible"><img src="assets/img/product1.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="detail.html">Nombre del producto BD</a></h3>
                      <p class="price"> 
                        <del></del>$143.00
                      </p>
                      <p class="buttons"><a href="detail.html" class="btn btn-outline-secondary">+Detalles</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Añadir</a></p>
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
                <!--
                *** TERMINA CREAR UN PRODUCTO DE SEGUN SU CATEGORIA ***
                _________________________________________________________
                -->


                
                
                
                
                
              <div class="pages">
                <p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a></p>
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                  <ul class="pagination">
                    <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- /.col-lg-9-->
          </div>
        </div>
      </div>
    </div>
    
    <footer>
      <?php require 'assets/librerias/footer.php'; ?>
    </footer>
    <!-- JavaScript files-->
    <?php require 'assets/librerias/files_js.php'; ?>
  </body>
</html>