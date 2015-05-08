<?php
	function lily_excerpt_length( $length ) {
		return 1000;
	}
	add_filter( 'excerpt_length', 'lily_excerpt_length' );
?>