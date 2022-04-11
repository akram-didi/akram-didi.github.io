<!-- Partie de la barre toujours affichée -->
<div class="navbar-header">
	<!-- Bouton d'accès affiché à droite si la zone d'affichage est trop petite -->
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
		<span class="sr-only">Activer la navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
</div>
<!-- Partie de la barre masquée si la surface d'affichage est insuffisante -->
<div class="collapse navbar-collapse" id="navbar-collapse-target">
	<ul class="nav navbar-nav">
	
		

	
		
			<li><a href="index.php?action=affichePorts">Afficher</a></li>

		<?php	if (isLoggedOn()){ ?>
   <li><a href="index.php?action=crudbateau"><i class="glyphicon glyphicon-list-alt"></i>bateaux</a></li> 
   <li><a href="index.php?action=crudlieu"><i class="glyphicon glyphicon-list-alt"></i>lieu</a></li>
   <li><a href="index.php?action=crudliaison"><i class="glyphicon glyphicon-list-alt"></i>liaison</a></li>
	<li><a href="index.php?action=crudport"><i class="glyphicon glyphicon-list-alt"></i>port</a></li>
	<li><a href="index.php?action=crudtraversee"><i class="glyphicon glyphicon-road"></i>traversee</a></li>	
	<li><a href="index.php?action=crudcategorie"><i class="glyphicon glyphicon-plane"></i>categorie</a></li>	
	<li><a href="index.php?action=deconnexion"> deconnexion</
   <?php } ?>
			
		<li><a href="index.php?action=monProfil"> monProfil</a></li>
		<li><a href="index.php?action=connexion"> connexion</a></li>
		
		
	</ul>
	
</div>


  