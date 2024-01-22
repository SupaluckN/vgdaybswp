<?php
/**
 * Template Name: 
 * Description: 
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>

<div class="row">
<div class="col-md-12">
    <?php 
    
        $lastBlog = new WP_Query('type=post&posts_per_page=1');

        if($lastBlog->have_posts()):

        while($lastBlog->have_posts()): $lastBlog->the_post(); ?>

            <?php get_template_part('content', 'index'); ?>
    
        <?php endwhile;
        
        endif;
        ?>
</div><!-- /.col -->
    </div><!-- /.row -->


<?php
get_footer();