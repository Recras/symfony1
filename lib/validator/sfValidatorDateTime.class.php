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
  protected function configure(array $options = [], array $messages = []): void
  {
    parent::configure($options, $messages);

    $this->setOption('with_time', true);
  }
}
