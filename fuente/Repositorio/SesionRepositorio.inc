<?php

class SesionRepositorio
{
  public function getSesion(string $ses) : ?array
  {
    $sql = "SELECT pass, rol FROM sesion WHERE sesion = :ses";
    $pass = null;
    $rol = null;

    require_once __DIR__ . "../../../core/conexionBd.inc";
    try {
      $con = (new ConexionBd())->getConexion();
      $snt = $con->prepare($sql);
      $snt->bindValue(':ses', $ses);
      $snt->execute();
      $snt->bindColumn('pass', $pass);
      $snt->bindColumn('rol', $rol);
      $snt->fetch(PDO::FETCH_ASSOC);
      if(is_null($pass)){
        return null;
      }else{
        return ['pass' => $pass, 'rol' => $rol];
      }
    } catch (PDOException $ex) {
      throw $ex;
    }finally {
      unset($snt);
      unset($con);
    }
  }
}
?>