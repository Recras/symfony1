<?php

class FooClass
{
  public $bar = null, $initialized = false, $configured = false, $called = false, $arguments = array();

  public function __construct($arguments = array())
  {
    $this->arguments = $arguments;
  }

  static public function getInstance($arguments = array())
  {
    $obj = new self($arguments);
    $obj->called = true;

    return $obj;
  }

  public function initialize(): void
  {
    $this->initialized = true;
  }

  public function configure()
  {
    $this->configured = true;
  }

  public function setBar($value = null)
  {
    $this->bar = $value;
  }
}
