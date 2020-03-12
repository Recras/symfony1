<?php

/**
 * configViewHasLayout actions.
 *
 * @package    project
 * @subpackage configViewHasLayout
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class configViewHasLayoutActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];

  public function executeWithoutLayout()
  {
  }
}
