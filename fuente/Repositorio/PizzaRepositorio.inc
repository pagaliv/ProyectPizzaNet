<?php
// namespace pizzanet\app\Respositorio;

class PizzaRepositorio
{
  public function getPizzas() : array
  {
    $sql = "SELECT nombre as Pizza, descripcion as Descripción, foto as Foto FROM pizza";
    require_once __DIR__ . "../../../core/conexionBd.inc";
    try {
      $con = (new ConexionBd())->getConexion();
      $snt = $con->prepare($sql);
      $snt->execute();
      return $snt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
      throw $ex;
    }finally {
      unset($snt);
      $con = null;
    }
    
  }
}
?>