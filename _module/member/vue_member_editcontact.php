<form method="post" action="<?=hlien("member","editcontact")?>" enctype="multipart/form-data" novalidate>
	<input type="hidden" name="contact_id" id="contact_id" value="<?= $id ?>" />
	<fieldset>
		<legend>
			<h1><?=$contact_id ? "Modification du contact" : "Création d’un nouveau contact"?></h1>
		</legend>
		<label for="contact_lastname">
			Nom (obligatoire) 
			<input id="contact_lastname" name="contact_lastname" type="text" size="100" value="<?=mhe($contact_lastname)?>" aria-required="true">
			<span class="error"><?=$vf->getError('contact_lastname')?></span>
		</label>
		<label for='contact_firstname'>
			Prénom (obligatoire) 
			<input id='contact_firstname' name='contact_firstname' type='text' size='50' value="<?=mhe($contact_firstname)?>" aria-required="true">
			<span class="error"><?=$vf->getError('contact_firstname')?></span>
		</label>
		<label for='contact_description'>
			Quelques mots sur le contact
			<textarea id='contact_description' name='contact_description'><?=mhe($contact_description)?></textarea>
		</label>
		<label for='contact_postaladdress'>
			Adresse postale
			<input id='contact_postaladdress' name='contact_postaladdress' type='text' size='50' value='<?=mhe($contact_postaladdress)?>'  class='form-control' />
		</label>
		<label for='contact_email'>
			Adresse email 
			<input id='contact_email' name='contact_email' type='email' size='50' value="<?=mhe($contact_email)?>">
			<span class="error"><?=$vf->getError('contact_email')?></span>
		</label>
		<label for='contact_telephone'>
			N° téléphone fixe 
			<input id='contact_telephone' name='contact_telephone' type='tel' size='50' value="<?=mhe($contact_telephone)?>">
			<span class="error"><?=$vf->getError('contact_telephone')?></span>
		</label>
		<label for='contact_mobile'>
			N° mobile 
			<input id='contact_mobile' name='contact_mobile' type='tel' size='50' value="<?=mhe($contact_mobile)?>" class='form-control' />
			<span class="error"><?=$vf->getError('contact_mobile')?></span>
		</label>
	</fieldset>
	<input type="submit" name="btSubmit" value="<?=$contact_id ? "Modifier les informations du contact" : "Créer un contact"?>" />
</form>