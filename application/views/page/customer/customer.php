<div class="container-fluid py-4">
    <div class="card mt-3">
        <div class="card-header p-2">
            <div class="row">
                <div class="col-6">
                    <h6 class="mb-0" style="font-family: 'FontAwesome';">Data Customer</h6>
                </div>
                <!-- <div class="col-6">
                <button type="button" id="btn-add-admin" class="btn btn-sm bg-gradient-primary float-right mb-0">Add Admin</button>
            </div> -->
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAMA</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NO HP</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ALAMAT</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_customer as $data) :
                    ?>
                        <tr>
                            <td class="pl-23px">
                                <p class="text-xs font-weight-bold mb-0"><?= $no++; ?></p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0"><?= $data->nama; ?></p>
                            </td>
                            <td>
                                <p class="text-xs text-secondary mb-0"><?= $data->no_hp; ?></p>

                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0"><?= $data->alamat; ?></p>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>