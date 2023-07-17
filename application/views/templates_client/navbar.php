<style>
.min-heig-nav {
    height: 28rem;
}

.blur.blur-rounded {
    border-radius: 9px;
}

@media only screen and (max-width: 992px) and (orientation: portrait) {
    .p-nav {
        padding: 0px 0px !important;
        margin: 0px 5px !important;
    }

    .m-h {
        height: 13rem !important;
        margin: 0 !important;
    }

    .top-padd-mar {
        top: -56px;
        padding: 7px;
        margin: 0px 7px !important;
    }
}

@media only screen and (max-width: 1024px) and (orientation: landscape) {
    .min-heig-nav {
        height: 21rem;
    }

    .top-padd-mar {
        top: -76px;
        padding: 7px;
        margin: 0px 7px !important;
    }
}
</style>
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <nav
            class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute py-2 start-0 end-0 mx-4 p-nav">
            <div class="container-fluid pe-0">
                <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="">
                    <?php
                    $tittle = $this->uri->segment(3);
                    $perum = preg_replace("![^a-z0-9]+!i", " ", $tittle);
                    if (isset($_title)) {
                        echo $perum;
                    }else{
                        echo'KANZU PERMAI ABADI';
                    }?>
                </a>
                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                    aria-label="Toggle navigation" style="border: none;">
                    <span class="navbar-toggler-icon" style="margin-top: 14px !important;">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                href="https://kanpa.co.id/">
                                <i class="fa fa-home opacity-6 text-dark me-1"></i>
                                Home Kanpa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center me-2 active" href="">
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link me-2" href="<?php echo site_url(''); ?> ">
                                <i class="ni ni-square-pin"></i>
                                Home Site Map
                            </a>
                        </li> -->
                    </ul>
                    <li class=" nav-item d-flex align-items-center">
                    </li>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>