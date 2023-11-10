<?
 session_start();
 include 'head.php';
 $id=$_REQUEST['id'];
 $perfil=$_REQUEST['perfil'];
?>
<div class="container">
    <div class="from-group">
        <?
         include 'config/conexion.php';
         $sql='delete From tblusuarios WHERE id="'.$id.'"';
         $consulta=mysqli_query($con, $sql) or die("<div class='alert alert-success'>Error</div>");
         echo '<div class="alert alert-success">Usuario Borrador</div>';
         header('Location:lista_usuarios.php');
        ?>
    </div>
</div>