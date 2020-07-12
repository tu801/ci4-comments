<?php

// Routes to Comment controller
$routes->group('comment', ['namespace' => '\Modules\Comments\Controllers'], function($routes)
{
	$routes->get('/',                'Comment::index');
});
