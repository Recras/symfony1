<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package    symfony
 * @subpackage log
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class sfCommandLogger extends sfConsoleLogger
{
  /**
   * Initializes this logger.
   *
   * @param sfEventDispatcher $dispatcher A sfEventDispatcher instance
   * @param array             $options    An array of options.
   */
  public function initialize(sfEventDispatcher $dispatcher, $options = array()): void
  {
    $dispatcher->connect('command.log', array($this, 'listenToLogEvent'));

    parent::initialize($dispatcher, $options);
  }

  /**
   * Listens to command.log events.
   *
   * @param sfEvent $event An sfEvent instance
   */
  public function listenToLogEvent(sfEvent $event)
  {
    $priority = isset($event['priority']) ? $event['priority'] : self::INFO;

    $prefix = '';
    if ('application.log' == $event->getName())
    {
      $subject  = $event->getSubject();
      $subject  = is_object($subject) ? get_class($subject) : (is_string($subject) ? $subject : 'main');

      $prefix = '>> '.$subject.' ';
    }

    foreach ($event->getParameters() as $key => $message)
    {
      if ('priority' === $key)
      {
        continue;
      }

      $this->log(sprintf('%s%s', $prefix, $message), $priority);
    }
  }
}
