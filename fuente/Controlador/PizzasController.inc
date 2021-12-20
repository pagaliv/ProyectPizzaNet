<?php
// use  pizzanet\app\Repositorio\;
class PizzasController
{
  public function anadir()
  {
    if(isset($_POST['ok'])){
      require_once __DIR__ . '../../Repositorio/GestionPizzasRepositorio.inc';
      try{
        $pizza = ((new GestionPizzasRepositorio())->anadirPizza($_POST['pizza'], $_POST['descripcion'], $_FILES['foto']['name']));
      }catch(PDOException $ex){
        if($ex->getCode() === 2627 && strstr($ex->getMessage(), 'UnombrePizza')){
          $error = "La pizza ya existe";
        }else{
          $error = $ex->getMessage();
        }
      }
    }
    require __DIR__ . '/../../app/plantillas/pizzas.php';
  }
}
?>