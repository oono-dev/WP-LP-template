<?php
get_header();
?>

	<main>
		<div class="inner">
			<?php
			while ( have_posts() ) :
				the_post();
				the_title();
				the_content();
			endwhile;
			?>
		</div>
	</main>

<?php
get_footer();
