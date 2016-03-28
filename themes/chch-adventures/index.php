<?php get_header();?>
<!--  main content -->
<div class="container-fluid">
	<div class="row">
				
		
			<article id="last" class="col-sm-9 col-sm-push-3 col-md-push-0 bg-warning">
				<div class="row">
				<header class="col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-0">
					<img src="<?php echo get_template_directory_uri();?>/pics-large/pic2.jpg" alt="Millennium Monument" class="img-thumbnail img-responsive">
				</header>
				<div class="col-sm-6 col-sm-offset-1 col-md-8 col-md-offset-0">
					<section>
						<h3>Millenium Monument <span class="glyphicon glyphicon-star"></span></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti tempora repellendus animi enim
						 molestias maxime at cum ipsam est neque voluptas explicabo nihil dignissimos provident, 
						 tempore mollitia, nisi accusamus illo.
						</p>
					</section>
					<footer>
						<a href="#" class="btn btn-primary">Read More</a>
					</footer>				
				</div>

				</div> <!--  inner row last article -->
			</article>
<?php get_sidebar(); ?>   
    </div> <!-- div class row (first) -->			
    
  
        <!-- first article -->
        <article class="col-sm-3 col-sm-offset-3 col-md-offset-0">
            <header>
                <img src="<?php echo get_template_directory_uri();?>/pics-large/pic4.jpg" alt="Avon River" class="img-responsive" >
            </header>
            <section>
                <h3>Avon River <span class="glyphicon glyphicon-star"></span></h3>
                <p>Ipsam doloremque, est qui, officiis quaerat quia maxime. Ducimus autem doloribus enim. Hic inventore
                 repudiandae officia iste ipsa, laborum sapiente qui. Adipisci facilis libero illum, illo esse 
                 reiciendis consequuntur perferendis.
                </p>
            </section>
            <footer>
                <a href="#" class="btn btn-default">Read More</a>
            </footer>
        </article>
        <!--  second article -->
        <article class="col-sm-3">
            <header>
                <img src="<?php echo get_template_directory_uri();?>/pics-large/pic1.jpg" alt="City Center" class="img-responsive" >
            </header>
            <section>
                <h3>City Center <span class="glyphicon glyphicon-star"></span></h3>
                <p>A deserunt reprehenderit nam ex aliquam maxime sint eius, cupiditate rem, fuga eos eum, voluptatibus 
                quod velit error. Recusandae labore itaque veritatis ab a deserunt, blanditiis ducimus facere earum 
                explicabo.
                </p>
            </section>
            <footer>
                <a href="#" class="btn btn-default">Read More</a>
            </footer>
        </article>
        <!-- third article -->
        <article class="col-sm-3">
				<header>
					<img src="<?php echo get_template_directory_uri();?>/pics-large/pic3.jpg" alt="Tourist Attraction" class="img-responsive" >
				</header>
				<section>
					<h3>Tourist Attractions <span class="glyphicon glyphicon-star"></span></h3>
					<p>Architecto id natus harum molestiae inventore eveniet dolore in cum provident, assumenda corporis 
					laudantium tenetur libero soluta possimus nulla. Adipisci facere soluta dolore praesentium veniam
					 quae dicta consequuntur placeat officia.
					</p>
				</section>
				<footer>
					<a href="#" class="btn btn-default">Read More</a>
				</footer>
			</article>
   

</div> <!-- div class="container-fluid" -->
<?php
    get_footer();