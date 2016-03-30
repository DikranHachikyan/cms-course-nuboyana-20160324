<?php get_header();?>
<!--  main content -->
<div class="container-fluid">
	<div class="row">
        <div class="col-sm-9">
            <div class="row">
             <?php
                $topargs = array(
                    'post_type'=>'post',
                    'post_per_page'=>1,
                    'orderby'=>'date',
                    'order'=>'DESC',
                    'ignore_sticky_posts'=>true
                );
                
                $top_query = new WP_Query( $topargs );
               
                $last_post_id = 0;
                if( $top_query->have_posts()):
                    $top_query->the_post();
                    $last_post_id = get_the_ID();
                    get_template_part('partials/content','toparticle');
                endif;
                wp_reset_postdata();
             ?>
            </div> <!-- first row in left column -->
            <div class="row">
        <?php
            $next_args = array(
            'post_type'=>'post',
            'posts_per_page'=>3,
            'orderby'=>'date',
            'order'=>'DESC',
            'post__not_in'=>array( $last_post_id),
            'ignore_sticky_posts'=>true
            );

            $next_query = new WP_Query($next_args);
            if( $next_query->have_posts()):
                while( $next_query->have_posts()): $next_query->the_post();
                    get_template_part('partials/content', 'next-articles');
                endwhile;
            endif;
            wp_reset_postdata();
        ?>    
            </div><!--second row in left column -->
        </div> <!-- Left Column-->
        <?php get_sidebar(); ?>  <!--Right Column-->						 
    </div> <!-- main row -->			
</div> <!-- div class="container-fluid" -->
<?php
    get_footer();