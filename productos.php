<?php include("template/cabecera.php"); ?>

<?php
include("administrador/config/bd.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>


<?php foreach($listaProductos as $producto) {?>

<div class="col-md-3 m-4">

<div class="card h-100" style="max-width: 18rem;">
  <img class="card-img-top" src="./img/<?php echo $producto['imagen']; ?>" alt="">
  <div class="card-body">
    <h5 class="card-title text-center"><?php echo $producto['nombre']; ?></h5>
  </div>
</div>
</div>

<?php }?>


<?php include("template/pie.php"); ?>