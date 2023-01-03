<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$app = 'frontend';
if (!include(__DIR__.'/../bootstrap/functional.php'))
{
  return;
}

$b = new sfTestBrowser();

$b->
  get('/format_test.js')->
  with('request')->begin()->
    isParameter('module', 'format')->
    isParameter('action', 'index')->
    isFormat('js')->
  end()->
  with('response')->begin()->
    isStatusCode(200)->
    isHeader('content-type', 'application/javascript')->
    matches('!/<body>/')->
    matches('/Some js headers/')->
    matches('/This is a js file/')->
  end()
;

$b->
  get('/format_test.css')->
  with('request')->begin()->
    isParameter('module', 'format')->
    isParameter('action', 'index')->
    isFormat('css')->
  end()->
  with('response')->begin()->
    isStatusCode(200)->
    isHeader('content-type', 'text/css; charset=utf-8')->
    matches('/This is a css file/')->
  end()
;

$b->
  get('/format_test')->
  with('request')->begin()->
    isParameter('module', 'format')->
    isParameter('action', 'index')->
    isFormat('html')->
  end()->
  with('response')->begin()->
    isStatusCode(200)->
    isHeader('content-type', 'text/html; charset=utf-8')->
    checkElement('body #content', 'This is an HTML file')->
  end()
;

$b->
  get('/format_test.xml')->
  with('request')->begin()->
    isParameter('module', 'format')->
    isParameter('action', 'index')->
    isFormat('xml')->
  end()->
  with('response')->begin()->
    isStatusCode(200)->
    isHeader('content-type', 'text/xml; charset=utf-8')->
    checkElement('sentences sentence:first', 'This is a XML file')->
  end()
;

$b->
  get('/format_test.foo')->
  with('request')->begin()->
    isParameter('module', 'format')->
    isParameter('action', 'index')->
    isFormat('foo')->
  end()->
  with('response')->begin()->
    isStatusCode(200)->
    isHeader('content-type', 'text/html; charset=utf-8')->
    isHeader('x-foo', 'true')->
    checkElement('body #content', 'This is an HTML file')->
  end()
;

$b->
  get('/format/js')->
  with('request')->begin()->
    isParameter('module', 'format')->
    isParameter('action', 'js')->
    isFormat('js')->
  end()->
  with('response')->begin()->
    isStatusCode(200)->
    isHeader('content-type', 'application/javascript')->
    matches('/A js file/')->
  end()
;

$b->
  getAndCheck('format', 'throwsException', null, 500)->
  throwsException('Exception', '/message/')
;
