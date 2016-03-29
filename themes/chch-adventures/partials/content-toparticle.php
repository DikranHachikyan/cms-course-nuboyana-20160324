            <article id="last" class="col-sm-12 bg-warning">
				<div class="row">
				<header class="col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <?php
                        $thumb_post_id = $last_post_id;
                        get_template_part('partials/content','post-thumbnail');
                    ?>
				</header>
				<div class="col-sm-6 col-sm-offset-1 col-md-8 col-md-offset-0">
					<section>
						<h3><?php the_title();?><span class="glyphicon glyphicon-star"></span></h3>
						<?php the_excerpt();?>
					</section>
					<footer>
						<a href="<?php the_permalink();?>" class="btn btn-primary"><?php esc_html_e('Read More','chch');?></a>
					</footer>				
				</div>

				</div> <!--  inner row last article -->
			</article>   