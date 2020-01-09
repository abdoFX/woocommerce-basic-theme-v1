<?php get_header() ; ?>

<div id="hero" class=".img-fluid. max-width">
    <div class="container ">
        <div class="row d-flex align-items-center justify-content-center h-100">
        <h1>Welcom to My Shop </h1>
        </div>
        
    </div>
</div>


<div class="content">
    <div class="container">
    <?php if(have_posts(  )) : while(have_posts(  )) : the_post(  ); ?>
    <?php the_content() ; ?>
<?php endwhile; else : endif ?>
    </div>
    
</div>

<?php get_footer(  );   ?>