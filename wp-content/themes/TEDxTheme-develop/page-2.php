<?php
/*
Template Name: One column (Default)
*/
get_header('homepage2');
?>
  <!-- Custom CSS -->
  <link href='<?= $template_url; ?>/style.css' type='text/css' media='all' rel='stylesheet'>
  <div class="container contents spacing-top special-main-container">
    <section>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php 
    global $post;
    $post_slug=$post->post_name;
?>
		<!-- get announcements -->
		<div class="ted-section white-section">
			<div class="ted-section-title">
				Latest News
			</div>
			<?php
				$annid = 32;
				$annpost = get_post($annid);
				$announcements = apply_filters('the_content', $annpost->post_content);
				echo $announcements;
			?>
		</div>
		<!-- end get announcements -->
		<!-- speakers section -->
		<div class="ted-hspace"></div>
		<div class="ted-section-background ted-section-background-talks">
			<div class="ted-section ted-section-wt-bg">
				<div class="ted-section-title">
					Speakers
				</div>
				<?php
					$annid = 39;
					$annpost = get_post($annid);
					$announcements = apply_filters('the_content', $annpost->post_content);
					echo $announcements;
				?>
			</div>
		</div>
		<!-- end speakers section -->
		<div class="ted-hspace"></div>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </section>
  </div><!-- .container contents -->
<?php get_footer(); ?>
