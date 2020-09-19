        <h2>user</h2>
        <p><a class="btn btn-warning" href="<?=hlien("user","edit","id",0)?>">Nouveau user</a></p>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			
			<th>_id</th>
			<th>_lastname</th>
			<th>_firstname</th>
			<th>_email</th>
			<th>_username</th>
			<th>_password</th>
			<th>_role</th>
			<th>_createdat</th><th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['user_id'])?></td>
			<td><?=mhe($row['user_lastname'])?></td>
			<td><?=mhe($row['user_firstname'])?></td>
			<td><?=mhe($row['user_email'])?></td>
			<td><?=mhe($row['user_username'])?></td>
			<td><?=mhe($row['user_password'])?></td>
			<td><?=mhe($row['user_role'])?></td>
			<td><?=mhe($row['user_createdat'])?></td><td><a class="btn btn-info" href="<?=hlien("user","edit","id",$row["use_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("user","del","id",$row["use_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</table>