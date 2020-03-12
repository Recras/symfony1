<?php

/**
 * assetInclusion actions.
 *
 * @package    project
 * @subpackage assetInclusion
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class assetInclusionActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];

  public function executeIndex()
  {
  }
}
