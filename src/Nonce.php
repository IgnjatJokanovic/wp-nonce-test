<?php

namespace Ignjat;

abstract class Nonce extends NonceAbstract
{

  public function __construct($action, $name)
  {
    $this->action = $action;
    $this->name = $name;
  }


  public function generateField()
  {
    return wp_nonce_field($this->action, $this->name);
  }
  public function verify()
  {
    return wp_verify_nonce($this->name, $this->action);
  }
}
