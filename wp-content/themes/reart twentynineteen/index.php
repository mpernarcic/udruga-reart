<!DOCTYPE html>
<html lang="en">
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<title>Udruga ReArt</title>
    <link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/reart%20twentynineteen/style.css">
	<?php wp_head(); ?>
</head>

<body id="home">
    <div class="wrap homepage">
        <video src="<?php echo home_url(); ?>/wp-content/themes/reart%20twentynineteen/resources/video.mp4" loop autoplay></video>
        <header>
            <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/reart%20twentynineteen/resources/logo-header.png" alt="" width="105px"></a></div>
            <a href="#" class="toggleButton">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="menu">
                <ul>
                    <li><a href="o-nama">O nama</a></li>
                    <li><a href="reart-festival">ReArt Festival</a></li>
                    <li><a href="projekti">Projekti</a></li>
                    <li><a href="kontakt">Kontakt</a></li>
                    <li><a href="partneri">Partneri </a></li>
                </ul>
            </div>
        </header>
        <div class="txt-hero">
            <h2>Udruga ReArt</h2>
            <p>Udruga za umjetnost i stvaralaštvo ReArt djeluje u Osijeku i osnovana je s ciljem promicanja, poticanja, razvijanja i unapređenja razine umjetničkog stvaralaštva i kreativnosti.</p>
        </div>

        <!-- waves -->
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,224L48,197.3C96,171,192,117,288,90.7C384,64,480,64,576,90.7C672,117,768,171,864,160C960,149,1056,75,1152,58.7C1248,43,1344,85,1392,106.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    </div>

        <section id="oNama" class="tightSection">
            <div id="home"><div class="textBox pomjeriSLijeva"><h2>Novosti</h2></div>
    
                        <div class="textBox antiqueRuby" id="projektiTextBox">

                        <?php 
                            $query = new WP_Query( array( 'cat' => 2, 'posts_per_page' => 6) );
                            while($query->have_posts()) : $query->the_post(); ?>

                        <div class="novostiBox">
                            <div class="novostiBoxText">
                            <div class="headline">
                                <h2><?php the_title(); ?></h2>
                                <h5><?php the_date(); ?></h5>
                            </div>
                                <p><?php $excerpt = get_the_excerpt(); 
                                        $excerpt = substr( $excerpt, 0, 350 );
                                        $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                                        echo $result; ?>...
                                </p>
                            </div>
                            <div class="novostiBoxImg"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
					             the_post_thumbnail('thumbnail');
						            } ?>
					     </a></div>
                         
                            <div class="vise">
                                <a href="<?php the_permalink(); ?>">Pročitaj više</a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    
                    
                

                    <div class="viseBtn"><a href="arhiva"><h3>Sve vijesti</h3></a></div>

            </div>
        </section>

<?php
get_footer();

