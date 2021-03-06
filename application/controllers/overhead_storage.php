<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Overhead_Storage extends CI_Controller {

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

    private function buildView($page = 'overhead_storage/home') {
        $this->load->helper('url');

        $this->load->view('static/site_header');
        $this->load->view('static/header');
        $this->load->view('static/nav');
        $this->load->view($page);
        $this->load->view('overhead_storage/expect');
        $this->load->view('static/footer');
        $this->load->view('static/site_footer');
    }

    public function monster_racks($page = 'overhead_storage/monster_racks') {
        switch ($page) {
            default:
                $this->buildView($page);
        }
    }

    public function slingger($page = 'overhead_storage/slingger') {
        switch ($page) {
            default:
                $this->buildView($page);
        }
    }

    public function heavy_lifts($page = 'overhead_storage/heavy_lifts') {
        switch ($page) {
            default:
                $this->buildView($page);
        }
    }
}