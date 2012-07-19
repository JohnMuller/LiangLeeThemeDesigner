<?php
/* LiangLeeThemeDesigner
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework
 * @subpackage LiangLeeThemeDesigner
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File css.php
 */
 
/*
 * Register Global Variables for Search border Color
 *
 * @access public
 */
global $liang_search_br;
global $liangsearch_br;
?>

/**********************************
Search plugin
***********************************/
.elgg-search-header {
	bottom: 5px;
	height: 23px;
	position: absolute;
	right: 0;
}
.elgg-search input[type=text] {
	width: 230px;
}
.elgg-search input[type=submit] {
	display: none;
}
.elgg-search input[type=text] {
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	
	border: 1px solid <?php echo $liangsearch_br; ?>;
	color: white;
	font-size: 12px;
	font-weight: bold;
	padding: 2px 4px 2px 26px;
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat 2px -934px;
}
.elgg-search input[type=text]:focus, .elgg-search input[type=text]:active {
	background-color: white;
	background-position: 2px -916px;
	border: 1px solid white;
	color: #0054A7;
}

.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
	color: #666666;
}

.search-highlight {
	background-color: #bbdaf7;
}
.search-highlight-color1 {
	background-color: #bbdaf7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #ccc;
}
.search-highlight-color5 {
	background-color: #4690d6;
}
