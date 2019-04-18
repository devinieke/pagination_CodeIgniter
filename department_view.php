<!DOCTYPE html>
<html>
<head>
	<title>CodeIgniter Pagination</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Department Name</th>
							<th>Head of Department</th>
						</tr>
					</thead>
					<tbody>
						<?php for ($i = 0; $i < count($deptlist); ++$i) { ?>
							<tr>
								<td><?php echo ($page+$i+1); ?></td>
								<td><?php echo $deptlist[$i]->var_dept_name; ?></td>
								<td><?php echo $deptlist[$i]->var_emp_name; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<?php echo $pagination; ?>
			</div>
		</div>
	</div>
</body>
</html>