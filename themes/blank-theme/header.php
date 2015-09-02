<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php wp_title( '-', true, 'right' ); echo esc_html( get_bloginfo('name') ); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="wrapper">
    <div id="header">
      <h1>Header</h1>
    </div> <!-- end #header -->
    <div id="content-wrapper">
