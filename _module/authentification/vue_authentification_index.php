<h3>Authentification </h3>
<?php if (isset($_GET["para"]))
	echo "<div class='alert alert-primary' role='alert'>Erreur d'authentification</div>";
?>
<form method="post" action="<?php echo hlien("authentification","index")?>">			
	<div class="form-group row">
		<div class="col-md-2"><label for="uti_login">login : </label></div>
		<div class="col-md-6"><input type="text" id="uti_login" name="uti_login"></div>
	</div>						
	<div class="form-group row">
		<div class="col-md-2"><label for="uti_mdp">Mot de passe : </label></div>
		<div class="col-md-6"><input type="password" id="uti_mdp" name="uti_mdp"></div>
	</div>						
	<div class="form-group row">
		<input class="btn btn-success" type="submit" value="Enregistrer" name="btSubmit" >&nbsp;
		<input class="btn btn-danger" type="reset" value="Annuler" name="btReset" >
	</div>
</form>

