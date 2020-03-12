<?php

/**
 * configSecurityIsSecure actions.
 *
 * @package    project
 * @subpackage configSecurityIsSecure
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class configSecurityIsSecureActions extends sfActions
{
  protected $security = [ 'all' => ['is_secure' => true, 'credentials' => ['user']]];

  public function executeIndex()
  {
  }
}
