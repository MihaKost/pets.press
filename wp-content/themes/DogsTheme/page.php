<?php get_header() ?>


<div class="main-text">
    <?php the_post(); ?>

    <section>
        <h2><?php the_title(); ?></h2>
        <div class=""><?php the_content()?></div>
    </section>
</div>


    <?php get_sidebar(); ?>

<?php get_footer() ?>