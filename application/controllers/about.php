<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
        $this->load->helper('url');

		$this->load->view('static/site_header');
		$this->load->view('static/header');
		$this->load->view('static/nav');
		$this->load->view('static/about');
		$this->load->view('static/footer');
		$this->load->view('static/site_footer');
	}
}