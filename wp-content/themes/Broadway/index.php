<?php get_header(); ?>

<section class="main_section">
	<div class="main_items">
		<?php 

			$counter = 0;
			$page_query = new WP_Query( array( 'post_type'=>'page', 'orderby'=>'menu_order', 'order'=>'ASC' ));
			while( $page_query->have_posts() ) : $page_query->the_post(); 

			$page_custom_fields = get_post_meta(get_the_ID());
		?>
		<div id="page<?php echo $counter; ?>" class="page">
			<header class="page_header">
				<h2><?php the_title(); ?></h2>
			</header>

			<section class="page_content"> 
				<?php if($page_custom_fields[countdown][0]) : ?>
				<div class="countdown">
					<?php 
						date_default_timezone_set('Europe/London');
						$countdown_date = strtotime($page_custom_fields[countdown][0]); 
						$current_date = strtotime("now");	
						$date_diff = $countdown_date - $current_date;
					?>
					<span class="number"><?php echo floor($date_diff/(60*60*24)) + 1;?></span>
					<span class="words">days to go...</span>
					<span class="date"><?php echo date("dS F Y", $countdown_date); ?></span>
				</div>
				<?php endif; ?>
				<?php echo the_content(); ?> </section>

			<?php
				$assigned_posts = $page_custom_fields[assigned_posts][0];
				if($assigned_posts != "") :
			?>
			<ul class="post-list">
			<?php
					$post_query = new WP_Query( array( 'post_type'=>'post', 'category_name'=>$assigned_posts, 'orderby'=>'title' ));
					while( $post_query->have_posts() ) : $post_query->the_post();
			?>

				<li class="page_posts">
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
				</li>
			<?php endwhile; endif; ?>
			</ul>
		</div>
		<?php $counter++; endwhile; ?>
	</div>
	<span class="page-break"></span>
</section>

<?php get_footer(); ?>