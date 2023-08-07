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

    <!-- admin even jjs -->
    <?php if ($userdata->role == 'JJS') : ?>
    <div class="row">
        <div class="col-xl-4 col-6">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row">
                        <div class="col-3 box">
                            <div
                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-lg icon-lg mt-3">
                                <i type="button" class="ni ni-building fa-beat text-lg opacity-10 mt-2"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-9 text-center">
                            <div class="numbers">
                                <h6 class="mb-0 text-capitalize font-weight-bold text-center">
                                    Kalisidi</h6>
                                <h5 class="font-weight-bolder mb-0">
                                    <!-- <?=$jum_null;  ?> -->
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5">
                                            <span class="text-success text-sm text-center">Dewasa </span>
                                            <h3 class="text-success font-weight-bolder text-center"><?=$k_dewasa;  ?>
                                            </h3>
                                        </div>
                                        <div class="col-xl-2 col-lg-2">
                                        </div>
                                        <div class="col-xl-5 col-lg-5">
                                            <span class="text-info text-sm font-weight-bolder text-center">Anak
                                                Anak</span>
                                            <h2 class="text-info font-weight-bolder text-center"><?=$k_anak;  ?></h2>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-6">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row">
                        <div class="col-3 box">
                            <div
                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-lg icon-lg mt-3">
                                <i type="button" class="ni ni-building fa-beat text-lg opacity-10 mt-2"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-9 text-center">
                            <div class="numbers">
                                <h6 class="mb-0 text-capitalize font-weight-bold text-center">
                                    Keji</h6>
                                <h5 class="font-weight-bolder mb-0">
                                    <!-- <?=$jum_null;  ?> -->
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5">
                                            <span class="text-success text-sm text-center">Dewasa </span>
                                            <h3 class="text-success font-weight-bolder text-center"><?=$keji_dewasa;  ?>
                                            </h3>
                                        </div>
                                        <div class="col-xl-2 col-lg-2">
                                        </div>
                                        <div class="col-xl-5 col-lg-5">
                                            <span class="text-info text-sm font-weight-bolder text-center">Anak
                                                Anak</span>
                                            <h2 class="text-info font-weight-bolder text-center"><?=$keji_anak;  ?></h2>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-6">
            <div class="card">
                <div class="card-body p-1">
                    <div class="row">
                        <div class="col-3 box">
                            <div
                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-lg icon-lg mt-3">
                                <i type="button" class="ni ni-building fa-beat text-lg opacity-10 mt-2"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-9 text-center">
                            <div class="numbers">
                                <h6 class="mb-0 text-capitalize font-weight-bold text-center">
                                    Lainnya</h6>
                                <h5 class="font-weight-bolder mb-0">
                                    <!-- <?=$jum_null;  ?> -->
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5">
                                            <span class="text-success text-sm text-center">Dewasa </span>
                                            <h3 class="text-success font-weight-bolder text-center"> <?=$lainnya;  ?>
                                            </h3>
                                        </div>
                                        <div class="col-xl-2 col-lg-2">
                                        </div>
                                        <div class="col-xl-5 col-lg-5">
                                            <span class="text-info text-sm font-weight-bolder text-center">Anak
                                                Anak</span>
                                            <h2 class="text-info font-weight-bolder text-center"><?=$lain_a;  ?></h2>
                                        </div>
                                    </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- grafik -->
    <br>
    <div class="row">
        <div class="col-lg-6 col-12 ">
            <div class="card mb-2">
                <div class="card-body p-2">
                    <div class="chart">
                        <canvas id="Chart" class="chart-canvas" height="200px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- admin event  -->
    <?php if ($userdata->role == 'Admin') : ?>
    <div class="row">
        <?php
        foreach ($dashboard as $data) :
            $id_perum = $data->id_perum;
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
                                ],

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
    </div>
    <?php endif; ?>
    <center>
        <img src="<?= base_url('upload'); ?>/Logo.jpg" class="img-fluid logo">
    </center>


</div>

<!-- // grafik transaksi by perumahan by bulan -->
<script>
// Ambil data dari PHP dan konversi menjadi data JavaScript
var data_jalan_sehat = <?php echo json_encode($grafik); ?>;
var desaLabels = [];
var dewasaData = [];
var anakAnakData = [];

data_jalan_sehat.forEach(function(item) {
    desaLabels.push(item.desa);
    dewasaData.push(item.jumlah_dewasa);
    anakAnakData.push(item.jumlah_anak_anak);
});

// Membuat grafik bar untuk jumlah Dewasa dan Anak-anak per desa
var ctx = document.getElementById('Chart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: desaLabels,
        datasets: [{
                label: 'Dewasa',
                data: dewasaData,
                backgroundColor: "lightgreen",
                borderColor: "red",
                borderWidth: 1,
            },
            {
                label: 'Anak-anak',
                data: anakAnakData,
                label: "anak-anak",
                backgroundColor: "lightblue",
                borderColor: "blue",
                borderWidth: 1,
            }
        ]
    },
    options: {
        responsive: true,
        legend: {
            position: "top"
        },
        title: {
            display: true,
            text: "Data Peserta JJS"
        },
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
<!-- akhir grafik transaksi by perumahan by bulan -->