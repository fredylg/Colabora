<?php
class Controller{
	public $templates = array();
	function __construct($url,$controllers){
		GLOBAL $DB,$SM,$CONFIG ;
		$this->DB = $DB;
		$this->SM = $SM;
		$this->url_params = explode('/', $url);
		foreach ($controllers as $subcontroller) {
			if(in_array($subcontroller, $this->url_params)){
				$SC = new $subcontroller($this->url_params);
				die('NO SUBCONTROLLER');
			}
		}
	//	$this->templates[] ='header.tpl';//only on index
		$this->templates[] ='pages/nav.tpl';
		$this->templates[] ='footer.tpl';
		
		//is a page...  //is static?
		foreach ($CONFIG->pages->static_page as $sp) {
			if($sp->url  == $this->url_params[0]){
				$this->templates[] = (string)$sp->template;
				$page_data = $this->DB->GetRow('tbl_page', ' id= :id',array('id' => (string)$sp->page_id));
				foreach ($page_data as $name => $value) {
					$this->SM->assign($name,$value);
				}
				return true;
			}
		}
		//fixcontent page ?
		$db_pages = $this->DB->GetTable('tbl_page', "page_deleted is null ");
		foreach ($db_pages as $page_data) {
			if($page_data['page_url']  == $this->url_params[0]){
				foreach ($page_data as $name => $value) {
					$this->SM->assign($name,$value);
					$this->templates[] = (string)$CONFIG->pages->db_page->template;
					return true;
				}
			}
		}
		//TODO listing pages ...
		die('URL NOT FOUND');
	}
	
	function template(){
		if(ismobile() == true){
			return implode('|mobile/', $this->templates);
		}else{
			return implode('|pages/', $this->templates);	
		}
	}

}
