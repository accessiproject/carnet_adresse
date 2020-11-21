<form method="post" action="<?php echo hlien("authentification","index")?>">			
	<fieldset>
		<legdend>
			<h1>Espace d’authentification</h1>
		</legend>
		<?php if (isset($_GET["para"]))
			echo "<div class='alert alert-primary' role='alert'>Erreur d'authentification</div>"; ?>
		<label for="user_email">Adresse email :
			<input type="text" id="user_email" name="user_email" aria-required="true">
		</label>
		<label for="user_password">Mot de passe :
			<input type="password" id="user_password" name="user_password" aria-required="true">
		</label>
		<input class="btn btn-success" type="submit" value="Se connecter" name="btSubmit" >&nbsp;
	</fieldset>
</form>