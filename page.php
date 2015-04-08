<?php 

$page_id = get_queried_object_id('page_id');

?>

<?php get_header(); ?>

<div class="slide">
	<img src="<?php bloginfo('template_directory'); ?>/rsc/sad.jpg" alt="">
</div>
<div class="body">
	<div class="grid">
		<div class="row">
			<div class="slot-0-1-2">
				<iframe src="<?php echo get_post_meta($page_id, 'video_url', true); ?>" frameborder="0" allowfullscreen></iframe>

        <?php //TODO write function to DRY up ?>

			</div>
			<div class="slot-3-4-5">
				<h2>
          <?php echo get_post_meta($page_id, 'statement_header', true); ?>
				</h2>
				<div class="info">
					<h3>
            <?php echo get_post_meta($page_id, 'statement', true); ?>
					</h3>
					<h4>
						<a href="">Find out more</a>
					</h4>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="slot-6-7-8">
				<h2>
          <?php echo get_post_meta($page_id, 'blog_header', true); ?>
				</h2>
				<div class="blog">
          <?php 
            $args = array(
              'category_name' => 'test_category'
            );
            $category = 'test_category';
            $list_of_posts = new WP_Query( $args );
            if ( $list_of_posts->have_posts() ) : 
              while ( $list_of_posts->have_posts() ) : $list_of_posts->the_post();
          ?>
                <h3>
                  <?php the_title(); ?>
                </h3>
                <p>
                  <?php the_content(); ?>
                </p>
          <?php 
              endwhile;
            else : 
              get_template_part( 'content', 'none' );
            endif;
          ?>
				</div>
			</div>
      <?php get_sidebar(); // Tweets ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>
