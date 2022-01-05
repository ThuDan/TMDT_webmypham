<?php get_header(); ?>
	<div id="content">
		<div class="product-box page-category">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 ">
                    <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?> 
							<?php setpostview(get_the_ID()); ?>
                                <h1 class='single-title'><?php the_title(); ?></h1>
                                <div class="meta-single">
                                    <span>Tác giả: <strong><?php the_author(); ?></strong></span>
                                    <span>Chuyên mục: <?php the_category(', '); ?></span>
									<span>Lượt xem: <?php echo getpostviews(get_the_ID()); ?></span>
                                </div>
								<div class="single-content">
									<?php the_content(); ?>
								</div>
								<div class="tag-single">
									<?php the_tags(''); ?>
								</div>
								<div class="comment-facebook">
									<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
								</div>
								<div class="related-post">
								<?php
									$categories = get_the_category(get_the_ID());
									if ($categories) 
									{
										$category_ids = array();
										foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
								
										$args=array(
											'category__in' => $category_ids,
											'post__not_in' => array(get_the_ID()),
											'showposts'=>5, // Số bài viết bạn muốn hiển thị.
										);
										$my_query = new wp_query($args);
										if( $my_query->have_posts() ) 
										{
											echo '<h3>Bài viết liên quan</h3>';
											while ($my_query->have_posts())
											{
												$my_query->the_post();
												?>
												<div class="list-news">
													<div class="row">
														<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
														<a href="<?php the_permalink(); ?>">
															<?php the_post_thumbnail('full'); ?>
														</a>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
															<h4>
																<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
															</h4>
															<?php the_excerpt(); ?>
															<a href="<?php the_permalink(); ?>" class='read-more'>Xem chi tiết</a>
														</div>
													</div>
											</div>
												<?php
											}
										}
									}
								?>
								</div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 ">
						<div class="sidebar">
							<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="page-content-container" class="blog-single-post">


<?php while ( have_posts() ) : the_post(); ?>



	<?php if ( has_post_thumbnail( $post->ID ) ): ?>    

		<header class="page-entry-header" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'max-control' ); ?>');">
	
	<?php else: ?>    

		<header class="page-entry-header"> 

	<?php endif; ?>

		
	
	<?php if ( has_post_thumbnail( $post->ID ) ): ?>    

		</header><!-- .entry-header -->
	
	<?php else: ?>    

		</header><!-- .entry-header -->  

	<?php endif; ?>




<div class="entry-content-wrapper"> 
<div class="grid grid-pad page-full-contain">
	<div class="col-1-1">      
		<div id="primary" class="content-area shortcodes">
			<main id="main" class="site-main" role="main">
			
				<?php get_template_part( 'content', 'single' ); ?>
	
				
	
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
	
			<?php endwhile; // end of the loop. ?>
	
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
</div>
</section>
<?php get_footer(); ?>