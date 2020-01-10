<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php wp_head(); ?>
</head>
<body <?php body_class( 'test' ); ?> >

<header>

<div class="container  ">

<div class="row  ">
   
    <div class="col d-flex align-items-center justify-content-between">
    <a href="<?php bloginfo( 'url' );?>">
    <img class=" logo img-fluid" src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png" alt="">
</a>
<?php wp_nav_menu( 
    array(
        'theme_location' => 'top-menu',
        'menu_class' => 'top-menu'  
    )
 ) ?>
    
    </div>
   

</div>


</div>

</header>
