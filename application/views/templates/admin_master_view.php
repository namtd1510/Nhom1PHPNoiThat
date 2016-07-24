<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/_parts/admin_master_header_view'); ?>


<?php $this->load->view('templates/_parts/admin_master_left_view'); ?>
<?php $this->load->view('templates/_parts/admin_master_main_view'); ?>
<!--<div class="container">--><?php echo $the_view_content; ?>
<?php $this->load->view('templates/_parts/admin_master_footer_view');?>
