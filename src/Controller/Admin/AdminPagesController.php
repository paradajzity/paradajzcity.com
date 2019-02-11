<?php
// src/Controller/AdminPages.php

namespace App\Controller\Admin;

use App\Controller\AppController;

class AdminPagesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
		
		//layout
		$this->viewBuilder()->setLayout('backend');
		$this->loadVar(['java' => 'default', 'css' => '']);
    }
	
	public function dashboard() {
		
	}
	
	public function isAuthorized($user)
	{
		return true;
	}
}