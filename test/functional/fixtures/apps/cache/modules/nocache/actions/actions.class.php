<?php

/**
 * nocache actions.
 *
 * @package    project
 * @subpackage nocache
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class nocacheActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];
  /**
   * Executes index action
   *
   */
  public function executeIndex()
  {
  }
}
