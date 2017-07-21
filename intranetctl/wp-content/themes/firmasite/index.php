<?php
/**
 * @package firmasite
 */
global $firmasite_settings;

get_header();
 ?>


<div id ="slider-principal" class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-157573">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-157573">
					</li>
					<li data-slide-to="1" data-target="#carousel-157573">
					</li>
					<li data-slide-to="2" data-target="#carousel-157573">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src="http://lorempixel.com/output/sports-q-c-1600-500-1.jpg" />
						<div class="carousel-caption">
							<h4 style="background-color: black; opacity: 0.8; border-radius: 15px;">
								CONTRALORÍA MUNICIPAL TOMÁS LANDER
							</h4>
							<p style="background-color: black; opacity: 0.8; border-radius: 15px;">
								Nuestro ESlogan va aqu</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Second" src="wp-content/themes/firmasite/assets/img/pruebawordpress.png" />
						<div class="carousel-caption">
							<h4 style="background-color: black; opacity: 0.8; border-radius: 15px;">
								Curso Madres PProcesadoras en al COntraloria
							</h4>
							<p style="background-color: black; opacity: 0.8; border-radius: 15px;">
								La COntraloria MUnicipal Tom´s Lander estuvo impartiendo y comparitendo con las Madres Procesadoras</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src="http://lorempixel.com/output/sports-q-c-1600-500-3.jpg" />
						<div class="carousel-caption">
							<h4 style="background-color: black; opacity: 0.8; border-radius: 15px;">
								Third Thumbnail label
							</h4>
							<p style="background-color: black; opacity: 0.8; border-radius: 15px;">
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-157573" data-slide="prev"><span style="background-color: black; opacity: 0.8; border-radius: 15px; font-size: 26px;" class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-157573" data-slide="next"><span style="background-color: black; opacity: 0.8; border-radius: 15px; font-size: 26px;" class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>
</div>
<div style="background-color: rgb(235, 154, 20); width: 50%; margin-left: 0px; margin-bottom: 15px; margin-top: 15px; color: rgb(54, 46, 34 );" class="container">
	<h2 style="padding: auto, auto, auto, auto">Noticias Recientes...</h2 style="padding: auto, auto, auto, auto">
</div>
		<div id="primary" class="content-area clearfix <?php echo $firmasite_settings["layout_primary_class"]; ?>">
			
			<?php do_action( 'open_content' ); ?>
            <?php do_action( 'open_loop' ); ?>

			<?php if ( have_posts() ) : ?>


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Type-specific template for the content.
						   If you want to support Post-Format, i suggest customize loop files with switch()
						 */
						global $post;
						get_template_part( 'templates/loop', $post->post_type );
					?>

				<?php endwhile; ?>


			<?php else : ?>

				<?php get_template_part( 'templates/no-results', 'index' ); ?>

			<?php endif; ?>

			<?php do_action( 'close_loop' ); ?>
            <?php do_action( 'close_content' ); ?>

			
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>