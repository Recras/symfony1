<?php

/**
 * configModuleDisabled actions.
 *
 * @package    project
 * @subpackage configModuleDisabled
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class configModuleDisabledActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];

  public function executeIndex()
  {
  }
}
