<?php

/**
 * renderText actions.
 *
 * @package    project
 * @subpackage renderText
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class renderTextActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];

  public function executeIndex()
  {
    return $this->renderText('foo');
  }
}
