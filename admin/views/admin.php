<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Vesta_Database
 * @author    Joren de Graaf <jorendegraaf@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.jorendegraaf.nl
 * @copyright 2014 Joren de Graaf
 */
?>

<div class="wrap">
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, ipsa nihil eius unde reprehenderit, tempora obcaecati, a nesciunt aspernatur et voluptate! Fuga qui modi aliquam iure sint dolor libero deserunt.
	<!-- @TODO: Provide markup for your options page here. -->
	<?php
	 foreach($this->get_posts() as $post){
	 	echo $post["post_title"]."<br/>\n";
	}?>
</div>
