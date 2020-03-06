<?php

/**
 * configSecurityIsSecure actions.
 *
 * @package    project
 * @subpackage configSecurityIsSecure
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class configSecurityIsSecureActionActions extends sfActions
{
  protected $security = [ 'index' => ['is_secure' => true, 'credentials' => ['user']]];

  public function executeIndex()
  {
  }
}
