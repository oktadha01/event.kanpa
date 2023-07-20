<div class="container-fluid py-4">
    <div id="form-add-cust" class="card" hidden>
        <div class="card-header p-2">
            <h6>Form input customer</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <?php
                $nm_perum = preg_replace("![^a-z0-9]+!i", " ", $this->uri->segment(3));
                ?>
                <input type="text" id="nm-perum" value="<?= $nm_perum; ?>" hidden>
                <div class="col-lg-3 col-12">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="tgl-input" placeholder=" Pilih Range Tanggal">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12 mt-3 p-0">
                    <div class="input-wrapper">
                        <input type="text" id="nama" class="" required>
                        <label class="label-in" for="nama">nama</label>
                    </div>
                </div>
                <div class="col-lg-3 col-12 mt-3 p-0">
                    <div class="input-wrapper">
                        <input type="number" id="no-hp" required>
                        <label class="label-in" for="no-hp">No.Hp</label>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-3 p-0">
                    <div class="input-wrapper">
                        <input type="text" id="alamat" required>
                        <label class="label-in" for="alamat">Alamat</label>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <button type="button" id="btn-close-cust" class="btn mb-0  bg-gradient-danger btn-sm">Close</button>
                </div>
                <div class="col-6">
                    <button type="button" id="btn-save-cust" class="btn mb-0  bg-gradient-success float-right btn-sm">Save Customer</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="button" id="btn-add-cust" class="btn mb-0  bg-gradient-info float-right btn-sm">Add Customer</button>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header p-2">
            <div class="row">
                <div class="col-6">
                    <h6 class="mb-0" style="font-family: 'FontAwesome';">Data Customer</h6>
                </div>
                <div class="col-3">

                </div>
                <div class="col-lg-3 col-xxl-2 col-md-3">
                    <!-- <label for="tgl-trans" class="form-label">Tanggal</label> -->
                    <!-- <div class="input-group input-group-sm">
                        <span class="input-group-text text-body"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="tgl-filter" name="tgl-filter" placeholder=" Pilih Range Tanggal">
                    </div> -->
                    <div class="input-group input-group-sm float-right">
                        <span class="input-group-text text-body"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <!-- <input type="text" class="form-control" name="filter" id="filter" placeholder=" Pilih Tanggal"> -->
                        <select type="text" id="tgl-filter" name="filter" class="form-control p-1" required>
                            <option value="all">ALL</option>
                            <?php
                            foreach ($get_tgl as $data) :
                            ?>
                                <option value="<?= $data->tgl_event; ?>"><?= $data->tgl_event; ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive" style="max-height: 25rem;">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAMA</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NO HP</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ALAMAT</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody id="load-data-cust">

                </tbody>
            </table>
        </div>
    </div>
</div>

<script>

</script>