<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<?php
global $base_url;
$path_to_theme = $base_url."/sites/all/themes/cnf/";
$path_to_file = $base_url."/sites/default/files/";

?>

<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
   <!-- Page Title -->
	<title>C&F Perfumery</title>

	<link rel="shortcut icon" href="<?php print $path_to_theme ?>images/favicon.png" />

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="description" content="C&F Perfumery">
	<meta name="author" content="SoapTheme">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Theme Styles -->
	<link rel="stylesheet" href="<?php print $path_to_theme ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php print $path_to_theme ?>css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php print $path_to_theme ?>css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/owl-carousel/owl.carousel.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/owl-carousel/owl.transitions.css" media="screen" />
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="<?php print $path_to_theme ?>components/magnific-popup/magnific-popup.css">

	<!-- Main Style -->
	<link id="main-style" rel="stylesheet" href="<?php print $path_to_theme ?>css/style.css">

	<!-- Custom Styles -->
	<link rel="stylesheet" href="<?php print $path_to_theme ?>css/custom.css">

	<!-- Responsive Styles -->
	<link rel="stylesheet" href="<?php print $path_to_theme ?>css/responsive.css">

	<!-- CSS for IE -->
	<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>css/ie.css" />
	<![endif]-->


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>
<!--<body class="single-post" <?php print $attributes;?>>-->
<?php 
	$arg0 = arg(0);
	if ($arg0 == 'contact' || $arg0 == 'career' || $arg0 == 'store-locator' || $arg0 == 'node') $class = 'single-post';
?>
<body class=<?php print $class ?> <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
