<?php

/**
 * configFiltersSimpleFilter actions.
 *
 * @package    project
 * @subpackage configFiltersSimpleFilter
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class configFiltersSimpleFilterActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];

  public function executeIndex()
  {
  }
}
