<?php include "./administrador/config/conexionBD.php"; ?>

<?php
$objConec = new conexionBD();
$resultado=$objConec->consultar("SELECT * FROM `contacto`");
?>

<?php
if($_POST){
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $conec = new conexionBD();
  $sql = "INSERT INTO `contacto` (`id`, `fullname`, `email`, `message`) VALUES (NULL, '$fullname', '$email', '$message')"; 

  $conec->ejecutar($sql);

  header("location:./contact.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">



  <title>Contacto</title>  

<link href="./main.82cfd66e.css" rel="stylesheet"></head>

<body>

 <!-- Add your content of header -->
 <header class="">
  <div class="navbar navbar-default visible-xs">
    <button type="button" class="navbar-toggle collapsed">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="./index.html" class="navbar-brand">FitCamp Template</a>
  </div>

  <nav class="sidebar">
    <div class="navbar-collapse" id="navbar-collapse">
      <div class="site-header hidden-xs">
          <a class="site-brand" href="./index.html" title="">
            <img class="img-responsive site-logo" alt="" src="./assets/images/mashup-logo.svg">
            FitCamp Club
          </a>
        <p>Hoy es buen dia para ponerse una meta, ¿Cúal es la tuya?</p>
      </div>
      <ul class="nav">
        <li><a href="./index.html" title="">Inicio</a></li>
        <li><a href="./about.html" title="">Cuéntame</a></li>
        <li><a href="./services.html" title="">Servicios</a></li>
        <li><a href="./contact.php" title="">Contacto</a></li>
        <li><a href="./components.html" title="">Componetes</a></li>

      </ul>

      <nav class="nav-footer">
        <p class="nav-footer-social-buttons">
          <a class="fa-icon" href="https://www.instagram.com/" title="">
            <i class="fa fa-instagram"></i>
          </a>
          <a class="fa-icon" href="https://dribbble.com/" title="">
            <i class="fa fa-dribbble"></i>
          </a>
          <a class="fa-icon" href="https://twitter.com/" title="">
            <i class="fa fa-twitter"></i>
          </a>
        </p>
        <p>© Untitled | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></p>
      </nav>  
    </div> 
  </nav>
</header>
<main class="" id="main-collapse">


<div class="row">
  <div class="col-xs-12">
    <div class="section-container-spacer">
      <h1>Contactame</h1>
      <p>Completa los datos correspondientes, sí no cuentas con correo electrónico(email) no es necesario puedes colocar tu número telefónico o puedes contactarme al número que se encuentra a la derecha y con gusto te atendere...</p>
    </div>
    <div class="section-container-spacer">

    <form action="contact.php" method="POST" class="reveal-content">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email o Teléfono">
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="fullname" id="subject" placeholder="Nombre Completo" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" name="message" placeholder="Insert el mensaje" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
            </div>
            <div class="col-md-6">
              <ul class="list-unstyled address-container">
                <li>
                  <span class="fa-icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </span>
                  +591 635-688-88
                </li>
                <li>
                  <span class="fa-icon">
                    <i class="fa fa-at" aria-hidden="true"></i>
                  </span>
                  maicolarteaga0711@gmail.com
                </li>
                <li>
                  <span class="fa-icon">
                    <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                  </span>
                  Z/ Los lotes  B/ Pedro Diez  C/Hernandos Siles
                </li>
              </ul>
              <h3>Sigueme en mis redes sociales</h3>
              <a href="https://www.linkedin.com/" title="" class="fa-icon">
                <i class="fa fa-linkedin"></i>
              </a>
              <a href="https://twitter.com/" title="" class="fa-icon">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="https://dribbble.com/" title="" class="fa-icon">
                <i class="fa fa-dribbble"></i>
              </a>
            </div>
          </div>
        </form>

    </div>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>CORREO</th>
      <th>Mensaje</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($resultado as $contacto){?>
    <tr>
      <td><?php echo $contacto['id'] ?></td>
      <td><?php echo $contacto['fullname'] ?></td>
      <td><?php echo $contacto['email'] ?></td>
      <td><?php echo $contacto['message'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>


</main>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
  navActivePage();
});
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--> <script type="text/javascript" src="./main.85741bff.js"></script></body>

</html>