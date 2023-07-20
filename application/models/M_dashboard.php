<?php

use Illuminate\Support\Arr;

defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    function m_data()
    {
        $this->db->select('*');
        $this->db->from('perumahan');
        $this->db->join('customer', ' customer.id_cus_perum = perumahan.id_perum');
        // $this->db->where('id_perum', '1');

        $this->db->group_by('nm_perum');
        // $this->db->order_by('tgl_event', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
}