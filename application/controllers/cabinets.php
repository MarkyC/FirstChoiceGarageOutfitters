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

    public function evolution($page = 'cabinets/evolution/home') {
        switch ($page) {

            case "e300":
                $this->buildView('cabinets/evolution/e300');
            break;

            case "e350":
                $this->buildView('cabinets/evolution/e350');
            break;

            case "e400":
                $this->buildView('cabinets/evolution/e400');
            break;

            case "e450":
                $this->buildView('cabinets/evolution/e450');
            break;

            case "e500":
                $this->buildView('cabinets/evolution/e500');
            break;

            case "e510":
                $this->buildView('cabinets/evolution/e510');
            break;

            case "e520":
                $this->buildView('cabinets/evolution/e520');
            break;

            case "e600":
                $this->buildView('cabinets/evolution/e600');
            break;

            case "e840":
                $this->buildView('cabinets/evolution/e840');
            break;

            case "e900":
                $this->buildView('cabinets/evolution/e900');
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

    private function buildView($page = 'cabinets/home') {
        $this->load->helper('url');

        $this->load->view('static/site_header');
        $this->load->view('static/header');
        $this->load->view('static/nav');
        $this->load->view($page);
        $this->load->view('static/footer');
        $this->load->view('static/site_footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */