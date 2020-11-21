<form method="post" action="<?= hlien("user", "useredit") ?>">
    <input type="hidden" name="user_id" id="user_id" value="<?= $id ?>" />
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
    <div>
        <p>Sélectionner le profil de l'utilisateur :</p>
        <input type="radio" id="radio_user" name="user_role" value="user" <?=($user_role=="user")? "checked":""?> />
        <label for="radio_user">Compte utilisateur</label>
        <input type="radio" id="radio_admin" name="user_role" value="admin" <?=($user_role=="admin")? "checked":""?> />
        <label for="radio_admin">Compte administrateur</label>
    </div>
    <input class=" btn btn-success" type="submit" name="btSubmit" value="<?=$user_id ? "Modifier les informations du compte utilisateur" : "Créer le compte utilisateur"?>" />
</form>