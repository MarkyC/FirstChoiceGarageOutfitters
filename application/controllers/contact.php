<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
        $this->load->helper('url');

		$this->load->view('static/site_header');
		$this->load->view('static/header');
		$this->load->view('static/nav');
		$this->load->view('contact/contact');
		$this->load->view('static/footer');
		$this->load->view('static/site_footer');
	}

    public function request_quote()
    {
        $this->load->helper('url');

        $this->load->view('static/site_header');
        $this->load->view('static/header');
        $this->load->view('static/nav');
        $this->load->view('contact/request_quote');
        $this->load->view('static/footer');
        $this->load->view('static/site_footer');
    }
}