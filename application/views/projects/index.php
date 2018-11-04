<h3>Projects <a href="<?php echo base_url();?>projects/create" class="btn btn-primary pull-right">Create New Project</a></h3>
<?php if($this->session->flashdata('project_created')): ?>
	<p class="text-success"><?php echo $this->session->flashdata('project_created'); ?></p>
<?php endif; ?>

<?php if($this->session->flashdata('project_updated')): ?>
	<p class="text-success"><?php echo $this->session->flashdata('project_updated'); ?></p>
<?php endif; ?>

<?php if($this->session->flashdata('project_deleted')): ?>
	<p class="text-success"><?php echo $this->session->flashdata('project_deleted'); ?></p>
<?php endif; ?>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="25%">Project Name</th>
			<th width="70%">Project Body</th>
			<th width="5%">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($projects as $project): ?>
		<tr>
			<td>
				<a href="<?php echo base_url();?>projects/display/<?php echo $project->id; ?>"><?php echo $project->project_name; ?></a>
			</td>
			<td><?php echo $project->project_body; ?></td>
			<td class="text-center"><a class="btn btn-danger btn-xs text-white" href="<?php echo base_url();?>projects/delete/<?php echo $project->id; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>