<?php

use Ignjat\Nonce;

class WPNonceTest extends \PHPUnit_Framework_TestCase
{

  public function test_wp_nonce_generate()
  {
    $nonce = new Nonce("login", "login-submit-nonce");
    $is_generated = strlen($nonce->generateField()) > 0;
    $this->assertEquals(1, $is_generated);
  }

  public function test_wp_nonce_verify()
  {
    $nonce = new Nonce("login", "login-submit-nonce");
    $this->assertEquals(1, $nonce->verify());
  }
}
