<?php

/**
 * @file
 * Custom theme implementation to display the basic html structure of a single
 * Drupal page.
 */

?>
<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="ThemeFuse">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,600,700|PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
  </head>
  <body class="<?php print $classes ?>"<?php print $attributes ?>>
    <?php print $page_top ?>
    <?php print $page ?>
    <?php print $page_bottom ?>
  </body>
</html>
