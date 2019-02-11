<?php
namespace App\View\Cell\Admin;

use Cake\View\Cell;

class NavigationCell extends Cell
{
	
	public function side()
    {
		$nav=array(
			'divider',
			['active_element' => [
				'text' => __('Dashboard'),
				'icon_class' => 'fas fa-fw fa-tachometer-alt',
				'link' => ['controller' => 'AdminPages', 'action' => 'dashboard']
			]],
			'divider',
			['active_element' => [
				'text' => __('Paradajz'),
				'icon_class' => 'fas fa-fw fa-tachometer-alt',
				'link' => ['controller' => 'AdminPages', 'action' => 'dashboard']
			]],
			'divider'
		);

		$this->set('nav', $nav);
    }
	
	public function top()
    {
    }
	
	public function logout()
    {
    }
}