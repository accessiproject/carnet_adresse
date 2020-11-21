<h1>Mon profil</h1>
<ul>
	<li>Prénom : <?=$profil['user_firstname']?></li>
	<li>Nom : <?=$profil['user_lastname']?></li>
	<li>Adresse ema,l : <?=$profil['user_email']?></li>
	<li>Profil : <?=$profil['user_role']?></li>
	<li>Créé le <?=date("d/m/Y à H:i", strtotime($profil['user_createdat']))?></li>
</ul>
<nav>
	<ul>
		<li><a class="btn btn-info" href="<?=hlien("member","editprofil","id",$_SESSION['user_id'])?>">Modifier</a></li>
		<li><a class="btn btn-info" href="<?=hlien("member","showprofil","id",$_SESSION['user_id'])?>">Supprimer</a></li>
	</ul>
</nav>