<div class="col-xs-9">
	<h3><?php echo $projects_data->project_name; ?></h3>
	<div class="panel panel-default">
        <div class="panel-body">
            <?php echo $projects_data->project_body; ?>
        </div>
	</div>
</div>
<div class="col-xs-3">
	<ul class="list-group">
	    <h3>Project Actions</h3>

	    <li class="list-group-item"><a href="<?php echo base_url();?>tasks/create/<?php echo $projects_data->id; ?>">Create Task</a></li>
	    <li class="list-group-item"><a href="">Edit Project</a></li>
	    <li class="list-group-item"><a href="">Delete Project</a></li>
	</ul>
</div>