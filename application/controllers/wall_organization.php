<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wall_Organization extends CI_Controller {

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

    private function buildView($page = 'wall_organization/home') {
        $this->load->helper('url');

        $this->load->view('static/site_header');
        $this->load->view('static/header');
        $this->load->view('static/nav');
        $this->load->view($page);
        $this->load->view('static/footer');
        $this->load->view('static/site_footer');
    }

    public function slat_wall($page = 'wall_organization/slat_wall') {
        switch ($page) {
            default:
                $this->buildView($page);
        }
    }

    public function tire_racks($page = 'wall_organization/tire_racks') {
        switch ($page) {
            default:
                $this->buildView($page);
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */