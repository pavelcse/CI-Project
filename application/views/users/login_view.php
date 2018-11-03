<?php if($this->session->userdata('logged_in')): ?>
	
	<h3>Logout</h3>
	<?php if($this->session->userdata('user_name')): ?>
		<?php echo "You are logged in as ".$this->session->userdata('user_name'); ?>
	<?php endif; ?>
	<?php echo form_open('users/logout'); ?>

		<?php echo form_submit(['name'=>'submit', 'class'=>'btn btn-primary', 'value'=>'Logout']); ?>

	<?php echo form_close(); ?>

<?php else: ?>


    <h3>Login Form</h3>


    <?php echo form_open('users/login', ['id'=>'login_form', 'class'=>'form_horizontal']); ?>

    <div class="form-group">
	    <?php echo form_label('Username'); ?>
	    <?php echo form_input(['name'=>'username','class'=>'form-control', 'placeholder'=>'Enter Username']); ?>
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
	    <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary', 'value'=>'Login']); ?>
    </div>

    <?php echo form_close(); ?>

    <?php if($this->session->flashdata('errors')): ?>
    <?php echo $this->session->flashdata('errors'); ?>
    <?php endif; ?>


<?php endif; ?>