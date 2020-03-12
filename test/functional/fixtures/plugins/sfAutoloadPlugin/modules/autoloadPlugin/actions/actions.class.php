<?php

class autoloadPluginActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];
  public function executeIndex()
  {
    $this->lib1 = myLibClass::ping();
    $this->lib2 = myAppsFrontendLibClass::ping();
    $this->lib3 = myPluginsSfAutoloadPluginModulesAutoloadPluginLibClass::ping();
  }
}
