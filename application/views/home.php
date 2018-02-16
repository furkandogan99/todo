<?php if($this->session->flashdata('registered')) : ?>
	  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('registered'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('login_success')) : ?>
	  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('login_success'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('logged_out')) : ?>
	  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('logged_out'); ?></p>
<?php endif; ?>
<h1>Welkom bij de todolist</h1>