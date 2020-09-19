<nav class="navbar  navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="sr-only">Afficher le menu</span> <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">&nbsp;</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">        
      </ul>
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