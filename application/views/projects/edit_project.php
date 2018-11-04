   <h3>Update Project</h3>

	<?php echo validation_errors('<p class="text-danger">'); ?>

	<?php if($this->session->flashdata('project_updated')): ?>
		<p class="text-success"><?php echo $this->session->flashdata('project_updated'); ?></p>
	<?php endif; ?>

    <?php echo form_open('projects/edit/'.$project_data->id, ['id'=>'edit_form', 'class'=>'form_horizontal']); ?>

    <div class="form-group">
	    <?php echo form_label('Project Name'); ?>
	    <?php echo form_input(['name'=>'project_name','class'=>'form-control', 'value'=>$project_data->project_name ]); ?>
    </div>

    <div class="form-group">
	    <?php echo form_label('Project Body'); ?>
	    <?php echo form_textarea(['name'=>'project_body','class'=>'form-control', 'value'=>$project_data->project_body ]); ?>
    </div>

    <div class="form-group text-right">
	    <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary', 'value'=>'Update Project']); ?>
    </div>

    <?php echo form_close(); ?>