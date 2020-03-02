<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Autoload again for dev environments.
 *
 * @package    symfony
 * @subpackage autoload
 * @author     Kris Wallsmith <kris.wallsmith@symfony-project.com>
 * @version    SVN: $Id$
 */
class sfAutoloadAgain
{
  static protected
    $instance = null;

  /**
   * Returns the singleton autoloader.
   *
   * @return sfAutoloadAgain
   */
  static public function getInstance()
  {
    if (null === self::$instance)
    {
      self::$instance = new self();
    }

    return self::$instance;
  }

  /**
   * Constructor.
   */
  protected function __construct()
  {
  }

  /**
   * Reloads the autoloader.
   *
   * @param  string $class
   *
   * @return boolean
   */
  public function autoload($class)
  {
  }

  /**
   * Returns true if the autoloader is registered.
   *
   * @return boolean
   */
  public function isRegistered()
  {
    return true;
  }

  /**
   * Registers the autoloader function.
   */
  public function register()
  {
  }

  /**
   * Unregisters the autoloader function.
   */
  public function unregister()
  {
  }
}
