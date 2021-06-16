<?php 
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>
<!doctype html>
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

<body <?php if (strpos($url,'/arhiva/') !== false) { echo 'id="bg"';} elseif (strpos($url,'/vijesti/') !== false) { echo 'id="bg"';}?>>
    <div class="wrap reartFestivalHero">
        <header>
            <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/reart%20twentynineteen/resources/logo-header.png" alt="" width="100px"></a></div>
            <a href="#" class="toggleButton">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="menu">
                <ul>
                    <li><a <?php if (strpos($url,'/o-nama/') !== false) { echo 'class="active"';} ?> href="o-nama">O nama</a></li>
                    <li><a <?php if (strpos($url,'/reart-festival/') !== false) { echo 'class="active"';} ?>href="reart-festival">ReArt Festival</a></li>
                    <li><a <?php if (strpos($url,'/projekti/') !== false) { echo 'class="active"';} ?> href="projekti">Projekti</a></li>
                    <li><a <?php if (strpos($url,'/kontakt/') !== false) { echo 'class="active"';} ?> href="kontakt">Kontakt</a></li>
                    <li><a <?php if (strpos($url,'/partneri/') !== false) { echo 'class="active"';} ?> href="partneri">Partneri</a></li>
                </ul>
            </div>
        </header>
    </div>


