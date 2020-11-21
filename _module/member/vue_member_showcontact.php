<h1>Contact n°<?=mhe($contact_id)?></h1>
<ul>
	<li>Nnom : <?=mhe($contact_lastname)?></li>
	<li>Prénom : <?=mhe($contact_firstname)?></li>
	<li>Description : <?=mhe($contact_description ? $contact_description : "Non renseigné")?></li>
	<li>Adresse postale : <?=mhe($contact_postaladdress ? $contact_postaladdress : "Non renseigné")?></li>
	<li>Adresse email : <?=mhe($contact_email ? $contact_email : "Non renseigné")?></li>
	<li>N° téléphone fixe : <?=mhe($contact_telephone ? $contact_telephone : "Non renseigné")?></li>
	<li>N° mobile : <?=mhe($contact_mobile ? $contact_mobile : "Non renseigné")?></li>
	<li>Créé le <?=date("d/m/Y à H:i", strtotime($contact_createdat))?></li>
</ul>
<nav role="navigation" aria-label="Menu secondaire">
	<ul>
		<li><a class="btn btn-info" href="<?=hlien("member","indexcontact","id",$contact_id)?>">Retour à la liste mes contacts</a></li>
		<li><a class="btn btn-info" href="<?=hlien("member","editcontact","id",$contact_id)?>">Modifier</a></li>
		<li><a class="btn btn-danger" href="<?=hlien("member","deletecontact","id",$contact_id)?>">Supprimer</a></li>
	</ul>
</nav>