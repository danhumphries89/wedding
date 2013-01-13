<?php get_header(); ?>

<section class="main_section">
	<div class="main_items">
		<?php 

			$page_query = new WP_Query( array( 'post_type'=>'page' ));
			while( $page_query->have_posts() ) : $page_query->the_post(); 
		?>
		<div id="page<?php echo get_the_ID(); ?>" class="page">
			<header class="page_header">
				<h2><?php the_title(); ?></h2>
			</header>
			<section class="page_content">
				<?php echo the_content(); ?>
			</section>
			<section class="page_posts">
				<?php
					$page_custom_fields = get_post_meta(get_the_ID());
					$assigned_posts = $page_custom_fields[assigned_posts][0];

					if($assigned_posts != "") :
						$post_query = new WP_Query( array( 'post_type'=>'post', 'category_name'=>$assigned_posts, 'orderby'=>'title' ));
						while( $post_query->have_posts() ) : $post_query->the_post();
				?>
					<header class="post_header">
						<?php $post_custom_fields = get_post_meta( get_the_ID() ); ?>
						<h3><?php the_title(); ?></h3>
						<div class="price_block">
							<span class="price"><?php echo $post_custom_fields[price][0]; ?></span>
							<span class="sub_price"><?php echo $post_custom_fields[price_sub][0]; ?></span>
						</div>
					</header>
					<section class="post_content">
						<?php the_content(); ?>
					</section>
					<section class="post_address">
						<?php 
							$address = explode(",", $post_custom_fields[address][0]);
							foreach($address as $key=>$address_line) : ?>
						<span><?php echo trim($address_line); ?></span>
						<?php endforeach; ?>
					</section>
				<?php 
						wp_reset_query(); 
						wp_reset_postdata(); 
						endwhile; 
					endif;
				?>
			</section>
		</div>
		<?php endwhile; ?>
	</div>
</section>
	
<?php get_footer(); ?>