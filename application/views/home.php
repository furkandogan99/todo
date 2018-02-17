<?php if($this->session->flashdata('registered')) : ?>
	  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('registered'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('login_success')) : ?>
	  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('login_success'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('logged_out')) : ?>
	  <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('logged_out'); ?></p>
<?php endif; ?>
<?php if($this->session->flashdata('noaccess')) : ?>
	  <p class="alert alert-dismissable alert-danger"><?php echo $this->session->flashdata('noaccess'); ?></p>
<?php endif; ?>
<h1>Welkom bij de todolist</h1>


<br />
<h3>Mijn recente lijsten</h3>
<table class="table table-striped" width="50%" cellspacing="5" cellpadding="5">
		<tr>
				<th>Lijst Naam</th>
				<th>Aangemaakt op</th>
				<th>View</th>
		</tr>
		<?php if(isset($lists)) : ?>
		<?php foreach($lists as $list) : ?>
		<tr>
				<td><?php echo $list->list_name; ?></td>
				<td><?php echo $list->create_date; ?></td>
				<td><a href="<?php echo base_url(); ?>lists/show/<?php echo $list->id; ?>"> View lijst</a></td>
		</tr>
	<?php endforeach; ?>
	<?php endif; ?>
</table>