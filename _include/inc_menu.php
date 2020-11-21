<nav class="navbar  navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">&nbsp;</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <?php if ($_SESSION["user_role"]=="user") { ?>
          <ul class="nav navbar-nav">
            <li><a href='<?=hlien("accueil","index")?>'>Accueil</a></li>
            <li>
				<a href='<?=hlien("member","showprofil")?>'>Mon profil</a>
			</li>
			<li>
				<a href='<?=hlien("member","indexcontact")?>'>Mes contacts</a>
			</li>
			<li>
				<a href='<?=hlien("member","editcontact","id",0)?>'>Ajouter un contact</a>
			</li>
          </ul>
<ul class="nav navbar-nav navbar-right">
          <li><a href="<?=hlien("authentification","deconnexion")?>">Déconnexion</a></li>
        </ul>
      <?php } else if($_SESSION["user_role"]=="admin") { ?>
        <ul class="nav navbar-nav">
          <li><a href="/">Accueil</a></li>
          <li><a href='<?=hlien("contact","contactindex")?>'>Contact</a></li>
          <li><a href='<?=hlien("user","userindex")?>'>Compte utilisateur</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?=hlien("authentification","deconnexion")?>">Déconnexion</a></li>
        </ul>
      <?php } ?>
    </div>
  </div>
</nav>

<script>
    tab=document.querySelectorAll(".nav > li > a");
    const module="<?=ucfirst($this->module)?>";
    tab.forEach(function(obj) {
        if (obj.innerHTML===module) {
            obj.parentElement.className="menusel";
            return true;
        }
    });
</script>