<?php namespace Modules\Comments\Config;

use CodeIgniter\Config\BaseConfig;

class Comment extends BaseConfig
{
	//Custom comment config if needed

	// Layouts to use for general access and for administration
	public $layouts = [
		'public' => 'Modules\Comments\Views\layout',
		'manage' => 'Modules\Comments\Views\layout',
	];

	// Views to display for each function
	public $views = [];

}
