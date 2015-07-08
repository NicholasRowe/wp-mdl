<?php
/**
* The header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package wp_mdl
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,600' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="mdl-layout__container">

		<div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded is-small-screen">
