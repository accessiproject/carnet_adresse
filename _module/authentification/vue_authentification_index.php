<h3>Authentification </h3>
<?php if (isset($_GET["para"]))
	echo "<div class='alert alert-primary' role='alert'>Erreur d'authentification</div>";
?>
<form method="post" action="<?php echo hlien("authentification","index")?>">			
	<div class="form-group row">
		<div class="col-md-2"><label for="user_email">Mail : </label></div>
		<div class="col-md-6"><input type="text" id="user_email" name="user_email"></div>
	</div>						
	<div class="form-group row">
		<div class="col-md-2"><label for="user_password">Mot de passe : </label></div>
		<div class="col-md-6"><input type="password" id="user_password" name="user_password"></div>
	</div>						
	<div class="form-group row">
		<input class="btn btn-success" type="submit" value="Enregistrer" name="btSubmit" >&nbsp;
		<input class="btn btn-danger" type="reset" value="Annuler" name="btReset" >
	</div>
</form>

