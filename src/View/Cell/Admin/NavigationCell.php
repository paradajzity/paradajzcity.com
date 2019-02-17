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
				'link' => ['controller' => 'AdminPages', 'action' => 'dashboard'],
				'show' => true
			]],
			'divider',
			['active_element' => [
				'text' => __('Users'),
				'icon_class' => 'fas fa-fw fa-tachometer-alt',
				'link' => ['controller' => 'Users', 'action' => 'index'],
				'show' => $this->checkUserRestriction(['admin', 'superadmin'])
			]],
			'divider'
		);

		$this->set('nav', $nav);
    }
	
	public function top()
    {
		if($this->request->session()->read('Auth.User.display_name')!='') {
			$this->set('display_name', $this->request->session()->read('Auth.User.display_name'));
		} else {
			$this->set('display_name', $this->request->session()->read('Auth.User.username'));
		}
    }
	
	public function logout()
    {
    }
	
	private function checkUserRestriction($priority){
		$return = false;
		if(is_array($priority)){
			foreach($priority as $value) {
				if($this->request->session()->read('Auth.User.priority') == $value){
					$return = true;
				}
			}
		} elseif(is_string($priority)) {
			if($this->request->session()->read('Auth.User.priority') == $priority){
				$return = true;
			}
		} else {
			//debug('Paradajz');
		}
		
		return $return;
	}
}