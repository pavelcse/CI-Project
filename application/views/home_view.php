<p>
	<?php if($this->session->flashdata('login_message')): ?>
	<?php echo $this->session->flashdata('login_message'); ?>
	<?php endif; ?>

	<?php if($this->session->flashdata('no_access')): ?>
	<?php echo $this->session->flashdata('no_access'); ?>
	<?php endif; ?>
</p>

<h3>Welcome</h3>
<?php if($this->session->userdata('logged_in')): ?>
<h4>Hello <?php echo $this->session->userdata('user_name') ?>. Here your all Projects</h4>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="20%">Project Name</th>
			<th width="75%">Project Desctiption</th>
			<th width="5%">Actions</th>
		</tr>
	</thead>
	<tbodt>
		<?php foreach($projects as $project): ?>
		<tr>
			<td><?php echo $project->project_name; ?></td>
			<td><?php echo $project->project_body; ?></td>
			<td><a class="btn btn-xs btn-info" href="<?php echo base_url();?>projects/display/<?php echo $project->id; ?>">View</a></td>
		</tr>
		<?php endforeach; ?>
	</tbodt>
</table>
<?php else: ?>
<div class="jumbotron text-center">
	<h3>Welcome to CI Project Management System</h3>
</div>
<?php endif; ?>