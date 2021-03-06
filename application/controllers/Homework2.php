<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homework2 extends CI_Controller {

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
		/*
		$config['hostname'] = "localhost";
		$config['username'] = "root";
		$config['password'] = "";
		$config['database'] = "hw2";
		$config['dbdriver'] = "mysql";
		$config['dbprefix'] = "";
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;

		$this->load->model('Model_name','',$config);
		*/


		$this->load->model("ArticleModel");
		$newArticles = $this->ArticleModel->getNewArticles();

		$this->load->view('hw2',
		Array("pageTitle" => "SDM Hw2",
		"newArticles" => $newArticles,
		));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */