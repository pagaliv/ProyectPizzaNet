<?php
/* Ejemplo de plantilla que se mostrará dentro de la plantilla principal
  ob_start() activa el almacenamiento en buffer de la página. Mientras se
             almacena en el buffer no se produce salida alguna hacia el
             navegador del cliente
  luego viene el código html y/o php que especifica lo que debe aparecer en
     el cliente web
  ob_get_clean() obtiene el contenido del buffer (que se pasa a la variable
             $contenido) y elimina el contenido del buffer
  Por último se incluye la página que muestra la imagen común de la aplicación
    (en este caso base.php) la cual contiene una referencia a la variable
    $contenido que provocará que se muestre la salida del buffer dentro dicha
    página "base.php"
*/
 ?>
<?php ob_start(); 
if(isset($error)){
  echo "<p>Ha sucedido un error imprevisto: $error</p>";
  header('Location: index.php');
}
?>

  <h2>Estas son nuestras deliciosas pizzas</h2>

  <?php 
  //echo password_hash('Abc123??', PASSWORD_DEFAULT); 
  foreach($pizzas as $value) : ?>
    <details>
      <summary><?= $value['Pizza']?></summary>
      <?= $value['Descripción']?>
      <br>
      <img src="/img/<?=$value['Foto']?>" alt="Pizza <?= $value['Pizza']?>" style="width: 100px; height: 100px;">
    </details>
  <?php endforeach; ?>

  <!-- <a href="index.php?ctl=pedido">Quiero una Pizza</a> -->


 <?php $contenido = ob_get_clean() ?>

 <?php include 'base.php' ?>
