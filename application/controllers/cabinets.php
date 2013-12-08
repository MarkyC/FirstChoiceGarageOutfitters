<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabinets extends CI_Controller {

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

    private function buildView($page = 'cabinets/home') {
        $this->load->helper('url');

        $this->load->view('static/site_header');
        $this->load->view('static/header');
        $this->load->view('static/nav');
        $this->load->view($page);
        $this->load->view('static/footer');
        $this->load->view('static/site_footer');
    }

    public function evolution($page = 'cabinets/evolution/home') {
        switch ($page) {

            case "locker":
                $this->buildView('cabinets/evolution/locker');
            break;

            case "base":
                $this->buildView('cabinets/evolution/base');
            break;

            case "wall":
                $this->buildView('cabinets/evolution/wall');
            break;

            case "accessories":
                $this->buildView('cabinets/evolution/accessories');
            break;

            default:
                $this->buildView($page);
        }
    }

    public function geneva($page = 'cabinets/geneva/home') {
        switch ($page) {

            case "locker":
                $this->buildView('cabinets/geneva/locker');
            break;

            case "base":
                $this->buildView('cabinets/geneva/base');
            break;

            case "service":
                $this->buildView('cabinets/geneva/service');
            break;

            case "wall":
                $this->buildView('cabinets/geneva/wall');
            break;

            case "shelf":
                $this->buildView('cabinets/geneva/shelf');
            break;

            case "bench":
                $this->buildView('cabinets/geneva/bench');
            break;

            default:
                $this->buildView($page);
        }
    }

    public function unique($page = 'cabinets/unique/home') {
        switch ($page) {

            case "graphic":
                $this->buildView('cabinets/unique/graphic');
            break;

            case "standard":
                $this->buildView('cabinets/unique/standard');
            break;

            case "accessories":
                $this->buildView('cabinets/unique/accessories');
            break;

            default:
                $this->buildView($page);
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */