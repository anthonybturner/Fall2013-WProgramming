<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />

<div class="container">
	
	<h2>Users</h2>
	
		<a class="glyphicon glyphicon-plus " href="?action=new&format=dialog" data-toggle="modal" data-target="#myModal">Add Contact</a>


	<table class="table table-hover table-bordered table-striped">
		
		<thead>
		<tr>
			
			<!-- Always match up th with td -->
			<th>First Name</th>
			<th>Last Name</th>
			<th>Type</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<? foreach ($model as $rs):?><!-- Get all the columns and fields from the model-->


			<tr> <!-- Create columns for each field/row-->

				<td><?=$rs['FirstName']?></td>
				<td><?=$rs['LastName']?></td>
				<td><?=$rs['UserType']?></td>
				<!-- Create links and buttons for each field/row-->
				<td>
					<a class ="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
					<a class ="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
					<a class ="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>&format=dialog" data-toggle="modal" data-target="#myModal"></a>
				</td>

			</tr>
		
		<? endforeach; ?>
	
		</tbody>
	</table>
</div>

<div class="modal fade" id="myModal" >
	
	<!-- View needs to be in a new layout with the javascript data -->
	
</div>

<? function Scripts(){ ?> 
	
		<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>	
		<script type="text/javascript">			
			$(".table").dataTable();
		</script>
	
<?	} ?>
