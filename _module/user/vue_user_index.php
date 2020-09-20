<h1>Gestion des comptes utilisateurs</h1>
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
<script src="_js/test.js"></script>
<script>

//fonction pour initialiser l'appel ajax
function getXmlhttp() {
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	else if (window.ActiveXObject)
		return new ActiveXObject("Msxml2.XMLHTTP");
	else
		throw new Error("Could not create HTTP request object.");
}

function show() {
	var xmlhttp;
	//récupération de la date de début et de la date de fin
	let fin = date_fin.value + " " + heure_fin.value
	let debut = date_debut.value + " " + heure_debut.value
	//calcul de la durée (en heures) d'une location à partir des deux dates récupérées
	date1 = new Date(debut)
	date2 = new Date(fin)
	var diffEnMilliseconde = date2-date1
	var diffEnHeures = ((date2-date1)/1000)/3600
	//creation du paramètre
	var para="cat="+loc_categorie.value + "&" + "nbh=" + diffEnHeures;
	xmlhttp= getXmlhttp();
	xmlhttp.open("GET","http://kevin/locacar/www/index.php?m=location&a=ajaxcalcultarif&" + para,true);
	xmlhttp.onreadystatechange=mafonction;
	xmlhttp.send();
	
	function mafonction() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("resultatprixhorsoption").innerHTML += xmlhttp.responseText;
			tarif=xmlhttp.responseText;
		}
	}
}

</script>