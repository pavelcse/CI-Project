<h1>Hello</h1>

<p>
	<?php if($this->session->flashdata('login_message')): ?>
	<?php echo $this->session->flashdata('login_message'); ?>
	<?php endif; ?>

	<?php if($this->session->flashdata('no_access')): ?>
	<?php echo $this->session->flashdata('no_access'); ?>
	<?php endif; ?>
</p>