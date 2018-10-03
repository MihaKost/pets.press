<?php get_header() ?>


<div class="main-text">
    <div class="welcome">
        <span>Aenean mturpis. Maecenas hendrerit masa laoreet iaculipede mnisl ulamcorper. </span>
    </div>

    <?php if(have_posts()):
            while(have_posts()): the_post(); ?>
                <section>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <h2><?php the_title(); ?></h2>
                    </a>
                    <?php the_date(); ?>
                    <div class=""><?php echo CFS()->get('intro') ?></div>
                </section>
            <?php endwhile; ?>


    <?php else: ?>
        Записей нет!
    <?php endif; ?>

    <div class="pagination">
        <?php the_posts_pagination() ?>
    </div>
</div>


    <?php get_sidebar(); ?>

<?php get_footer() ?>