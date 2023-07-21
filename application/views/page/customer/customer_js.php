<script>
    load_data_cust();
    $(document).ready(function() {
        $('#form-add-cust').removeAttr('hidden', true).hide();
        $('#btn-add-cust').click(function(e) {
            form_in()
        });
        $('#btn-close-cust').click(function(e) {
            form_close()
        });
        $('#tgl-filter').change(function(e) {
            // alert('ya')
            load_data_cust();
        })

    });
    $('#btn-save-cust').click(function(e) {
        if ($('#nama').val() == '' || $('#no-hp').val() == '' || $('#alamat').val() == '') {
            if ($('#nama').val() == '') {
                $('#nama').addClass('border-in-error', true);
            } else {

                $('#nama').removeClass('border-in-error');
            }
            if ($('#no-hp').val() == '') {
                $('#no-hp').addClass('border-in-error');
            } else {

                $('#no-hp').removeClass('border-in-error');
            }
            if ($('#alamat').val() == '') {
                $('#alamat').addClass('border-in-error');
            } else {

                $('#alamat').removeClass('border-in-error');
            }

        } else {
            // alert('yaa')
            let formData = new FormData();
            formData.append('nm-perum', $('#nm-perum').val());
            formData.append('id-customer', $('#id-customer').val());
            formData.append('nama', $('#nama').val());
            formData.append('no-hp', $('#no-hp').val());
            formData.append('alamat', $('#alamat').val());
            formData.append('tgl-event', $('#tgl-input').val());
            formData.append('action', $('#btn-save-cust').val());
            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('Customer/save_customer'); ?>",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    alert('Data berhasil di input');
                    load_data_cust();
                    $('#nama, #no-hp, #alamat').val('');



                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        }

    });

    function load_data_cust() {
        // alert($('#tgl-filter').val()+$('#nm-perum').val())
        let formData = new FormData();
        formData.append('nm-perum', $('#nm-perum').val());
        formData.append('tgl-filter', $('#tgl-filter').val());
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Customer/data_filter'); ?>",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(data) {
                $('#load-data-cust').html(data)

            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    }
    $(function() {
        $('#tgl-input').daterangepicker({
            "setDate": new Date(),
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            locale: {
                format: 'DD-MM-YYYY'
            }

        });
    });

    function form_in() {
        $('#form-add-cust').show();
        $('#btn-add-cust').hide();
    }

    function form_close() {
        $('#form-add-cust').hide();
        $('#btn-add-cust').show();
        $('#nama, #no-hp, #alamat').val('');
        $("#btn-save-cust").val("save");

    }
</script>