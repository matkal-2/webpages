<?php 

class Account extends Controller{
	public function index(){
		session_start();
		$visitor = $this->model('Visitor');
		if($visitor->isLoggedIn()){
			$user_info = $visitor->information($this->getManager());
		}
		else{
			header( 'Location: /mattias/home' ) ;
		}
		
		$this->view('global/account/index', ['user_info' => $user_info, 'color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function settings(){
		session_start();
		$updated['updated']=false;
		$visitor = $this->model('Visitor');
		if(!empty($_POST)){
			if(isset($_POST['account_setting'])){
				$updated = $visitor->accountSetting($this->getManager());
				$updated['updated'] = true;
			}
		}

		if($visitor->isLoggedIn()){
			$user_info = $visitor->information($this->getManager());
		}
		else{
			header( 'Location: /mattias/home' ) ;
		}

		$this->view('global/account/settings', ['updated'=> $updated, 'user_info' => $user_info, 'color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
	public function files(){
		session_start();
		$visitor = $this->model('Visitor');

		$this->view('global/account/files', ['color_theme' => $this->getColorTheme(), 'logged_in' => $visitor->isLoggedIn()]);
	}
}