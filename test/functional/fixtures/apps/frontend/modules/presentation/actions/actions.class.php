<?php

/**
 * presentation actions.
 *
 * @package    project
 * @subpackage view
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class presentationActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];

  public function executeIndex()
  {
    $this->foo = $this->getController()->getPresentationFor('presentation', 'foo');
  }

  public function executeFoo()
  {
    $this->setLayout(false);
  }
}
