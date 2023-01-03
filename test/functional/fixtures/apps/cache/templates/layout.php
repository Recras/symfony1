<!DOCTYPE html>
<html lang="en">
<head>

<?php echo include_http_metas() ?>
<?php echo include_metas() ?>

<?php echo include_title() ?>

<link rel="shortcut icon" href="/favicon.ico" />


    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
</head>
<body>

<?php echo $sf_content ?>

<div id="component_slot_content"><?php echo get_slot('component') ?></div>
<div id="partial_slot_content"><?php echo get_slot('partial') ?></div>
<div id="another_partial_slot_content"><?php echo get_slot('another_partial') ?></div>

</body>
</html>
