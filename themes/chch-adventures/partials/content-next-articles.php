 <article class="col-sm-4">
            <header>
    <?php
      $thumb_post_id = get_the_ID();    
      get_template_part('partials/content','post-thumbnail');
    ?>
            </header>
            <section>
                <h3><?php the_title();?> <span class="glyphicon glyphicon-star"></span></h3>
                <?php the_excerpt();?>
            </section>
            <footer>
                <a href="<?php the_permalink();?>" class="btn btn-default"><?php esc_html_e('Read More','chch');?></a>
            </footer>
        </article>