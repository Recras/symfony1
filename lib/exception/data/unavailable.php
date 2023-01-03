<!DOCTYPE html>

<?php $path = preg_replace('#/[^/]+\.php5?$#', '', isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : (isset($_SERVER['ORIG_SCRIPT_NAME']) ? $_SERVER['ORIG_SCRIPT_NAME'] : '')) ?>

<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo sfConfig::get('sf_charset', 'utf-8') ?>" />
<meta name="title" content="symfony project" />
<meta name="robots" content="index, follow" />
<meta name="description" content="symfony project" />
<meta name="keywords" content="symfony, project" />
<meta name="language" content="en" />
<title>symfony project</title>

<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $path ?>/sf/sf_default/css/screen.css" />

</head>
<body>
<div class="sfTContainer">
  <a title="symfony website" href="http://www.symfony-project.org/"><img alt="symfony PHP Framework" class="sfTLogo" src="<?php echo $path ?>/sf/sf_default/images/sfTLogo.png" height="39" width="186" /></a>
  <div class="sfTMessageContainer sfTAlert">
    <img alt="page not found" class="sfTMessageIcon" src="<?php echo $path ?>/sf/sf_default/images/icons/tools48.png" height="48" width="48" />
    <div class="sfTMessageWrap">
      <h1>Website Temporarily Unavailable</h1>
      <h5>Please try again in a few seconds...</h5>
    </div>
  </div>

  <dl class="sfTMessageInfo">
    <dt>What's next</dt>
    <dd>
      <ul class="sfTIconList">
        <li class="sfTReloadMessage"><a href="javascript:window.location.reload()">Try again: Reload Page</a></li>
      </ul>
    </dd>
  </dl>
</div>
</body>
</html>
