<div class="wrap">
	<h2>Responsify WP</h2>
	<p>
		<a href="#use-on">Use on</a> | 
		<a href="#markup-pattern">Markup pattern</a> | 
		<a href="#image-sizes">Image sizes</a> | 
		<a href="#retina">Retina</a> | 
		<a href="#custom-media-queries">Custom media queries</a> | 
		<a href="#ignored-image-formats">Ignored image formats</a> | 
		<a href="#picturefill">Picturefill</a>
	</p>
	<form method="post" action="options.php">
		<script type="text/javascript">
			window.rwp = window.rwp || {};
			rwp.image_sizes = <?php echo json_encode(get_intermediate_image_sizes());?>;
			rwp.image_sizes.push('full');
			rwp.customMediaQueries = <?php echo json_encode(get_option('rwp_custom_media_queries'));?>;
		</script>
		<?php 
		settings_fields( 'responsify-wp-settings' );
		do_settings_sections( 'responsify-wp-settings' );
		
		include 'content_filter.php';
		
		include 'selected_element.php';

		include 'selected_sizes.php';
		
		include 'retina.php';
		
		include 'media_queries.php';

		include 'ignored_image_formats.php';
		
		include 'picturefill.php';
		?>
	</form>
</div>