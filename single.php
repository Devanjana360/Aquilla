<?php  

/** 
 * Main template 
 *  
 * @package aquila
 */

 get_header();

?>

<div class="content">
	<?php esc_html_e( 'single post', 'aquila' ); ?>
</div>

<?php

get_footer();
