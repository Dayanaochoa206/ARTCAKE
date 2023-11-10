<?include 'head.php';?>
<div class="container-sm border">
<div class="form-group">

 <?
 $correo =$_POST['correo'];
 $usuario=$_POST['nombre'];
 $clave=$_POST['pwd'];
 $rclave=$_POST['rpwd'];
 $perfil=0;
 $estado="activo";
 /* echo '<br>'.$correo;
 echo '<br>'.$usuario;
 echo '<br>'.$clave;
 echo '<br>'.$rclave;*/
 if ($clave==$rclave){
 include 'config/conexion.php';
 $instruccion = "SELECT * FROM tblusuario WHERE correo='$correo'";
 $consulta = mysqli_query ($con, $instruccion) 
 or die ("Fallo en la consulta correo");
 //or die mysql_errno($consulta);
 // Mostrar resultados de la consulta
 $nfilas = mysqli_num_rows ($consulta);
 if ($nfilas == 0)
 {
 $salt = substr ($usuario, 0, 2);
 $salt=strtoupper($salt);
 $clave_crypt = crypt ($clave, $salt);
 $instruccion = "INSERT INTO tblusuario (id, Nombre, Perfil, Clave, correo, Estado) 
 values (null,'$usuario', '$perfil','$clave_crypt','$correo', '$estado')";
 $consulta = mysqli_query ($con, $instruccion) or die ("Fallo en la inserción");
 mysqli_close ($con);

 echo '<div class="alert alert-success alert-dismissible">';
 echo '<button type="button" class="close" data-dismiss="alert">×</button>';
 echo '<strong>Usuario: <br>'. $usuario. 'creado con éxito</strong> </div>';
 }else{
 echo '<div class="alert alert-danger alert-dismissible">';
 echo '<button type="button" class="close" data-dismiss="alert">×</button>';
 echo '<strong>Correo no válido</strong> </div>';
 } }else{
 echo '<div class="alert alert-danger alert-dismissible">';
 echo '<button type="button" class="close" data-dismiss="alert">×</button>';
 echo '<strong>Las claves no coinciden</strong> </div>';
 }
 echo "<meta http-equiv='refresh' content='2;url=index.php'/>";
?>
</div>
</div>







