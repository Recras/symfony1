<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfValidatorDateTime validates a date and a time. It also converts the input value to a valid date.
 *
 * @package    symfony
 * @subpackage validator
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class sfValidatorDateTime extends sfValidatorDate
{
  /**
   * @see sfValidatorDate
   */
  protected function configure($options = array(), $messages = array())
  {
    parent::configure($options, $messages);

    $this->setOption('with_time', true);
  }

  protected function cleanInputString($value)
  {
    try {
      $date = new DateTime($value);
    } catch (Exception $e) {
      $ex = new sfParseException(sprintf('Wrapped %s: %s', get_class($e), $e->getMessage()));
      $ex->setWrappedException($e);
      throw $ex;
    }
    return array($date, $date->format('YmdHis'));
  }
}
