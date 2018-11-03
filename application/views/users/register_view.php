   <h3>Register Form</h3>

	<?php echo validation_errors('<p class="text-danger">'); ?>

	<?php if($this->session->flashdata('user_register')): ?>
		<p class="text-success"><?php echo $this->session->flashdata('user_register'); ?></p>
	<?php endif; ?>

    <?php echo form_open('users/register', ['id'=>'register_form', 'class'=>'form_horizontal']); ?>

    <div class="form-group">
	    <?php echo form_label('Name'); ?>
	    <?php echo form_input(['name'=>'name','class'=>'form-control', 'placeholder'=>'Enter Name']); ?>
    </div>

    <div class="form-group">
	    <?php echo form_label('Username'); ?>
	    <?php echo form_input(['name'=>'username','class'=>'form-control', 'placeholder'=>'Enter Username']); ?>
    </div>

    <div class="form-group">
	    <?php echo form_label('Email'); ?>
	    <?php echo form_input(['name'=>'email','class'=>'form-control', 'placeholder'=>'Enter Email']); ?>
    </div>

    <div class="form-group">
	    <?php echo form_label('Password'); ?>
	    <?php echo form_password(['name'=>'password','class'=>'form-control', 'placeholder'=>'Enter Password']); ?>
    </div>

    <div class="form-group">
	    <?php echo form_label('Confirm Password'); ?>
	    <?php echo form_password(['name'=>'confirm_password','class'=>'form-control', 'placeholder'=>'Confirm Password']); ?>
    </div>

    <div class="form-group text-right">
	    <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary', 'value'=>'Register']); ?>
    </div>

    <?php echo form_close(); ?>