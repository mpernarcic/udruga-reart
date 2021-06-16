<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<section id="oNama" class="archivePage moj">
            <div id="home">
                        <div class="textBox antiqueRuby " id="projektiTextBox">
						<div id="archivePageh2"><h2>Sve vijesti</h2></div>

                        <?php 
                            $query = new WP_Query( array( 'cat' => 2 ) );
                            while($query->have_posts()) : $query->the_post(); ?>

                        <div class="novostiBox" id="archivePage">
                            <div class="novostiBoxText" id="archivePage">
                            <div class="headline">
                                <h2><?php the_title(); ?></h2>
                                <h5><?php the_date(); ?></h5>
                            </div>

                            </div>
                            <div class="novostiBoxImg" id="archivePage"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
					             the_post_thumbnail('thumbnail');
						            } ?>
					     </a></div>
                         
                            <div class="vise" id="archivePage">
                                <a href="<?php the_permalink(); ?>">Pročitaj vijest</a>
                            </div>
							
                        </div>

                        <?php endwhile; ?>
						
						
                    </div>
					<div class="viseBtn"><a href="<?php echo home_url(); ?>/#oNama"><h3>
							Povratak</h3></a></div>
			</section>

<?php
get_footer();
