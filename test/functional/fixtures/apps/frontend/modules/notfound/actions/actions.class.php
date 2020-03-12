<?php

/**
 * notfound actions.
 *
 * @package    project
 * @subpackage notfound
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class notfoundActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];

  public function executeIndex()
  {
    $this->getResponse()->setStatusCode(404);

    return $this->renderText('404');
  }
}
