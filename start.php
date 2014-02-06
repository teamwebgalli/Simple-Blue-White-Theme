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
 
define('IMG_URL', elgg_get_site_url() . "mod/simple-blue-white/graphics/");

elgg_register_event_handler('init', 'system', 'sbw_init');

function sbw_init() {
	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');

	elgg_register_menu_item('topbar', array(
		'name' => 'tools',
		'href' => false,
		'text' => elgg_view('sbw/tools'),
		'priority' => 900,
	));	

	if(elgg_is_active_plugin('search')){
		elgg_unextend_view('page/elements/header', 'search/header');
		elgg_register_menu_item('topbar', array(
			'name' => 'search',
			'href' => false,
			'text' => elgg_view('search/header'),
			'priority' => 0,
			'section' => 'alt',
		));	
	}

	elgg_extend_view('css/elgg', 'sbw/css');
	elgg_extend_view('js/elgg', 'sbw/js');
}