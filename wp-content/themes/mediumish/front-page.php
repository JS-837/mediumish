    <!-- include header -->
    <?php get_header(); ?>
    <!-- !body tag opened in header -->

    <article>
    <h1><?php the_title(); ?></h1>
        
    <?php

        // The loop
        // if posts exists
        if( have_posts() ){
            while( have_posts() ){
                the_post();
                the_content();
                // tons of things you can pull out. See documentation
            }
        }
    
    ?>

    </article>


    <!-- incluide footer -->
    <?php get_footer(); ?>
</body>
</html>