<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<main class="main-content  mt-0">
    <div class="container">
        <section class="banner__slider">
            <div class="slider stick-dots" style="top: 50px;">
                <div class="slide" style="border-radius: 1rem;">
                    <div class="slide__img">
                        <img src="" alt="" data-lazy="<?= base_url('upload'); ?>/jalan-sehat-1.jpg" class="full-image animated" data-animation-in="zoomInImage" />
                    </div>
                    <!-- <div class="slide__content ">
                        <div class="slide__content--headings text-center">
                            <p class="animated top-title fontsize-text-header m-0" id="text-radius" data-animation-in="fadeInUp" data-delay-in="0.3">SELAMAT HARI JADI</p>
                            <div class="animated title" data-animation-in="fadeInUp">
                                <center>
                                    <img src="<?= base_url('upload'); ?>/logo-455.png" alt="" class="img-fluid size-logo-header">
                                </center>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="slide">
                    <div class="slide__img ">
                        <img src="" alt="" data-lazy="<?= base_url('upload'); ?>/jalan-sehat-2.jpg" class="full-image animated" data-animation-in="zoomInImage" />
                    </div>
                    <!-- <div class="slide__content slide__content__left slide-cus">
                        <div class="slide__content--headings text-left">
                            <h5 class="animated title fontsize-text-header" data-animation-in="fadeInRight">SELAMAT DATANG DI</h5>
                            <h5 class="animated title fontsize-text-header" data-animation-in="fadeInRight">GRIYA KANZU CARUBAN</h5>
                            <p class="animated top-title p-header-sub" data-animation-in="fadeInRight" data-delay-in="0.2">Rumah Subsidi Rasa Komersil</p>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="slide">
                    <div class="slide__img">
                        <img src="" alt="" data-lazy="https://images.unsplash.com/photo-1550461716-dbf266b2a8a7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" class="full-image animated" data-animation-in="zoomOutImage" />
                    </div>
                    <div class="slide__content slide__content__right">
                        <div class="slide__content--headings text-right">
                            <p class="animated top-title" data-animation-in="fadeInLeft" data-delay-in="0.2">Wish you have good food at our restaurant</p>
                            <h2 class="animated title" data-animation-in="fadeInLeft">Experience the food</h2>
                            <button class="btn-success btn button-custom animated text-white" data-animation-in="fadeInUp">Order Now</button>
                        </div>
                    </div>
                </div> -->
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
                    <circle r="20" cy="22" cx="22" id="test">
                </symbol>
            </svg>
        </section>
        <div class="card mt-6" style="box-shadow: 0px 0px 12px rgb(0 0 0 / 34%);">
            <div class="card-body">
                <form method="post" action="<?php echo base_url('Jalan_sehat/save_customer'); ?>">

                    <div class="row ">
                        <center>
                            <div class="header">
                                <h2 id="text-regist">Silahkan isi data diri anda</h2>
                            </div>
                            <p class="p-regist">Jalan sehat KANZU GROUP 13 Agustus 2023 / 07:00 - Selesai</p>
                            <hr style="background: #00000029;margin: 0;height: 2px;">
                        </center>
                        <div class="col-lg-4 col-12 mt-3 p-0">
                            <div class="input-wrapper">
                                <!-- <div class="input-group"> -->
                                <select type="text" id="desa" name="desa" class="desa" required>
                                    <option value="" hidden></option>
                                    <option value="keji">Keji</option>
                                    <option value="kalisidi">Kalisidi</option>
                                    <option value="lainnya">Lainnya</option>

                                </select>
                                <!-- </div> -->
                                <label class="label-in" for="nama">Desa</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-3 p-0">
                            <div class="input-wrapper">
                                <input type="number" id="no-hp" name="no_hp" class="no-hp col-12" required>
                                <label class="label-in" for="no-hp">No.Hp</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-3 p-0">
                            <div class="input-wrapper">
                                <input type="number" id="jmlh-anggota" class="jmlh-anggota col-12" required>
                                <label class="label-in" for="jmlh-anggota">Jumlah Anggota</label>
                            </div>
                        </div>
                    </div>
                    <div id="container">
                    </div>
                    <div class="col-lg-2 col-12 mt-3">
                        <button type="submit" id="" class="col-12 btn mb-0  bg-gradient-info" style="height: 46px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script type="text/javascript" src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="http://tympanus.net/Development/Arctext/js/jquery.arctext.js"></script> -->
<script type="text/javascript" src="<?= base_url('assets'); ?>/js/arctext.js"></script>

</head>

