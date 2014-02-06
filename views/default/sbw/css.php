<?php
/**
 *	Simple Blue White Theme 2014
 *	Author : Mahin Akbar | Team Webgalli
 *	Team Webgalli | Elgg developers and consultants
 *	Web	: http://webgalli.com
 *	Skype : 'team.webgalli'
 *	@package Simple Blue White theme
 *	Licence : GPLV2
 *	Copyright : Team Webgalli 2013-2015
 */
?>
body {
	font: 80%/1.4 "Lucida Grande", Verdana, sans-serif;
	background: #41b0dc;
}
.elgg-page-default {
	background: #41b0dc url(<?php echo IMG_URL;?>theme_pageback.gif) repeat-x left top;
}	
.elgg-page-topbar > .elgg-inner {
	padding: 0px;
	width: 1014px;
	margin: 0 auto;
}
.elgg-page-header {
	background: transparent;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	height: 60px;
}
.elgg-heading-site, .elgg-heading-site:hover {
	color: #4690d6;
	font-size: 1.8em;
}
.page_wrapper {
	width:1014px;
	background: url(<?php echo IMG_URL;?>theme_contentback.gif) no-repeat center top;
	margin: 0 auto;	
}

/* Spotlight */
.elgg-page-default .elgg-page-spotlight > .elgg-inner {
	margin:0 auto;
	background: #f4f4f4 url(<?php echo IMG_URL;?>spotlight_back.gif) repeat-x left top;
	min-height:60px;
	width:998px;
}
.elgg-page-spotlight .elgg-module-info  h3 {
	color: white;
	font-size: 1.25em;
	line-height: 1.2em;
	border-top: 1px solid #4690d6;
	padding: 3px 10px 5px 10px;
	margin: 0;
	border-bottom: 1px solid #cccccc;
	background: url(<?php echo IMG_URL;?>box_header.gif) repeat-x left top;	
}
.elgg-page-spotlight .elgg-module-info > .elgg-head {
	padding: 0px;
}
.elgg-page-spotlight .elgg-module-info > .elgg-body {
	padding: 10px 20px;
}

/* Footer */
.elgg-page-default .elgg-page-footer {
	width:1014px;
	background: #41b0dc url(<?php echo IMG_URL;?>theme_footer.gif) no-repeat center top;
	height: 48px;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	border: 0px;
	padding: 0 30px;
	width: 960px;
}	

/* Modules */
.elgg-module-widget {
	padding: 0px;
}
.elgg-module-widget > .elgg-head {
	background: url(<?php echo IMG_URL;?>box_header.gif) repeat-x left top;	
}
.elgg-module-widget > .elgg-head h3 {
	color: white;
}
.elgg-module-widget > .elgg-body {
	border-bottom: 1px solid #dedede;
}
.elgg-menu-widget > li {
	top: 2px;
}

.elgg-module-info > .elgg-head , .elgg-module-aside .elgg-head {
	background: url(<?php echo IMG_URL;?>box_header.gif) repeat-x left top;
}
.elgg-module-info > .elgg-head * , .elgg-module-aside > .elgg-head * {
	color: #fff;
}

.elgg-module-aside .elgg-head {
	padding: 3px 5px;
}

/* Topbar navigation */
.elgg-menu-item-tools {
    display:block;
	width:122px;
    height: 22px;
 	color:#fff;
	padding:2px 0 0 10px;
}
.elgg-menu-item-tools:hover {
	background: #095fa2;
	color:#fff;
}
.elgg-menu-site-default {
	position: relative;
	top: 4px;
	left: -10px;
	background: #f1f1f1;
	display: none;
	border-top: 1px solid #000000;
}
.elgg-menu-site-default li {
    padding:0px;
    border-bottom:1px solid #095fa2;
    border-left:1px solid #095fa2;
    border-right:1px solid #095fa2;	
	background: #fff;
	width:130px;
}
.elgg-menu-site-default > li > a {
	color: #555;
	padding: 3px 10px 0px;
	height: 20px;
}
.elgg-menu-site-default > .elgg-state-selected > a, .elgg-menu-site-default > li:hover > a {
	background: #095fa2;
	color: #fff;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}

/* Misc */
.profile .elgg-inner {
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	background: #fff;
}

.elgg-button-dropdown {
	color: white;
	background:#4690d6;
	border-color:#4690d6;
}

.elgg-search-header {
	position: relative;
	top:0px;
}
.elgg-search input[type=text] {
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}