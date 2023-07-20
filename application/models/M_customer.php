<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_customer extends CI_Model
{
    // function m_data_laporan($id_map, $status, $tgl_start, $tgl_end)
    // function m_data_customer($nm_perum)
    // {
    //     $this->db->select('*');
    //     $this->db->from('customer');
    //     $this->db->Join('perumahan', 'perumahan.id_perum = customer.id_cus_perum');
    //     $this->db->where('perumahan.nm_perum', $nm_perum);
    //     $query = $this->db->get();
    //     return $query->result();
    // }
    function m_save_customer($data)
    {
        $result = $this->db->insert('customer', $data);
        return $result;
    }
    function filter_customer($nm_perum)
    {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->join('perumahan', 'perumahan.id_perum = customer.id_cus_perum');
        $this->db->where('perumahan.nm_perum', $nm_perum);
        
        // if ($tgl_filter != '') {
        //     $this->db->like('customer.tgl_event', $tgl_filter);
        // }

        $this->db->order_by('id_customer', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    
    function m_get_tgl($nm_perum)
    {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->join('perumahan', 'perumahan.id_perum = customer.id_cus_perum');
        $this->db->where('perumahan.nm_perum', $nm_perum);
        $this->db->group_by('tgl_event');
        $query = $this->db->get();
        return $query->result();
    }
}
