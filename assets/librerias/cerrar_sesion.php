<?php 

session_start();
unset($_SESSION["usuario"]);
session_destroy();
echo '
    <script>
    alert(".: Sesion finalizada :.");
    window.location="../../index.php";
    </script> ';

 ?>