<?php


class Mariages extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mariages_model');
        $this->load->helper('url_helper');
    }


    public function view($id = NULL)
    {
        $data['news_item'] = $this->mariages_model->get_mariages($id);
        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('register', $data);
        $this->load->view('templates/footer');
    }

    public function index()
    {
        $data['mariages'] = $this->mariages_model->get_mariages();
        $this->load->view('index', $data);
    }

    public function candidat()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');


        $this->form_validation->set_rules('nom', 'Title', 'required');
        $this->form_validation->set_rules('sexe', 'Text', 'required');


        if ($this->form_validation->run() === FALSE) {
            $data['candidats'] = $this->mariages_model->get_candidats();
            $this->load->view('candidat', $data);
        } else {
            $this->mariages_model->set_candidat();
            $data['candidats'] = $this->mariages_model->get_candidats();
            $this->load->view('candidat', $data);
        }
    }

    public function nouveau()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['hommes'] = $this->mariages_model->get_candidats('M');
        $data['femmes'] = $this->mariages_model->get_candidats('F');


        $this->form_validation->set_rules('date', 'Date de mariage', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('nouveau',$data);
        } else {
            $this->mariages_model->set_mariage();
            $this->index();
        }
    }

}