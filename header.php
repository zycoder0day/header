<?php
/**
 * The template for displaying the header
 *
 * @package Ave theme
 */

?><!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
<head <?php liquid_helper()->attr( 'head' ); ?>>
	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2386875165641434"
     crossorigin="anonymous"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
	<?php wp_head(); ?>

	<!-- Google Tag Manager -->
<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T3SQGC');</script> -->
<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?> <?php liquid_helper()->attr( 'body' ); ?>>
	<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3SQGC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->


	<?php liquid_action( 'before' ) ?>

	<div id="wrap">

		<?php
			liquid_action( 'before_header' );
			liquid_action( 'header' );
			liquid_action( 'after_header' );
		?>

		<main <?php liquid_helper()->attr( 'content' ); ?>>
			<?php liquid_action( 'before_content' ); ?>