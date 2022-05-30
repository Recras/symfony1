<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * defaultActions module.
 *
 * @package    symfony
 * @subpackage action
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class defaultActions extends sfActions
{
  /**
   * @var array<string,array<string,bool|string|array<int, array<int, string>>>>
   *      array<string,array<string,bool>
   *          = 'is_secure' => false
   *      array<string,array<string,string>
   *          = 'credentials' => 'editObject'
   *      array<string,array<string,array>
   *          = 0 => 'viewObject'
   */

  protected array $security = ['all' => ['is_secure' => false]];
  /**
   * Congratulations page for creating an application
   *
   */
  public function executeIndex()
  {
  }

  /**
   * Congratulations page for creating a module
   *
   */
  public function executeModule()
  {
  }

  /**
   * Error page for page not found (404) error
   *
   */
  public function executeError404()
  {
  }

  /**
   * Warning page for restricted area - requires login
   *
   */
  public function executeSecure()
  {
  }

  /**
   * Warning page for restricted area - requires credentials
   *
   */
  public function executeLogin()
  {
  }

  /**
   * Module disabled in settings.yml
   *
   */
  public function executeDisabled()
  {
  }
}
