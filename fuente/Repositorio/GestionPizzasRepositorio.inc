<?php
// namespace pizzanet\app\Repositorio;
class GestionPizzasRepositorio
{
  public function anadirPizza(string $nom, string $descr, string $foto) : bool
  {
    $sql = "INSERT INTO pizza (nombre, descripcion, foto) VALUES (:nombre, :descr, :foto)";

    require_once __DIR__ . "../../../core/conexionBd.inc";
    try{
      $con = (new ConexionBd())->getConexion();
      $snt = $con->prepare($sql);
      $snt->bindValue(':nombre', $nom);
      $snt->bindValue(':descr', $descr);
      $snt->bindValue(':foto', $foto);
      return $snt->execute();
    }catch(PDOException $ex){
      // die(var_dump($ex));
      $mensError = $snt->errorInfo()[2];
      $codErrorSGBD = $snt->errorInfo()[1];
      throw new PDOException((string)$mensError, (int)$codErrorSGBD);
    }finally {
      unset($snt);
      unset($con);
    }
  }
}
?>