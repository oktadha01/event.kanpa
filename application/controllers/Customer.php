<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public $M_customer;
    public $db;
    public $uri;
    var $template = 'templates/index';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_customer');
    }
    function event()
    {
        // $nm_perum = $this->uri->segment(3);
        $nm_perum = preg_replace("![^a-z0-9]+!i", " ", $this->uri->segment(3));

        $data['bread']          = 'Customer Event ' . $nm_perum;
        $data['tittle']          = 'Customer Event ' . $nm_perum;
        $data['data_customer'] = $this->M_customer->m_data_customer($nm_perum);
        // $data['script']        = 'page/customer/setting_event_js';
        $data['content']        = 'page/customer/customer';
        $this->load->view($this->template, $data);
    }
}
