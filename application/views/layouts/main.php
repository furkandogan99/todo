<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Todo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container-fluid">
						<a class="brand" href="#">Todolist</a>
						<div class="nav-collapse collapse">
							<p class="navbar-text pull-right">


							</p>
							<ul class="nav">
								<li><a href="#">Home</a></li>
							</ul>
						</div>
					</div>
				</div>
	   </div>

	   <div class="container-fluid">
	   	 <div class="row-fluid">
	   	 	 <div class="span3">
	   	 	 	 <div class="well sidebar-nav">
	   	 	 	 <div style="margin:0 0 10px 10px;">
	   	 	 	 	
	   	 	 	 	<?php $this->load->view('users/login'); ?>

	   	 	 	 </div>
	   	 	 	 </div>
	   	 	 </div>

	   	 	 <div class="span9">
	   	 	 	
	   	 	 		<?php $this->load->view($main_content); ?>
	   	 	 </div>
	   	   </div>
	   	 <hr>

	   	 <footer>
	   	   <p>&copy; Furkan Dogan</p>
	   	 </footer>
	   </div>
</body>
</html>