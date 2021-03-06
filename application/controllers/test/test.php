<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	  
	public function index()
	{
		echo 'Hello World<br>';
		echo 'this file location: '.__FILE__;
	}
	
	public function replace()
	{
		$this->load->helper('url');
		$this->load->library('Dblib');
		
		$ctArray = $this->dblib->gethomepageping('ChinaTelecom');
		
		foreach ($ctArray as &$ctItem)
		{
			switch($ctItem["source"])
			{
				case "Sakura":
					$ctItem["source"] = "日本东京樱花机房(Sakura)";
					break;
				case "VR HK":
					$ctItem["source"] = "香港新世界机房(VR HK)";
					break;
				case "PCCW HK":
					$ctItem["source"] = "香港电讯盈科机房(PCCW HK)";
					break;
				case "EGI":
					$ctItem["source"] = "美国圣何塞EGI机房";
					break;
				case "Peer1":
					$ctItem["source"] = "美国洛杉矶Peer1机房(电信直连)";
					break;
				case "ServerCentral Tokyo":
					$ctItem["source"] = "日本东京Equinix机房ServerCentral(VPS.Net, VULTR)";
					break;
				case "OneAsiaHost":
					$ctItem["source"] = "新加坡OneAsiaHost机房";
					break;
				case "MultaCOM":
					$ctItem["source"] = "美国洛杉矶MultaCOM机房";
					break;
				case "SunnyVision":
					$ctItem["source"] = "香港新力讯机房(SunnyVision)";
					break;
				case "KDDI Tokyo":
					$ctItem["source"] = "日本东京KDDI机房(Linode)";
					break;
			}
		}
		unset($ctItem);
		
		var_dump($ctArray);
	}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */