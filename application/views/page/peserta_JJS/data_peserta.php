<div class="panel-table">
    <div class="container-fluid py-4">
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table id="data-peserta" class="table align-items-center">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Desa</th>
                            <th>Kategori</th>
                            <th>telepon</th>
                            <th>NO Undian</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#data-peserta').DataTable({
        // "paging": true,
        // "autoWidth": true,
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?=site_url('Data_pesertaJJS/get_peserta')?>",
            "type": "POST"
        },

        "columnDefs": [{
                "targets": [1, 2, 3, 4, 5],
                "className": 'text-right'
            },
            {
                "targets": [0],
                "className": 'text-center'
            },
            {
                "targets": [4],
                "orderable": false
            },
        ]
    })
})
</script>