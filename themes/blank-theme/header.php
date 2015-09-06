<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name') ); ?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="wrapper">
    <div id="header">
      <h1>Header</h1>
    </div> <!-- end #header -->
    <div id="content-wrapper" class="container-fluid">
