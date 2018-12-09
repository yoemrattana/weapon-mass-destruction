<?php
/*
    Template Name: Home Page
 * */
 get_header();
?>

<section class="featured-post-area no-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-12 pad-r">

				<div id="featured-slider" class="owl-carousel owl-theme featured-slider">
					<?php $arg = [
							'post_type' 	=> ['nuclear_weapons', 'radioactive'],
							'orderby' 		=> 'post_id', 
							'posts_per_page'=> 16, 
							'order' 		=> 'DESC'
						]; 
					?>
            		<?php $radioactives = new WP_Query($arg) ?>
            		<?php while ( $radioactives->have_posts() ) : $radioactives->the_post(); ?>
						<div class="item" style="background-image:url(<?php echo  get_field('image')['url']?>)">
							<div class="featured-post">
						 		<div class="post-content">
						 			<?php $post_type = get_post_type( get_the_ID() ) ?>
						 			<a class="post-cat" href="#"><?php echo pll__( $post_type ) ?></a>

						 			<h2 class="post-title title-extra-large">
						 				<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
						 			</h2>
						 			<?php $post_date = get_the_date( 'l F j, Y' ) ?>
								 	<span class="post-date"><?php echo $post_date ?></span>
						 		</div>
						 	</div><!--/ Featured post end -->
						</div><!-- Item 1 end -->
					<?php endwhile ?>
				</div><!-- Featured owl carousel end-->

			</div><!-- Col 7 end -->

			<div class="col-lg-5 col-md-12 pad-l right-slide-obj">
				<div class="row">
					<?php $arg = [
						'post_type' 	=> ['nuclear_weapons', 'radioactive'],
						'orderby' 		=> 'rand',
						'posts_per_page'=> 3]; 
					?>
            		<?php $radioactives = new WP_Query($arg) ?>
					<?php $i = 0 ?>
					<?php while ( $radioactives->have_posts() ) : $radioactives->the_post(); ?>
						<?php $post_type = get_post_type( get_the_ID() ) ?>
						<?php $post_date = get_the_date( 'l F j, Y' ) ?>
						<?php if ( $i == 0 ) : ?>
							<div class="col-md-12">
								<div class="post-overaly-style contentTop hot-post-top clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="" /></a>
									</div>
									<div class="post-content">
							 			<a class="post-cat" href="#"><?php echo pll__( $post_type ) ?></a>
							 			<h2 class="post-title title-large">
							 				<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
							 			</h2>
							 			<span class="post-date"><?php echo $post_date ?></span>
						 			</div><!-- Post content end -->
								</div><!-- Post Overaly end -->
							</div><!-- Col end -->
						<?php elseif ( $i == 1) : ?>
							<div class="col-md-6 pad-r-small">
								<div class="post-overaly-style contentTop hot-post-bottom clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="" /></a>
									</div>
									<div class="post-content">
							 			<a class="post-cat" href="#"><?php echo pll__( $post_type ) ?></a>
							 			<h2 class="post-title title-medium">
							 				<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
							 			</h2>
						 			</div><!-- Post content end -->
								</div><!-- Post Overaly end -->
							</div><!-- Col end -->
						<?php else : ?>	
							<div class="col-md-6 pad-l-small">
								<div class="post-overaly-style contentTop hot-post-bottom clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="" /></a>
									</div>
									<div class="post-content">
							 			<a class="post-cat" href="#"><?php echo pll__( $post_type ) ?></a>
							 			<h2 class="post-title title-medium">
							 				<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
							 			</h2>
						 			</div><!-- Post content end -->
								</div><!-- Post Overaly end -->
							</div><!-- Col end -->
						<?php endif ?>
					<?php $i++ ?>
					<?php endwhile ?>
				</div>
			</div><!-- Col 5 end -->

		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- Trending post end -->

<div class="gap-20"></div>

