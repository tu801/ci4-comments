<?php namespace Modules\Comments\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class Comment extends Controller
{
	protected $helpers = ['alerts', 'text'];

	public function __construct()
	{		
		// Preload the model & config
	}
	
	// Displays comment form
	public function index()
	{
		//code here
        exit('Comment here');
	}
	
}
