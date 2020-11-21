<form method="post" action="<?= hlien("member", "editprofil") ?>">
    <h1><?=$user_id ? "Modification du compte utilisateur" : "Création d’un nouveau ccompte utilisateur"?></h1>
    <p>
        <label for="user_lastname">Nom :
			<input id="user_lastname" name="user_lastname" type="text" size="50" value="<?= mhe($user_lastname) ?>"" />
			<span class="error"><?=$vf->getError('user_lastname')?></span>
		</label>
    </p>
    <p>
        <label for="user_firstname">Prénom :
        <input id="user_firstname" name="user_firstname" type="text" size="50" value="<?= mhe($user_firstname) ?>"" />
			<span class="error"><?=$vf->getError('user_firstname')?></span>
		</label>
    </p>
    <p>
        <label for="user_email">Adresse email :
        <input id="user_email" name="user_email" type="email" size="50" value="<?= mhe($user_email) ?>"" class=" form-control" />
			<span class="error"><?=$vf->getError('user_email')?></span>
		</label>
    </p>
    <p>
        <label for='user_password'>Mot de passe :
        <input id='user_password' name='user_password' type='text' size='50' value='<?= mhe($user_password) ?>' class='form-control' />
		<span class="error"><?=$vf->getError('user_password')?></span>
		</label>
    </p>
    <input class=" btn btn-success" type="submit" name="btSubmit" value="<?=$user_id ? "Modifier les informations du compte utilisateur" : "Créer le compte utilisateur"?>" />
</form>