<script>
    <?php
    if ($this->session->flashdata('sukses')) {
    ?>
        success();

    <?php
    } elseif ($this->session->flashdata('gagal')) {
    ?>
        // alert('tdk');
    <?php
    } else {
    }
    ?>
    $('#text-radius').arctext({
        radius: 600
    });

    $('#btn-submit').click(function(e) {
        var nama = [];
        var kategori = [];
        var no_undian = [];
        $('.nama').each(function() {
            nama.push($(this).val());
        });
        $('.kategori').each(function() {
            kategori.push($(this).val());
        });
        $('.no-undian').each(function() {
            no_undian.push($(this).val());
        });
        if ($('#desa').val() == '' || $('#no-hp').val() == '' || $('.nama').val() == '' || $('.kategori').val() == '' || $('.no-undian').val() == '') {
            if ($('#desa').val() == '') {
                $('#desa').addClass('border-in-error');
            } else {
                $('#desa').removeClass('border-in-error');
            }

            if ($('#no-hp').val() == '') {
                $('#no-hp').addClass('border-in-error');
            } else {
                $('#no-hp').removeClass('border-in-error');
            }

            if ($('.nama').val() == '') {
                $('.nama').addClass('border-in-error', true);
            } else {
                $('.nama').removeClass('border-in-error');
            }

            if ($('.kategori').val() == '') {
                $('.kategori').addClass('border-in-error');
            } else {
                $('.kategori').removeClass('border-in-error');
            }

            if ($('.no-undian').val() == '') {
                $('.no-undian').addClass('border-in-error');
            } else {
                $('.no-undian').removeClass('border-in-error');
            }

        } else {
            // alert('yaa')
            let formData = new FormData();
            formData.append('desa', $('#desa').val());
            formData.append('no-hp', $('#no-hp').val());
            formData.append('nama', nama);
            formData.append('kategori', kategori);
            formData.append('no-undian', no_undian);
            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('Jalan_sehat/save_customer'); ?>",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    alert(data)
                    // success();

                },
                error: function() {
                    alert("Data Gagal Diupload");
                }
            });
        }

    });
    // success();

    function success() {
        let timerInterval
        Swal.fire({
            title: 'Prosess registration ...',
            html: 'I will close in <b></b> milliseconds.',
            timer: 2000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
                Swal.fire({
                    title: 'Succes!',
                    text: 'Terimakasih...',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                })
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
    }
    // add your code here!
    // see https://www.skypack.dev/view/sweetalert2 for README
    /*
     ** With Slick Slider Plugin : https://github.com/marvinhuebner/slick-animation
     ** And Slick Animation Plugin : https://github.com/marvinhuebner/slick-animation
     */

    // Init slick slider + animation
    $('.slider').slick({
        autoplay: true,
        speed: 800,
        lazyLoad: 'progressive',
        arrows: true,
        dots: false,
        prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
        nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
    }).slickAnimation();



    $('.slick-nav').on('click touch', function(e) {

        e.preventDefault();

        var arrow = $(this);

        if (!arrow.hasClass('animate')) {
            arrow.addClass('animate');
            setTimeout(() => {
                arrow.removeClass('animate');
            }, 1600);
        }

    });
</script>

<script>
    $('#jmlh-anggota').on('input', function() {
        addFields();
    })

    function addFields() {
        var number = document.getElementById("jmlh-anggota").value;
        var container = document.getElementById("container");
        while (container.hasChildNodes()) {
            container.removeChild(container.lastChild);
        }
        var x = 1;;
        for (i = 0; i < number; i++) {
            // container.appendChild(document.createTextNode("Member" + (i + 1)));
            // var input = document.createElement("input");
            var input = document.createElement("div");
            input.innerHTML =
                '<div class="row">' +
                '<span class="mt-2 mb-1 text-bold">Anggota ' + x++ + '</span>' +
                '    <div class="col-lg-4 col-4 p-0">' +
                '        <div class="input-wrapper">' +
                '            <input type="text" id="nama" name="nama[]" class="nama col-12" required>' +
                '            <label class="label-in" for="nama">Nama</label>' +
                '        </div>' +
                '    </div>' +
                '    <div class="col-lg-4 col-4 p-0">' +
                '        <div class="input-wrapper">' +
                '            <select type="text" id="kategori" name="kategori[]" class="kategori col-12" required style="padding: 10px;">' +
                '                <option value="" hidden></option>' +
                '                <option value="dewasa">Dewas</option>' +
                '                <option value="anak-anak">Anak-anak</option>' +
                '            </select>' +
                '            <label class="label-in" for="kategori">Kategori</label>' +
                '        </div>' +
                '    </div>' +
                '    <div class="col-lg-4 col-4 p-0">' +
                '        <div class="input-wrapper">' +
                '            <input type="text" id="no-undian" name="no_undian[]" class="no-undian col-12" required>' +
                '            <label class="label-in" for="no-undian">No.Undian</label>' +
                '        </div>' +
                '    </div>' +
                '</div>';

            // input.type = "text";
            container.appendChild(input);
            // container.appendChild(document.createElement("br"));
        }
    }
</script>