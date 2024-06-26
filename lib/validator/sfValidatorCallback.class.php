<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfValidatorCallback validates an input value if the given callback does not throw a sfValidatorError.
 *
 * @package    symfony
 * @subpackage validator
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class sfValidatorCallback extends sfValidatorBase
{
  /**
   * Configures the current validator.
   *
   * Available options:
   *
   *  * callback:  A valid PHP callback (required)
   *  * arguments: An array of arguments to pass to the callback
   *
   * @param array $options    An array of options
   * @param array $messages   An array of error messages
   *
   * @see sfValidatorBase
   */
  protected function configure(array $options = [], array $messages = []): void
  {
    $this->addRequiredOption('callback');
    $this->addOption('arguments', array());

    $this->setOption('required', false);
  }

  /**
   * @see sfValidatorBase
   */
  protected function doClean($value): mixed
  {
    return call_user_func($this->getOption('callback'), $this, $value, $this->getOption('arguments'));
  }
}
