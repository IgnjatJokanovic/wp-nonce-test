<?php

namespace Ignjat;

abstract class NonceAbstract
{
  public $action;
  public $name;

  public abstract function generateField();
  public abstract function verify();
}
