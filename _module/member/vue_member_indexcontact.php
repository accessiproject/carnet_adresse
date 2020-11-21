<h1>Gestion des contacts</h1>
<p><a class="btn btn-info" href="<?=hlien("member","editcontact","id",0)?>">Ajouter un contact</a></p>
<table class="table table-striped table-bordered table-hover">
	<tr>
		<th scope="col">Personne</th>
		<th scope="col">Résumé</th>
		<th scope="col">Voir</th>
		<th scope="col">Modifier</th>
		<th scope="col">Supprimer</th>		</tr>
		<?php foreach ($contacts as $row) {
			if ($row!=NULL) {
				extract($row); ?>
				<tr>
					<th scope="row"><?=mhe($row['contact_lastname'])?> <?= mhe($row['contact_firstname'])?></th>
					<td><?=mhe($row['contact_description'])?></td>
					<td><a class="btn btn-info" href="<?=hlien("member","showcontact","id",$row["contact_id"])?>">Voir</a></td>
					<td><a class="btn btn-warning" href="<?=hlien("member","editcontact","id",$row["contact_id"])?>">Modifier</a></td>
					<td><a class="btn btn-danger" href="<?=hlien("member","deletecontact","id",$row["contact_id"])?>">Supprimer</a></td>
				</tr>
				<?php } else { ?>
					<tr><td>Aucun contact enregistré.</td></r>
				<?php } } ?>
	</table>