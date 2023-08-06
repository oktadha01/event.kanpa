<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends AUTH_Controller
{
    public $M_dashboard;
    var $template = 'templates/index';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_dashboard');
        $this->load->model('M_JalanSehat');
    }
    function index()
    {
        $data['userdata']        = $this->userdata;
        $data['bread']           = 'Dashboard';
        $data['tittle']          = 'Dashboard';
        $data['dashboard']       = $this->M_dashboard->m_data();
        $data['desa']            = $this->M_JalanSehat->get_desa();
        $data['grafik']          = $this->M_JalanSehat->getChart();
        $data['k_dewasa']        = $this->M_JalanSehat->k_dewasa();
        $data['keji_dewasa']     = $this->M_JalanSehat->ke_dewasa();
        $data['lainnya']         = $this->M_JalanSehat->la_dewasa();
        $data['k_anak']          = $this->M_JalanSehat->k_anak();
        $data['keji_anak']       = $this->M_JalanSehat->ke_anak();
        $data['lain_a']          = $this->M_JalanSehat->la_anak();
        $data['content']         = 'page/dashboard/dashboard';
        $this->load->view($this->template, $data);
    }
}