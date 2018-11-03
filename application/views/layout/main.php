<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pavel - Codeigniter Project</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-default">
  		<div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">CI APP</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>projects/index">Project 
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>users/register">Register 
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php if($this->session->userdata('logged_in')): ?>
                        <a href="<?php echo base_url();?>users/logout">Logout</a>
                        <?php else: ?>
                        <a href="<?php echo base_url();?>users/login">Login</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
  		</div>
	</nav>

	<div class="container">
		<div class="col-xs-3">
			<?php $this->load->view('users/login_view'); ?>
		</div>
		<div class="col-xs-9">
			<?php $this->load->view($main_view); ?>
		</div>
	</div>
</body>
</html>