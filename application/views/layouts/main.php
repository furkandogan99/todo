<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Todo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="<?php echo base_url(); ?>"><h4>Todolist</h4></a>
                <div class="nav-collapse collapse">
                    <p class="navbar-text pull-right">
                    	<?php if($this->session->userdata('logged_in')) : ?>
                    		Welcome, <?php echo $this->session->userdata('username'); ?>
                    	<?php else : ?>
                        <a href="<?php echo base_url(); ?>users/register">Register</a>
                    	<?php endif; ?>
                    </p>
                    <ul class="nav">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <?php if($this->session->userdata('logged_in')) : ?>
                        	<li><a href="<?php echo base_url(); ?>lists">My Lists</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   	 <div class="col-md-4">
               <?php $this->load->view('users/login'); ?>
     </div>
    <div class="col-md-6">
        <?php $this->load->view($main_content); ?>
    </div>
    <hr>
</div>
    </div>
</body>

</html>