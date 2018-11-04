   <h3>Create New Project</h3>

	<?php echo validation_errors('<p class="text-danger">'); ?>

	<?php if($this->session->flashdata('project_created')): ?>
		<p class="text-success"><?php echo $this->session->flashdata('project_created'); ?></p>
	<?php endif; ?>

    <?php echo form_open('projects/create', ['id'=>'create_form', 'class'=>'form_horizontal']); ?>

    <div class="form-group">
	    <?php echo form_label('Project Name'); ?>
	    <?php echo form_input(['name'=>'project_name','class'=>'form-control', 'placeholder'=>'Enter Project Name']); ?>
    </div>

    <div class="form-group">
	    <?php echo form_label('Project Body'); ?>
	    <?php echo form_textarea(['name'=>'project_body','class'=>'form-control', 'placeholder'=>'Enter Project Body']); ?>
    </div>

    <div class="form-group text-right">
	    <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary', 'value'=>'Submit Project']); ?>
    </div>

    <?php echo form_close(); ?>