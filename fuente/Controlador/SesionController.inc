<?php

class SesionController
{
  public function login()
  {
    if(isset($_POST['ok'])){
      // Llamar al repositorio
      require_once __DIR__ . '../../Repositorio/SesionRepositorio.inc';
      $ses = (new SesionRepositorio())->getSesion($_POST['usu']);
      if (is_null($ses) || !password_verify($_POST['pass'], $ses['pass'])) {
        $error = true;
      }else{
        $_SESSION['ses'] = $_POST['usu'];
        $_SESSION['rol'] = $ses['rol'];
        header('Location: index.php');
      }
    }
    require __DIR__ . '/../../app/plantillas/inicioSesion.php';
  }

  public function logout()
  {
    $_SESSION = [];
    session_destroy();
    session_unset();
    session_abort();
    header('Location: index.php');
  }
}
?>