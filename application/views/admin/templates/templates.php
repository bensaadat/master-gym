<?php $this->load->view('admin/common/header', array('currentUser' => $this->ion_auth->user()->row())); ?>

<?php $this->load->view('admin/common/navigation'); ?>

<?php  $this->load->view($content); ?>

<?php $this->load->view('admin/common/footer'); ?>
