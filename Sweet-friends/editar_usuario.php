<?include 'head.php';
 $idusuario=$_REQUEST['id'];
 $correo="";
 $usuario="";
 $perfil=0;
 $nperfil="";
 include 'config/conexion.php';
 $instruccion = "SELECT id,usuario,correo,perfil
                 FROM  tbl_usuarios 
                 WHERE id='$idusuario'";
 $consulta = mysqli_query ($con,$instruccion) 
 or die ("Fallo en la consulta Usuario");
while($reg=mysqli_fetch_array($consulta)){
      $usuario=$reg['usuario'];
      $correo=$reg['correo'];
      $perfil=$reg['perfil'];
    }
    mysqli_close($con);
    if($perfil==1){
    $nperfil="Administrador";
    }
    if($perfil==0){
       $nperfil="Bloqueado";
       }
    if($perfil==2){
          $nperfil="Cajero";
          }
    if($perfil==3){
             $nperfil="Cliente";
             }   
    if($perfil==1){
                $nperfil="Domiciliario";
                }
     ?>
     <div class="page-section" id="editar_usuario.php">
     <div class="container">  
     <a href="lista_usuario.php"><img src="img/diagram.png" width="20%"></a>    
     <div class="form-group">
        <form method="post" action="salvar_usuario.php">
        <div class="form-group">
        <label for="id">id</label>
        <input type="text" 
        name="id"
        value=<? echo $idusuario?>
        class="form-control" readonly> 
    </div>  
    <div class="form-group">
        <label for="id">usuario</label>
        <input type="text" 
        name="usuario"
        value=<? echo $usuario?>
        class="form-control" readonly> 
    </div>
    <div class="form-group">
        <label for="id">correo</label>
        <input type="text" 
        name="correo"
        value=<? echo $correo?>
        class="form-control" readonly> 
    </div>       
     <div class="form-group">
       <label for="perfil">perfil</label>
       <select name="perfil" class="form-control">
       <option value=<? echo $perfil?>>    <?echo $nperfil?>  </option>  
       <option value="0">Bloqueado</option> 
       <option value="1">Administrador</option>
       <option value="2">Cajero</option>
       <option value="3">Cliente</option>
       <option value="4">Domiciliario</option>
    </div>
    </select>
    
    <div class="form-group">
    <button type="submit" class="btn btn-danger">save</button>
    </div>   
    </form>
    </div>
    </div>
    </div>