<h3>Projects</h3>

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="30%">Project Name</th>
			<th width="70%">Project Body</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($projects as $project): ?>
		<tr>
			<td>
				<a href="<?php echo base_url();?>projects/display/<?php echo $project->id; ?>"><?php echo $project->project_name; ?></a>
			</td>
			<td><?php echo $project->project_body; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>