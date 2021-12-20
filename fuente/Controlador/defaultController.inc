<?php
// Ejemplo de controlador para página home de la aplicación
// use \pizzanet\app\Respositorio\PizzaRepositorio;

class DefaultController
{ public function inicio()
  { 
    try {
      require_once __DIR__ . '../../Repositorio/PizzaRepositorio.inc';
      $pizzas = (new PizzaRepositorio())->getPizzas();
      require_once __DIR__ . '../../../app/plantillas/inicio.php';
    } catch (PDOException $ex) {
      $error = $ex->getMessage();
    }
  }
}
