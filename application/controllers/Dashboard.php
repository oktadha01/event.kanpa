<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public $M_dashboard;
    // public $db;
    var $template = 'templates/index';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_dashboard');
    }
    function index()
    {
        $data['bread']          = 'Dashboard';
        $data['tittle']          = 'Dashboard';
        $data['dashboard'] = $this->M_dashboard->m_data();
        // $data['script']        = 'page/setting_event/setting_event_js';
        $data['content']        = 'page/dashboard/dashboard';
        $this->load->view($this->template, $data);
    }
}
