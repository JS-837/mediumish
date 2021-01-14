<div class="comments-header">
    <?php
        if(!have_comments()){
            echo "leave a comment";
        }else{
            echo get_comments_number() . "Comments";
        }
    ?>
</div>


<div class="comments">

    <!-- print out comments -->
    <?php 
        wp_list_comments(
            array(
                'avatar_size' => 120,
                'style' => 'div',
            )
        );
    ?>
</div>

<div class="comments-form">

    <?php
        // if current page/post allows comments
        if(comments_open()){
            // output form
            comment_form(
                array(
                    'class_form' => '',
                    'title_reply_before' => '<h2 id="some-id" class="some-class">',
                    'title_reply_after' => '</h2>'
                )
            );
        }

    ?>
</div>