<?php

/**
 * configSettingsMaxForwards actions.
 *
 * @package    project
 * @subpackage configSettingsMaxForwards
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class configSettingsMaxForwardsActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];

  public function executeSelfForward()
  {
    $this->forward('configSettingsMaxForwards', 'selfForward');
  }
}
