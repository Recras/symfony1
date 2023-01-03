<?php

class frontendConfiguration extends sfApplicationConfiguration
{
  public function configure()
  {
    $this->dispatcher->connect('view.configure_format', array($this, 'configure_format_foo'));
    $this->dispatcher->connect('request.filter_parameters', array($this, 'filter_parameters'));
  }

  public function filter_parameters(sfEvent $event, $parameters)
  {
    return $parameters;
  }

  public function configure_format_foo(sfEvent $event)
  {
    if ('foo' != $event['format'])
    {
      return;
    }

    $event['response']->setHttpHeader('x-foo', 'true');
    $event->getSubject()->setExtension('.php');
  }
}
