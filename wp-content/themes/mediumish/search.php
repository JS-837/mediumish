    <!-- include header -->
    <?php get_header(); ?>
    <!-- !body tag opened in header -->



        
    <?php

        // The loop
        // if posts exists
        if( have_posts() ){
            while( have_posts() ){
                the_post();

                // args(filepath, type)
                // with only first arg, it looks for "content.php"
                // with both args, it looks for hyphenated version; "content-article.php"
                get_template_part( 'template-parts/content', 'archive');

                // tons of things you can pull out. See documentation
            }
        }
    
    ?>


    <!-- incluide footer -->
    <?php get_footer(); ?>
</body>
</html>