<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!doctype html>
<html class="no-js" lang="<?php echo Localization::activeLanguage()?>">
<head>
<?php  Loader::element('header_required'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css>
<?php echo $html->css($view->getStylesheet('main.less'))?>


<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/css/build/theme.css" />
<!--  this gets moved to the main.less file on publishing     -->
<style media="screen">


</style>

</head>
