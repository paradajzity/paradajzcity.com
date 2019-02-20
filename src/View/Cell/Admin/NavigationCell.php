<?php
namespace App\View\Cell\Admin;

use Cake\View\Cell;

class NavigationCell extends Cell
{
	
	public function side()
    {
		$nav=array(
			'divider' => true,
			['active_element' => [
				'text' => __('Dashboard'),
				'icon_class' => 'fas fa-fw fa-tachometer-alt',
				'link' => ['controller' => 'AdminPages', 'action' => 'dashboard'],
				'show' => true
			]],
			['heading' => [
				'icon_class' => '',
				'text' => __('Admin settings'),
				'show' => $this->checkUserRestriction(['admin', 'superadmin'])
			]],
			['active_element' => [
				'text' => __('Users'),
				'icon_class' => 'fas fa-fw fa-tachometer-alt',
				'link' => ['controller' => 'Users', 'action' => 'index'],
				'show' => $this->checkUserRestriction(['admin', 'superadmin'])
			]],
			
		);

		$this->set('nav', $nav);
    }
	
	public function top()
    {
		// display name
		if($this->request->session()->read('Auth.User.display_name')!='') {
			$this->set('display_name', $this->request->session()->read('Auth.User.display_name'));
		} else {
			$this->set('display_name', $this->request->session()->read('Auth.User.username'));
		}
    }
	
	public function logout()
    {
    }
	
	private function checkUserRestriction($priority, $return_value=true){
		$return = false;
		// array input
		if(is_array($priority)){
			foreach($priority as $value) {
				if($this->request->session()->read('Auth.User.priority') == $value){
					$return = $return_value;
				}
			}
		// string input
		} elseif(is_string($priority)) {
			if($this->request->session()->read('Auth.User.priority') == $priority){
				$return = $return_value;
			}
		} else {
			//debug('Paradajz');
		}
		
		return $return;
	}
}