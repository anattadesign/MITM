<?php
/*
Template Name: Home Page
*/

get_header(); ?>
<div class="home-page">
	<?php
		foreach ( get_field( 'layout' ) as $field ) {
			include locate_template( 'acf-layouts/home-' . $field[ 'acf_fc_layout' ] . '.php' );
		}
	?>
</div>

<?php get_footer(); ?>