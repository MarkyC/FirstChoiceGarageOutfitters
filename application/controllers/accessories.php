<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accesssories extends CI_Controller {

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
    public function index() {
        $this->buildView();
    }

    private function buildView($page = 'accessories/home') {
        $this->load->helper('url');

        $this->load->view('static/site_header');
        $this->load->view('static/header');
        $this->load->view('static/nav');
        $this->load->view($page);
        $this->load->view('static/footer');
        $this->load->view('static/site_footer');
    }

    public function hot_dawg($page = 'accessories/hot_dawg') {
        switch ($page) {
            default:
                $this->buildView($page);
        }
    }

    public function neon_sign($page = 'accessories/neon_sign') {
        switch ($page) {
            default:
                $this->buildView($page);
        }
    }

    public function table_sign($page = 'accessories/table_sign') {
        switch ($page) {
            default:
                $this->buildView($page);
        }
    }

    public function clock($page = 'accessories/clock') {
        switch ($page) {
            default:
                $this->buildView($page);
        }
    }

    public function chair($page = 'accessories/chair') {
        switch ($page) {
            default:
                $this->buildView($page);
        }
    }

    public function other($page = 'accessories/other') {
        switch ($page) {
            default:
                $this->buildView($page);
        }
    }
}