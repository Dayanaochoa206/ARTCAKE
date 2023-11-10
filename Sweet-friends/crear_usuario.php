<<?include 'head.php';?>
<body>
 <?include 'menu.php'?>
<section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
<h2>Registro de usuarios <a href='index.php'>
<img src='img/comoyoquiera.jpg' width="10%" title='Regresar'></a></h2>
 <form method="post" action="genera_clave.php">
 <div class="form-group">
 <label for="correo">Correo:</label>
 <input type="email"
 class="form-control"
 id="correo"
 placeholder="Correo" name="correo" required> </div>
 <div class="form-group">
 <label for="nombre">Nombre:</label>
 <input type="nombre"
 class="form-control" id="nombre"
 placeholder="Nombre" name="nombre" required>
 </div>
 <div class="form-group">
 <label for="pwd">Password:</label>
 <input type="password" class="form-control" id="pwd"
 placeholder="Enter password" name="pwd" required>
 </div>
 <div class="form-group">
 <label for="rpwd">Re-Password:</label>
 <input type="password" class="form-control" id="rpwd"
 placeholder="Enter password" name="rpwd" required>
 </div>
   <div class="text-center"><button type="submit">Enviar</button></div>
 
</form></div> </div>
 
</section>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
<!-- Core theme JS-->
</body></html>