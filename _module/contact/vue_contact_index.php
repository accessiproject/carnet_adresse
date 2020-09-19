        <h2>contact</h2>
        <p><a class="btn btn-warning" href="<?=hlien("contact","edit","id",0)?>">Nouveau contact</a></p>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			
			<th>Act_id</th>
			<th>Act_lastname</th>
			<th>Act_firstname</th>
			<th>Act_photo</th>
			<th>Act_description</th>
			<th>Act_birth</th>
			<th>Act_postaladdress</th>
			<th>Act_email</th>
			<th>Act_telephone</th>
			<th>Act_mobile</th>
			<th>Act_createdat</th>
			<th>Act_user</th><th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['contact_id'])?></td>
			<td><?=mhe($row['contact_lastname'])?></td>
			<td><?=mhe($row['contact_firstname'])?></td>
			<td><?=mhe($row['contact_photo'])?></td>
			<td><?=mhe($row['contact_description'])?></td>
			<td><?=mhe($row['contact_birth'])?></td>
			<td><?=mhe($row['contact_postaladdress'])?></td>
			<td><?=mhe($row['contact_email'])?></td>
			<td><?=mhe($row['contact_telephone'])?></td>
			<td><?=mhe($row['contact_mobile'])?></td>
			<td><?=mhe($row['contact_createdat'])?></td>
			<td><?=mhe($row['contact_user'])?></td><td><a class="btn btn-info" href="<?=hlien("contact","edit","id",$row["con_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("contact","del","id",$row["con_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</table>