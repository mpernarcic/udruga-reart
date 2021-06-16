<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<section id="oNama" >
    <div id="home">
    <div class="textBox antiqueRuby" id="projektiTextBox">
	<div class="novostiBox">
		<?php 
		while(have_posts()): the_post(); ?>
		<div class="novostiBoxText" id="singlePage">
			<div class="headline">
				<h2><?php the_title(); ?></h2>
				<h5><?php the_date(); ?></h5>
			</div>
			<?php the_content(); ?>
			<div class="novostiBoxImg" id="singlePage">


				<?php 
				
				if( get_field('gallery') ) {
				}
					 else {
						if ( has_post_thumbnail() ) {
							the_post_thumbnail(); 
						}  
					}
				
					?>
					</div>
			<div class="vise"><a href="<?php echo home_url(); ?>/#oNama">
			Povratak</a></div>
		</div>

	</div>

	</div>
	<?php endwhile; ?>
	</div>
    </section>

<?php
get_footer();