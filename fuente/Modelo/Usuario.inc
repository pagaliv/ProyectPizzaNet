<?php
class Usuario
{
  private string $usu = '';
  private string $pass = '';
  private string $grupo = '';

  public function __construct()
  {
    
  }

  /**
   * Get the value of usu
   *
   * @return string
   */
  public function getUsu(): string
  {
    return $this->usu;
  }

  /**
   * Set the value of usu
   *
   * @param string $usu
   *
   * @return self
   */
  public function setUsu(string $usu): self
  {
    $this->usu = $usu;

    return $this;
  }

  /**
   * Get the value of pass
   *
   * @return string
   */
  public function getPass(): string
  {
    return $this->pass;
  }

  /**
   * Set the value of pass
   *
   * @param string $pass
   *
   * @return self
   */
  public function setPass(string $pass): self
  {
    $this->pass = $pass;

    return $this;
  }

  /**
   * Get the value of grupo
   *
   * @return string
   */
  public function getGrupo(): string
  {
    return $this->grupo;
  }

  /**
   * Set the value of grupo
   *
   * @param string $grupo
   *
   * @return self
   */
  public function setGrupo(string $grupo): self
  {
    $this->grupo = $grupo;

    return $this;
  }
}
?>