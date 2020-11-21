<h1>Gestion des comptes utilisateurs</h1>
<p><td><a class="btn btn-info" href="<?=hlien("user","useredit","id",0)?>">Créer un nouveau compte utilisateur</a></p>
<?php if ($result!=null) { ?>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Prénom</th>
			<th scope="col">Nom</th>
			<th scope="col">Adresse email</th>
			<th scope="col">Profil</th>
			<th scope="col">Date création</th>
			<th scope="col">Modifier</th>
			<th scope="col">Supprimer</th>
		</tr>
		<?php foreach ($result as $row) {
			extract($row); ?>
				<tr>
				<td><?=mhe($row['user_id'])?></td>
					<td><?=mhe($row['user_lastname'])?></td>
					<td><?=mhe($row['user_firstname'])?></td>
					<td><?=mhe($row['user_email'])?></td>
					<td><?=mhe($row['user_role'])?></td>
					<td><?=date("d/m/Y H:i", strtotime($user_createdat))?></td>
					<td><a class="btn btn-info" href="<?=hlien("user","useredit","id",$row["user_id"])?>">Modifier</a></td>
					<td><a class="btn btn-danger" href="<?=hlien("user","userdelete","id",$row["user_id"])?>">Supprimer</a></td>
				</tr>
				<?php } ?>
			</table>
		<?php } else { ?>
			<p>Aucun contact enregistré.</p>
		<?php } ?>