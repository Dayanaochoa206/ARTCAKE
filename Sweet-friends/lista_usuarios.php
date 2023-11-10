
<?
session_start();
include 'head.php';
?>
<section class="page-section" id="editar_usuario">
<div class="container">
  <a href="index.php"><img src="img/comoyoquiera.jpg" width="10%"> </a>

<div class="col-md">
<table class="table table-hover">
    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Perfil</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
    <?
    if($_SESSION['usuario_valido']){
    include 'config/conexion.php';
     $sql="SELECT id, usuario, correo, perfil FROM tblusuarios order by usuario";
     $reg=mysqli_query($con,$sql) or die("Error to list user");
     while($r=mysqli_fetch_array($reg)){
        echo '<tr><td>'.$r["id"].'</td><td>'.$r["usuario"].'</td><td>'.$r["correo"].'</td><td>'.$r["perfil"].'</td>
        <td><a href=editar_usuario.php?id='.$r["id"].'><img src="img/editar.png"></a></td>
        <td><a href=borrar_usuario.php?id='.$r["id"].'><img src="img/delete.png"></a></td>
        
        
        </tr>';
     }
     mysqli_close($con);
     echo'</table>';
    }else{
       header('Location:index.php'); 
    }
    ?>
</div>
</div>
</div>
</section>
