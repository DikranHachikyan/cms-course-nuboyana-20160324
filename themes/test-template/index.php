<?php get_header();?>
   <div style="display:inline-block">
    <ul>
    <?php
        if( have_posts()):
            while(have_posts()): the_post();
                $link_name = get_the_title();
                $link_url  = get_the_permalink();
                get_template_part('partials/list','recent');    
            endwhile;
        endif;
    ?>
    </ul>   
   </div>
  <div style="display:inline-block">
      <ul>
          <?php
            $args = array(
                'post_type'=>'post',
                'post_status'=>'publish',
                'meta_key'=>'visitors',
                'orderby'=>'title',
                'order'=>'DESC',
                'ignore_sticky_posts'=>true
            );
          
            $c_query = new WP_Query($args);
          
            if( $c_query->have_posts() ):
                while($c_query->have_posts()): $c_query->the_post();
           ?>
           <li><a href="<?php the_permalink();?>"><?php the_title();?>   (<?php echo get_post_meta(get_the_ID(), 'visitors',true);?>)</a></li>
           <?php       
                endwhile;
            endif;
            wp_reset_postdata();
          ?>
      </ul>
  </div>    
<?php
    get_footer();