<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
  <div class="container">
    <div class="logo">
<a href="<?php echo home_url(); ?>">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Logo.png" alt="Logo">
</a>

    </div>
    <nav class="main-nav">
      <ul>
        <li><a href="#benefices">Bénéfices</a></li>
        <li><a href="#etapes">Étapes</a></li>
        <li><a href="#avis">Avis</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <div class="header-cta">
      <a href="#contact" class="btn-contact">Contact</a>
    </div>
  </div>
</header>