<section class="block-wrapper no-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<?php $arg = [
					'post_type' 	=> 'news_pt', 
					'orderby' 		=> 'post_id',
					'posts_per_page'=> 16, 
					'order' 		=> 'DESC']; 
				?>
            	<?php $news = new WP_Query($arg) ?>
				<div class="latest-news block color-blue">
					<h3 class="block-title"><span><?php echo pll__('News') ?></span></h3>
					<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
						<?php $count_nuclear = 0 ?>
						<?php while ( $news->have_posts() ) : $news->the_post(); ?>
						<?php if ( $count_nuclear % 2 == 0 ) : ?>	
						<div class="item">
						<?php endif ?>	
							<ul class="list-post">
								<li class="clearfix">
									<div class="post-block-style clearfix">
										<div class="post-thumb">
											<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo  get_field('image')['url']?>" alt="" /></a>
										</div>
										<!-- <a class="post-cat" href="#">Health</a> -->
										<div class="post-content">
								 			<h2 class="post-title title-medium">
								 				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								 			</h2>
								 			<div class="post-meta">
								 				<!-- <span class="post-author"><a href="#">John Doe</a></span> -->
								 				<?php $post_date = get_the_date( 'l F j, Y' ) ?>
								 				<span class="post-date"><?php echo $post_date ?></span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post Block style end -->
								</li><!-- Li end -->

								
								<?php if ( $count_nuclear % 2 == 0 ) : ?>
									<div class="gap-30"></div>
								<?php endif ?>	
								
						<?php if ( $count_nuclear % 2 != 0 ) : ?>
						</div>
						<?php endif ?>
						<?php $count_nuclear++ ?>
						<?php endwhile; ?>
						
					</div><!-- Latest News owl carousel end-->
				</div><!--- Latest news end -->

				<div class="gap-20"></div>

				
			</div><!-- Content Col end -->

			<!-- Sidebar -->

			<div class="col-lg-4 col-md-12">
				<div class="sidebar sidebar-right">
					<div class="widget">
						<h3 class="block-title"><span>Follow Us</span></h3>

						<div class="fb-page" 
							  data-href="https://www.facebook.com/facebook"
							  data-width="380" 
							  data-hide-cover="false"
							  data-show-facepile="false">
							  	
						 </div>

					</div><!-- Widget Social end -->

					<div class="widget color-default m-bottom-0">
						<h3 class="block-title"><span>Event</span></h3>

						<div id="post-slide" class="owl-carousel owl-theme post-slide">
							<div class="item">
								<div class="post-overaly-style text-center clearfix">
								   <div class="post-thumb">
								      <a href="#">
								         <img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/assets/images//news/tech/gadget1.jpg" alt="" />
								      </a>
								   </div><!-- Post thumb end -->

								   <div class="post-content">
								      <a class="post-cat" href="#">Gadgets</a>
								      <h2 class="post-title">
								         <a href="#">The best MacBook Pro alternatives in 2017 for Appl…</a>
								      </h2>
								      <div class="post-meta">
								         <span class="post-date">Feb 06, 2017</span>
								      </div>
								   </div><!-- Post content end -->
								</div><!-- Post Overaly Article 1 end -->

							</div><!-- Item 1 end -->

							<div class="item">

								<div class="post-overaly-style text-center clearfix">
								   <div class="post-thumb">
								      <a href="#">
								         <img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/assets/images//news/lifestyle/health5.jpg" alt="" />
								      </a>
								   </div><!-- Post thumb end -->

								   <div class="post-content">
								      <a class="post-cat" href="#">Health</a>
								      <h2 class="post-title">
								         <a href="#">Netcix cuts out the chill with an integrated perso…</a>
								      </h2>
								      <div class="post-meta">
								         <span class="post-date">Feb 06, 2017</span>
								      </div>
								   </div><!-- Post content end -->
								</div><!-- Post Overaly Article 3 end -->

							</div><!-- Item 2 end -->

						</div><!-- Post slide carousel end -->

					</div><!-- Trending news end -->

				</div><!-- Sidebar right end -->
			</div><!-- Sidebar Col end -->

		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- First block end -->

<section class="block-wrapper">
	<div class="container">
		<div class="row">

			<div class="col-lg-6">
				<div class="block color-dark-blue">
					<h3 class="block-title"><span><?php echo pll__('Photo') ?></span></h3>
					<?php

						$args = array(
						    'post_type' => 'attachment',
						    'numberposts' => 6,
						    'post_status' => null,
						    'post_parent' => null, // any parent
						    'post_mime_type' => 'image'
						    ); 
						 $attachments = get_posts($args);
						if ($attachments) {
						    foreach ($attachments as $post) {
						        setup_postdata($post);
						        //the_title();
						        the_attachment_link($post->ID, false);
						        
						        //the_excerpt();
						    }
						}

					?>
					<!-- <div id="gallery-photo" style="display:none;">
						<?php if ( $attachments ) : ?>
		            	<?php foreach ( $attachments as $post ) : ?>
		            		<?php setup_postdata($post); ?>
		            		<?php if ( $post ) : ?>
							<a href="http://unitegallery.net">
							<img alt="Lemon Slice"
							     src="<?php the_attachment_link($post->ID, false); ?>"
							     data-image="<?php the_attachment_link($post->ID, false); ?>"
							     data-description="This is a Lemon Slice"
							     style="display:none">
							</a>
						<?php endif ?>
						<?php endforeach ?>
						<?php endif ?>
					</div> -->

				</div><!-- Block end -->
			</div><!-- Travel Col end -->

			<div class="col-lg-6">
				<div class="block color-aqua">
					<h3 class="block-title"><span><?php echo pll__('Videos'); ?></span></h3>
					<div id="gallery-video" style="display:none;">
						<img alt="Youtube Video"
						 data-type="youtube"
						 data-videoid="A3PDXmYoF5U"
						 data-description="You can include youtube videos easily!">
						<img alt="Youtube Video"
						 data-type="youtube"
						 data-videoid="K_7k3fnxPq0"
						 data-description="You can include youtube videos easily!">

						 <img alt="Youtube Video"
						 data-type="youtube"
						 data-videoid="kNYFLn5N8Q"
						 data-description="You can include youtube videos easily!">

						 <img alt="Youtube Video"
						 data-type="youtube"
						 data-videoid="ITgDjfmOe1M"
						 data-description="You can include youtube videos easily!">	 
					</div>
				</div><!-- Block end -->
			</div><!-- Gadget Col end -->
		</div><!-- Row end -->
	</div><!-- Container end -->
</section><!-- 2nd block end -->

<div class="gap-20"></div>


<?php
  get_footer();
