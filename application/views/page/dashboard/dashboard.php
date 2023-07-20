<style>
    .logo {

        height: 16rem;
        top: 5rem;
        position: relative;
        border-radius: 130px;
        box-shadow: 0px 0px 25px rgb(0 0 0 / 34%)
    }
</style>
<div class="container-fluid py-4">
    <div class="row">
        <?php
        foreach ($dashboard as $data) :
            $id_perum = $data->id_perum;
            // $id_cus_perum = $data->id_cus_perum;
            // echo $data->nm_perum
        ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-2">
                        <h6><?= $data->nm_perum; ?> </h6>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart<?= $id_perum; ?>"></canvas>
                        <script>
                            var ctx = document.getElementById("myChart<?= $id_perum; ?>").getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    // labels: ["Teknik", "Fisip", "Ekonomi", "Pertanian"],
                                    labels: [
                                        <?php
                                        $sql = "SELECT *FROM customer WHERE id_cus_perum = $id_perum GROUP BY tgl_event";
                                        $query = $this->db->query($sql);
                                        if ($query->num_rows() > 0) {
                                            foreach ($query->result() as $row) {
                                                echo '"' . $row->tgl_event . '",';
                                            }
                                        } else {
                                            echo '';
                                        }
                                        ?>
                                    ],
                                    datasets: [{
                                        label: 'Data Customer',
                                        // data: ['10', '20', '30', '40'],
                                        data: [

                                            <?php
                                            $sql = "SELECT *FROM customer WHERE id_cus_perum = $id_perum GROUP BY tgl_event";
                                            $query = $this->db->query($sql);
                                            if ($query->num_rows() > 0) {
                                                foreach ($query->result() as $row) {
                                                    // echo '"' . $row->tgl_event . '",';
                                                    $tgl_event = $row->tgl_event;
                                                    $sql = "SELECT *FROM customer WHERE tgl_event = '$tgl_event'";
                                                    $query = $this->db->query($sql);
                                                    $count = $query->num_rows();
                                                    echo '"' . $count . '",';
                                                }
                                            } else {
                                                echo '';
                                            }
                                            ?>
                                        ],
                                        backgroundColor: [
                                            <?php
                                            $sql = "SELECT *FROM customer WHERE id_cus_perum = $id_perum GROUP BY tgl_event";
                                            $query = $this->db->query($sql);
                                            if ($query->num_rows() > 0) {
                                                foreach ($query->result() as $row) {
                                                    echo '"rgba(0, 136, 245, 1)",';
                                                }
                                            }

                                            ?>
                                            // 'rgba(54, 162, 235, 0.2)',
                                            // 'rgba(255, 206, 86, 0.2)',
                                            // 'rgba(75, 192, 192, 0.2)'
                                        ],
                                        // borderColor: [
                                        //     <?php
                                                //     $sql = "SELECT *FROM customer WHERE id_cus_perum = $id_perum GROUP BY tgl_event";
                                                //     $query = $this->db->query($sql);
                                                //     if ($query->num_rows() > 0) {
                                                //         foreach ($query->result() as $row) {
                                                //             echo '"rgba(255, 99, 132, 0.2)","rgba(54, 162, 235, 0.2)",';
                                                //         }
                                                //     }

                                                //     
                                                ?>
                                        // ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
        <center>
            <img src="<?= base_url('upload'); ?>/Logo.jpg" class="img-fluid logo">
        </center>
    </div>
</div>