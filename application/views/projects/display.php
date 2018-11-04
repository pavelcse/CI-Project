<div class="col-xs-9">
	<div class="panel panel-default">
		<div class="panel-heading">
			Project Name: <?php echo $projects_data->project_name; ?>
		</div>
        <div class="panel-body">
            <p class="panel-text">
            	<?php echo $projects_data->project_body; ?>
            </p>
            <p class="panel-text text">
            	Created at: <?php echo $projects_data->created_at; ?>
            </p>
        </div>
	</div>
</div>
<div class="col-xs-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			Project Actions
		</div>
		<div class="panel-body">
		    <ul class="list-group">
	            <li class="list-group-item"><a href="">Create Task</a></li>
	            <li class="list-group-item"><a href="<?php echo base_url();?>projects/edit/<?php echo $projects_data->id; ?>">Edit Project</a></li>
	            <li class="list-group-item"><a href="<?php echo base_url();?>projects/delete/<?php echo $projects_data->id; ?>">Delete Project</a></li>
		    </ul>
		</div>
	</div>
</div>