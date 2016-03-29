<?php if(has_post_thumbnail() ):?>
<?php  echo get_the_post_thumbnail( $thumb_post_id, array(0,0), array('class'=>'img-thumbnail img-responsive'));?>
<?php else:?>
   <img src="<?php echo get_template_directory_uri();?>/pics-large/pic2.jpg" alt="<?php the_title();?>" class="img-thumbnail img-responsive"> 
<?php endif;?>