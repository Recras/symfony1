<?php

/**
 * filter actions.
 *
 * @package    project
 * @subpackage filter
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class filterActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];

  public function executeIndex()
  {
    return $this->renderText('foo');
  }

  public function executeIndexWithForward()
  {
    $this->forward('filter', 'index');
  }
}
