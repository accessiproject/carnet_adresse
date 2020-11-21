<h1>Gestion des contacts</h1>
<p><a class="btn btn-warning" href="<?= hlien("contact", "contactedit", "id", 0) ?>">Ajouter un nouveau contact</a></p>
<?php if ($result!=null) { ?>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th scope="col">Personne</th>
			<th scope="col">Résumé</th>
			<th scope="col">Utilisateur</th>
			<th scope="col">Voir</th>
			<th scope="col">Modifier</th>
			<th scope="col">Supprimer</th>
		</tr>
		<?php foreach ($result as $row) {
			extract($row); ?>
				<tr>
					<th scope="row"><?=mhe($row['contact_lastname'])?> <?= mhe($row['contact_firstname'])?></th>
					<td><?=mhe($row['contact_description'])?></td>
					<td><?=mhe($row['user_firstname'])?> <?=mhe($row['user_lastname'])?></td>
					<td><a class="btn btn-info" href="<?=hlien("contact","contactshow","id",$row["contact_id"])?>">Voir</a></td>
					<td><a class="btn btn-info" href="<?=hlien("contact","contactedit","id",$row["contact_id"])?>">Modifier</a></td>
					<td><a class="btn btn-danger" href="<?=hlien("contact","contactdelete","id",$row["contact_id"])?>">Supprimer</a></td>
				</tr>
				<?php } ?>
			</table>
		<?php } else { ?>
			<p>Aucun contact enregistré.</p>
		<?php } ?>