<?
session_start();
if(isset($_GET['user']) & isset($_GET['pwd'])){
$usuario=$_REQUEST['user'];
$clave=$_REQUEST['pwd'];
$clave_crypt="";
$nfilas=0;


if(isset($usuario) && isset($clave)){
include 'config/conexion.php';
$salt=substr($usuario,0,2);
$salt=strtoupper($salt);
$clave_crypt=crypt($clave,$salt);
$sql="SELECT usuario, clave, perfil FROM tblusuarios WHERE usuario = '$usuario' AND clave = '$clave_crypt'";
$consulta=mysqli_query($con, $sql);
$nfilas=mysqli_num_rows($consulta);
while($reg=mysqli_fetch_array($consulta)){
  $_SESSION["usuario_valido"]=$reg['usuario'];
  $_SESSION["perfil"]=$reg['perfil'];

}//fin while
mysqli_close($con);
}//fin si hay usuario y clave
if($nfilas>0){
  $usuario_valido=$usuario;
  $_SESSION['usuario_valido']=$usuario_valido;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<?include 'head.php'?>
<?include 'config/conexion.php'?>

  <body>

  <!--======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div class="logo">
        <a href="index.html"><h1>Sweet friends</h1></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

  <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
     <?
    if(isset($_SESSION['correo _valido'])){
      
    }
   include 'menu.php'
    ?>

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <?include'login.php'?>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Proveen los placeres más dignos, como si los placeres del cuerpo fueran asumidos.</h3>
            <p class="fst-italic">
             Es importante cuidar de la salud de nuestros clientes, ya que despertamos la conciencia a traves de la alimentación saludable.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i>No puedes comprar la felicidad, pero si puedes comerte unos cupcakes, que es casi lo mismo.</li>
              <li><i class="bx bx-check-double"></i>Nos perdemos en cualquier versión, pero en nuestro corazón un cupcake es el mejor.</li>
              <li><i class="bx bx-check-double"></i>Nadie como tu para endulzar cada dia.</li>
            </ul>
            <p>
             La creatividad siempre será esencial mientras mas ocurrente y único sea más iconico para el público sera, servir como fuente de inspiración para llamar la atención con un pedazo de dulzura que es complice en un momento del dia.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="assets/img/why-us-1.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="bx bx-book-reader"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Nuestra Misión.</a></h5>
                <p class="card-text">Somos un emprendimiento dedicada a innovar, producir y comercializar, satisfaciendo y cumpliendo las necesidades y exigencias de nuestros clientes, tanto locales, como nacionales; siendo así reconocida por la excelente atención al cliente y la alta calidad de nuestros productos. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="assets/img/why-us-2.jpg" class="hero-bg.png" alt="...">
              <div class="card-icon">
                <i class="bx bx-calendar-edit"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Nuestro Plan.</a></h5>
                <p class="card-text">Poder crear nuestra empresa a base de crecimiento economico,de reconocimiento nacional e internacional, adaptandonos a las nuevas tendencias, modas y competencias que puedan surgir.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="assets/img/why-us-3.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="bx bx-landscape"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Nuestra Visión</a></h5>
                <p class="card-text">Posicionarnos en el primer lugar del mercado de la repostería en un plazo de tres años, para ser reconocidos a nivel nacional, con un rápido y eficaz método de distribución de nuestros productos y lograr un crecimiento del 40%, mediante la apertura de nuevas sucursales en las principales ciudades de Colombia, siendo consistentes con la innovación de productos</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contactanos</h2>
        </div>
        <img src="imagen/sweet friends.png" width="40%">

        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-5 mb-5 mb-md-0">
            <div class="info">
              <div class="address">
                <i class="bx bx-map"></i>
                <p>Institucion Educativa Fe y Alegria Aures<br>Medellin Cr 95 89-73</p>
              </div>

              <div class="correo">
                <i class="bx bx-envelope"></i>
                <p>cardonaesteban777@gmail.com</p>
              </div>

              <div class="número">
                <i class="bx bx-phone-call"></i>
                <p>+57 3205864741</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-7">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Tu nombre" required>
              </div>
              <div class="form-group mt-3">
                <input type="correo" class="form-control" name="correo" id="correo" placeholder="Tu correo" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="Información" id="Información" placeholder="Información" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="Cargando">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje a sido enviado gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Siimple</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-landing-page/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>