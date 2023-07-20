<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public $M_customer;
    public $db;
    public $uri;
    public $input;
    var $template = 'templates/index';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_customer');
    }
    function event()
    {
        $nm_perum = preg_replace("![^a-z0-9]+!i", " ", $this->uri->segment(3));
        $data['bread']          = 'Event ' . $nm_perum;
        $data['tittle']         = 'Event ' . $nm_perum;
        // $data['data_customer'] = $this->M_customer->m_data_customer($nm_perum );
        // $data['data_customer']  = $this->M_customer->filter_customer($nm_perum);
        $data['get_tgl']        = $this->M_customer->m_get_tgl($nm_perum);
        $data['script']        = 'page/customer/customer_js';
        $data['content']        = 'page/customer/customer';
        $this->load->view($this->template, $data);
    }
    function save_customer()
    {
        $nm_perum = $this->input->post('nm-perum');
        $sql = "SELECT *FROM perumahan WHERE nm_perum = '$nm_perum'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $id_perum = $row->id_perum;
            }
        }
        $tgl_event = $this->input->post('tgl-event');
        $nama = $this->input->post('nama');
        $no_hp = $this->input->post('no-hp');
        $alamat = $this->input->post('alamat');
        $data = array(
            'id_cus_perum' => $id_perum,
            'nama' => $nama,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'tgl_event' => $tgl_event,
        );
        $this->M_customer->m_save_customer($data);
    }
    function data_filter()
    {
        $nm_perum = $this->input->post('nm-perum');
        $tgl_filter = $this->input->post('tgl-filter');
        $no = 1;
        // echo $nm_perum;
        $sql = "SELECT *FROM perumahan, customer WHERE perumahan.id_perum = customer.id_cus_perum AND perumahan.nm_perum = '$nm_perum' ORDER BY tgl_event DESC, id_customer DESC";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                if ($tgl_filter == 'all') {
                    echo '<tr>';
                    echo '<td class="pl-23px">';
                    echo '    <p class="text-xs font-weight-bold mb-0">' . $no++ . '</p>';
                    echo '</td>';
                    echo '<td>';
                    echo '    <p class="text-xs font-weight-bold mb-0">' . $row->nama . '</p>';
                    echo '</td>';
                    echo '<td>';
                    echo '    <p class="text-xs text-secondary mb-0">' . $row->no_hp . '</p>';
                    echo '</td>';
                    echo '<td class="align-middle text-center text-sm">';
                    echo '    <p class="text-xs font-weight-bold mb-0">' . $row->alamat . '</p>';
                    echo '</td>';
                    echo '<td class="align-middle text-center text-sm">';
                    echo '    <p class="text-xs font-weight-bold mb-0">' . $row->tgl_event . '</p>';
                    echo '</td>';
                    echo '</tr>';
                } else if ($tgl_filter == $row->tgl_event) {
                    echo '<tr>';
                    echo '<td class="pl-23px">';
                    echo '    <p class="text-xs font-weight-bold mb-0">' . $no++ . '</p>';
                    echo '</td>';
                    echo '<td>';
                    echo '    <p class="text-xs font-weight-bold mb-0">' . $row->nama . '</p>';
                    echo '</td>';
                    echo '<td>';
                    echo '    <p class="text-xs text-secondary mb-0">' . $row->no_hp . '</p>';
                    echo '</td>';
                    echo '<td class="align-middle text-center text-sm">';
                    echo '    <p class="text-xs font-weight-bold mb-0">' . $row->alamat . '</p>';
                    echo '</td>';
                    echo '<td class="align-middle text-center text-sm">';
                    echo '    <p class="text-xs font-weight-bold mb-0">' . $row->tgl_event . '</p>';
                    echo '</td>';
                    echo '</tr>';
                }
            }

            // $sql = "SELECT *FROM perumahan, customer WHERE perumahan.id_perum = customer.id_cus_perum AND customer.tgl_event='$tgl_filter' perumahan.nm_perum = '$nm_perum'";
            // $query = $this->db->query($sql);
            // if ($query->num_rows() > 0) {
            //     foreach ($query->result() as $row) {
            //         $id_perum = $row->id_perum;
            //         echo $id_perum;
            //     }
            // }
        }
        // $output = '';
        // $tgl_filter = '';
        // $nm_perum = $this->input->post('nm-perum');
        // // $this->load->model('M_customer');
        // // if ($this->input->post('tgl-filter')) {
        // $tgl_filter = $this->input->post('tgl-filter');
        // // }
        // $data = $this->M_customer->filter_customer($nm_perum);
        // // $output .= '
        // // <div class="table-responsive">
        // //     <table class="table align-items-center mb-0">
        // //         <thead>
        // //                 <tr>
        // //                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
        // //                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAMA</th>
        // //                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NO HP</th>
        // //                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ALAMAT</th>
        // //                     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
        // //                     <th class="text-secondary opacity-7"></th>
        // //                 </tr>
        // //         </thead>
        // // ';

        // if ($data->num_rows() > 0) {
        //     $no = 1;
        //     foreach ($data->result() as $row) {
        //         $output .= '
        //     <tr>

        //     <td>' . $no++ . '</td>
        //     <td>' . $row->nama . '</td>
        //     <td>' . $row->no_hp . '</td>
        //     <td>' . $row->alamat . '</td>
        //     <td>' . $row->tgl_event . '</td>
        //     </tr>
        //     ';
        //     }
        // } else {
        //     $output .= '<tr>
        //     <td colspan="5">No Data Found</td>
        //     </tr>';
        // }
        // $output .= '</table>';
        // echo $output;
    }
}
