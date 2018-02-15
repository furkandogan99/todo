<?php if($this->session->flashdata('registered')) : ?>
	  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('registered'); ?></p>
<?php endif; ?>
<h1>Welkom bij de todolist</h1>
<p>Gewoon een simpele todolist.</p>