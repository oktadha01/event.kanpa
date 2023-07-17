<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    // public $M_setting_event;
    // public $db;
    var $template = 'templates/index';

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_setting_event');
    }
    function index()
    {
        $data['bread']          = 'Dashboard';
        $data['tittle']          = 'Dashboard';
        // $data['get_perum'] = $this->M_setting_event->m_get_perum();
        // $data['script']        = 'page/setting_event/setting_event_js';
        $data['content']        = 'page/dashboard/dashboard';
        $this->load->view($this->template, $data);
    }
}
