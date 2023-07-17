<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>
<?php $this->load->view('templates/navbar'); ?>
<?php $this->load->view($content); ?>
<?php $this->load->view('templates/footer'); ?>
<?php $this->load->view('templates/footer_js'); ?>
<?php
    if (isset($script) && !empty($script)) {
        $this->load->view($script);
    } ?>
<!-- <?php $this->load->view($script); ?> -->