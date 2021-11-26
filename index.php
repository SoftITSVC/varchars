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
    </header>

 <!--
        *** CARRUSELL ***
        _________________________________________________________
        -->
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="https://programadestinosmexico.com/descubre-mexico/artesanias/veracruz/ARTESANIAS%20VERACRUZ%201.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="https://www.somoscoatepec.com/sites/default/files/artesania_0.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="https://programadestinosmexico.com/descubre-mexico/artesanias/veracruz/ARTESANIAS%20VERACRUZ%203.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="https://www.horizontedigital.com.mx/wp-content/uploads/2016/03/9-1-600x360.jpg" alt="" class="img-fluid"></div>
              </div>
            </div>
          </div>
        </div>
 <!--
        *** TERMINA EL CARRUSELL ***
        _________________________________________________________
        -->



        <!--
        *** TRES CUADROS ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">Ofertas Exculsivas</a></h3>
                  <p class="mb-0">Solo aqui podras encontrar las mejores ofertas de artesanias de la región</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Mejores precios</a></h3>
                  <p class="mb-0">Calidad en todos nuestros productos</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">100% Satisfacción Garantizada</a></h3>
                  <p class="mb-0">Calidad en nuestros productos</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!--
        *** TERMINAN LOS TRES CUADROS ***
        _________________________________________________________
        -->


<!--
        *** INICIA EL TOP 10 ***
        _________________________________________________________
        -->

        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">TOP 10</h2>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="product-slider owl-carousel owl-theme">

              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="assets/img/product1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="assets/img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="assets/img/product1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Nombre del producto</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <!--
        *** TERMINA EL TOP 10 ***
        _________________________________________________________
        -->


        <!--
        *** PARTE DE ARTESANOS ***
        _________________________________________________________
        -->
        <div class="container">
          <div class="col-md-12">
            <div class="box slideshow">

              <iframe width="100%" height="400px" src="https://www.youtube.com/embed/O5_U01yH-a0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <h4>Conoce mas nuestras artesanias</h4>
            </div>
          </div>
        </div>
        <!-- *** PARTE DE ARTESANOS ***-->



        <div class="box text-center">
          <div class="container">
            <div class="col-md-12">
              <h3 class="text-uppercase">From our blog</h3>
              <p class="lead mb-0">What's new in the world of fashion? <a href="blog.html">Check our blog!</a></p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-12">
            <div id="blog-homepage" class="row">
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">Fashion now</a></h4>
                  <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a></p>
                  <hr>
                  <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">Who is who - example blog post</a></h4>
                  <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a></p>
                  <hr>
                  <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>
    

    <footer>
      <?php require 'assets/librerias/footer.php'; ?>
    </footer>
    <!-- JavaScript files-->
    <?php require 'assets/librerias/files_js.php'; ?>
  </body>
</html>