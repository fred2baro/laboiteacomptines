<?php
return array(
	'noviusos_appmanager' => 
	array(
		'name' => 'Applications manager',
		'namespace' => 'Nos\\Appmanager',
		'version' => '0.2',
		'provider' => 
		array(
			'name' => 'Novius OS',
		),
		'i18n_file' => 'noviusos_appmanager::metadata',
		'permission' => 
		array(
		),
		'launchers' => 
		array(
			'noviusos_appmanager' => 
			array(
				'name' => 'Applications manager',
				'action' => 
				array(
					'action' => 'nosTabs',
					'tab' => 
					array(
						'label' => 'Applications manager',
						'url' => 'admin/noviusos_appmanager/appmanager',
						'iconUrl' => 'static/apps/noviusos_appmanager/img/32/app-manager.png',
					),
				),
				'i18n_application' => 'noviusos_appmanager',
				'application' => 'noviusos_appmanager',
			),
		),
		'icons' => 
		array(
			64 => 'static/apps/noviusos_appmanager/img/64/app-manager.png',
			32 => 'static/apps/noviusos_appmanager/img/32/app-manager.png',
			16 => 'static/apps/noviusos_appmanager/img/16/app-manager.png',
		),
	),
	'noviusos_media' => 
	array(
		'name' => 'Media Centre',
		'namespace' => 'Nos\\Media',
		'version' => '0.1',
		'provider' => 
		array(
			'name' => 'Novius OS',
		),
		'permission' => 
		array(
		),
		'i18n_file' => 'noviusos_media::metadata',
		'launchers' => 
		array(
			'noviusos_media' => 
			array(
				'name' => 'Media Centre',
				'action' => 
				array(
					'action' => 'nosTabs',
					'tab' => 
					array(
						'url' => 'admin/noviusos_media/appdesk/index',
					),
				),
				'i18n_application' => 'noviusos_media',
				'application' => 'noviusos_media',
			),
		),
		'icons' => 
		array(
			64 => 'static/apps/noviusos_media/img/media-64.png',
			32 => 'static/apps/noviusos_media/img/media-32.png',
			16 => 'static/apps/noviusos_media/img/media-16.png',
		),
	),
	'noviusos_page' => 
	array(
		'name' => 'Webpages',
		'namespace' => 'Nos\\Page',
		'version' => '0.1',
		'provider' => 
		array(
			'name' => 'Novius OS 1',
		),
		'permission' => 
		array(
		),
		'i18n_file' => 'noviusos_page::metadata',
		'launchers' => 
		array(
			'noviusos_page' => 
			array(
				'name' => 'Webpages',
				'action' => 
				array(
					'action' => 'nosTabs',
					'tab' => 
					array(
						'url' => 'admin/noviusos_page/appdesk/index',
					),
				),
				'i18n_application' => 'noviusos_page',
				'application' => 'noviusos_page',
			),
		),
		'icons' => 
		array(
			64 => 'static/apps/noviusos_page/img/64/page.png',
			32 => 'static/apps/noviusos_page/img/32/page.png',
			16 => 'static/apps/noviusos_page/img/16/page.png',
		),
	),
	'noviusos_user' => 
	array(
		'name' => 'Users',
		'namespace' => 'Nos\\User',
		'version' => '0.1',
		'provider' => 
		array(
			'name' => 'Novius OS',
		),
		'permission' => 
		array(
		),
		'i18n_file' => 'noviusos_user::metadata',
		'launchers' => 
		array(
			'noviusos_user' => 
			array(
				'name' => 'Users',
				'url' => 'admin/noviusos_user/appdesk',
				'action' => 
				array(
					'action' => 'nosTabs',
					'tab' => 
					array(
						'url' => 'admin/noviusos_user/appdesk',
						'iconUrl' => 'static/apps/noviusos_user/img/32/user.png',
					),
				),
				'i18n_application' => 'noviusos_user',
				'application' => 'noviusos_user',
			),
			'noviusos_account' => 
			array(
				'name' => 'My account',
				'action' => 
				array(
					'action' => 'nosTabs',
					'tab' => 
					array(
						'label' => 'My account',
						'url' => 'admin/noviusos_user/account',
						'iconUrl' => 'static/apps/noviusos_user/img/32/myaccount.png',
					),
				),
				'icon' => 'static/apps/noviusos_user/img/64/myaccount.png',
				'application' => false,
				'i18n_application' => 'noviusos_user',
			),
		),
		'icons' => 
		array(
			64 => 'static/apps/noviusos_user/img/64/user.png',
			32 => 'static/apps/noviusos_user/img/32/user.png',
			16 => 'static/apps/noviusos_user/img/16/user.png',
		),
	),
	'noviusos_templates_basic' => 
	array(
		'name' => 'Novius OS default templates',
		'version' => 'chiba.2.2',
		'provider' => 
		array(
			'name' => 'Novius OS',
		),
		'namespace' => 'Nos\\Templates\\Basic',
		'i18n_file' => 'noviusos_templates_basic::metadata',
		'launchers' => 
		array(
		),
		'enhancers' => 
		array(
		),
		'templates' => 
		array(
			'noviusos_top_menu' => 
			array(
				'file' => 'noviusos_templates_basic::top_menu',
				'title' => 'Default template (top menu)',
				'cols' => 1,
				'rows' => 1,
				'layout' => 
				array(
					'content' => '0,0,1,1',
				),
				'module' => '',
				'i18n_application' => 'noviusos_templates_basic',
				'application' => 'noviusos_templates_basic',
			),
			'noviusos_left_menu' => 
			array(
				'file' => 'noviusos_templates_basic::left_menu',
				'title' => 'Default template (left menu)',
				'cols' => 1,
				'rows' => 1,
				'layout' => 
				array(
					'content' => '0,0,1,1',
				),
				'module' => '',
				'i18n_application' => 'noviusos_templates_basic',
				'application' => 'noviusos_templates_basic',
			),
		),
	),
);
