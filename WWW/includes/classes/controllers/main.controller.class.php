<?php
class Controller{
	public $template='';
	function __construct($url,$controllers){
		GLOBAL $DB,$SM;
		$this->DB = $DB;
		$this->SM = $SM;
		$this->url_params = explode('/', $url);
		foreach ($controllers as $subcontroller) {
			if(in_array($subcontroller, $this->url_params)){
				$SC = new $subcontroller($this->url_params);
				die('NO SUBCONTROLLER');
			}
		}
		if($this->url_params[0] == '' )$this->url_params[0]='home';
		$this->template ='header.tpl|nav.tpl|';
		$this->template .= $this->localAction($this->url_params);
		return true;
	}
	function localAction(){
		$pages = $this->DB->GetTable('tbl_page', 'page_deleted is null');
		foreach ($pages as $page) {
			if($page['page_url']  == $this->url_params[0]){
				return $this->loadPage($page);
			}
		}
		//TODO -  DEAL WITH LISTING ITEMS
	}
	function loadPage($page){
		GLOBAL $config;
		foreach ($page as $name => $value) {
			$this->SM->assign($name,$value);
		}
		die(printr((array)$config->staticpages));
		$static_pages ;
		if($this->url_params[0] != 'home' ){
			return "staticpage.tpl";
		}else{
			return "homepage.tpl";
		}
			
	}
}
