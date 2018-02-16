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

                        <a href="<?php echo base_url(); ?>users/register">Register</a>
                    </p>
                    <ul class="nav">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
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
    <footer>
        <p>Furkan Dogan</p>
    </footer>
    </div>
</body>

</html>