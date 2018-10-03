<?php if(is_active_sidebar('sidebar-right')): ?>
    <div class="sidebar sidebar-right">
        <?php dynamic_sidebar("sidebar-right"); ?>

        <div class="news_events">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title2.gif" alt="" width="258" height="21" /><br />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/latest.jpg" alt="" width="217" height="144" class="latest" /><br />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title3.gif" alt="" width="258" height="22" /><br />
            <div class="news">
                <div class="data">23 Jun</div>
                <p>Lorem ipsum dolor sit amet, sectetu adip scing varius interdum incid unt quis, libero. Aenean mturpis. Maecenas hen- drerit masa laoreet iaculipede mnisl ulamcorper. Tellus er sodales enim, in tin- cidunt mauris in odio. </p>
                <div class="more"><a href="#">read more</a></div>
            </div>
            <div class="news">
                <div class="data">29 Jun</div>
                <p>Massa ac laoreet iaculipede nisl ullam- corpermassa, ac consectetuer feipsum eget pede.  Proin nunc. Donec massa. Nulla pulvinar, nisl ac convallis nonummy, tellus eros sodales enim, in tincidunt mauris in odio.  massa ac laoreet iaculip- ede nisl ullamcorpermassa,consectetuer feipsum eget pede. Proin nunc. </p>
                <div class="more"><a href="#">read more</a></div>
            </div>
        </div>
    </div>

<?php endif; ?>