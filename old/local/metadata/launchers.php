<?php
return array(
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
);
