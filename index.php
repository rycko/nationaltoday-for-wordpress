
<?php get_header(); ?>

<section class="header">
		<div class="no-slide">
			<div class="slideshare">
				<div class="slide">
					<img class="thumb" src="img/hamburguer.png"/>
					<p class="date"><span>Thues</span> may 28</p>
					<article>
						<hgroup>

							<a href="#"><h2>National Hamburguer Day</h2></a>
							
							<p class="extract">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget enim felis. Curabitur eleifend erat quam, vel consequat erat semper a. Sed tincidunt elit velit. Morbi quis vehicula purus.</p>
							<p class="see-more"><a href="#">Read more</a></p>
						</hgroup>
					</article>

				</div>
				<div class="slide">
					<img class="thumb" src="img/hamburguer.png"/>
					<p class="date"><span>Thues</span> may 28</p>
					<article>
						<hgroup>

							<a href="#"><h2>National Hamburguer Day</h2></a>
							
							<p class="extract">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget enim felis. Curabitur eleifend erat quam, vel consequat erat semper a. Sed tincidunt elit velit. Morbi quis vehicula purus.</p>
							<p class="see-more"><a href="#">Read more</a></p>
						</hgroup>
					</article>
					
				</div>
				<div class="slide">
					<img class="thumb" src="img/hamburguer.png"/>
					<p class="date"><span>Thues</span> may 28</p>
					<article>
						<hgroup>

							<a href="#"><h2>National Hamburguer Day</h2></a>
							
							<p class="extract">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget enim felis. Curabitur eleifend erat quam, vel consequat erat semper a. Sed tincidunt elit velit. Morbi quis vehicula purus.</p>
							<p class="see-more"><a href="#">Read more</a></p>
						</hgroup>
					</article>
					
				</div>
			</div>
		</div>

	</section>
	<section class="content-gral">
		<h2 class="title-content-gral">CELEBRATE</h2>
		<nav class="menu-posts">
			<?php wp_nav_menu(
				array(
					'container'=>false,
					'items_wrap'=>'<ul>%3$s</ul>',
					'theme_location'=>'menu_posts'
				)
			);
			?>
		</nav>
		
		<div class="article-list">
			<div class="post-text">
				<div class="text">

					<p>
						Mauris venenatis condimentum purus, ac consectetur nulla dictum ultrices.
					</p>
				</div>
			</div>
			<div class="articles">
			<div class="article">
				<?php if (have_posts()):while(have_posts()):the_post();?>
				
					<div class="wrap-article">
					<img src="img/bolsas.png" class="thumb-post">
					<hgroup>
						<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
						<p class="holiday">Holiday: <span>Black Friday</span></p>
						<p class="date">Celebrate on: <span>Mon, Nov 4th, 2018</span></p>
					</hgroup>
				</div>
				<?php endwhile; else:?>
				<h1>No posts</h1>
				<?php endif; ?>
				
			</div>
			
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>