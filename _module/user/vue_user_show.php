<h1>Gestion des contacts</h1>
<p><a class="btn btn-warning" href="<?= hlien("user", "edit", "id", 0) ?>">Créer un nouveau compte utilisateur</a></p>
<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>N° référence</th>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Adresse email</th>
		<th>Nom d'utilisateur</th>
		<th>Profil</th>
		<th>Date de création</th>
		<th>Contact</th>
		<th>Modifier</th>
		<th>Supprimer</th>
	</tr>
	<?php
	foreach ($result as $row) {
		extract($row); ?>
		<tr>
			<td><?= mhe($row['user_id']) ?></td>
			<td><?= mhe($row['user_lastname']) ?></td>
			<td><?= mhe($row['user_firstname']) ?></td>
			<td><?= mhe($row['user_email']) ?></td>
			<td><?= mhe($row['user_username']) ?></td>
			<td><?= mhe($row['user_role']) ?></td>
			<td><?= date_format(date_create($row['user_createdat']), "d/m/Y à H:i") ?></td>
			<td>
				<?php 
				$resultNumberOfContacts=Contact::requestToCountContactsForOneUser($row["user_id"]);
				foreach ($resultNumberOfContacts as $numberOfContacts) {
					if ($numberOfContacts['numberofcontacts']!=0)
						echo '<a class="btn btn-info" href="' . hlien("contact", "show", "id", $row["user_id"]) . '">Voir (' . $numberOfContacts['numberofcontacts'] . ')</a>';
					else
						echo "Aucun contact enregistré.";
				}
				?>
			</td>
			<td><a class="btn btn-info" href="<?= hlien("user", "edit", "id", $row["user_id"]) ?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?= hlien("user", "deleteOneUser", "id", $row["user_id"]) ?>">Supprimer</a></td>
		</tr>
	<?php } ?>
</table>