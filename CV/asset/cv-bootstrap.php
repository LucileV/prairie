<?php include 'include/header-bootstrap.php' ?>
	<div class="container">
	<div class="container-fluid">
		 <div class="site-wrapper">
		      <div class="site-wrapper-inner">
		        <div class="cover-container">





				<div class="masthead clearfix">
			         <div class="inner">
					     <nav class="navbar navbar-inverse navbar-fixed-top topnav menu">
							  <div class="container-fluid" >
							    <div class="navbar-header collapse navbar-collapse">
							      <a class="navbar-brand" href="http://lucileverrecchia.com" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i>
 								  Book en ligne</a>
							    </div>
							    <ul class="nav navbar-nav dropdown">
							   <li><a href="#competences" class="dropdown-toggle js-scrollTo" data-toggle="dropdown" >Compétences</a></li>
							   <li><a href="#experience" class="dropdown-toggle js-scrollTo" data-toggle="dropdown " >Expérience</a></li>
							   <li><a href="#formation" class="dropdown-toggle js-scrollTo" data-toggle="dropdown" >Formation</a></li>
							   <li><a href="#etudes" class="dropdown-toggle js-scrollTo" data-toggle="dropdown" >Études</a></li>
							   <li><a href="#loisirs" class="dropdown-toggle js-scrollTo" data-toggle="dropdown" >Loisirs</a></li>
							    </ul>
							    <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">Contact Be</button>
							    <button type="button" class="btn btn-lg " data-toggle="modal" data-target="#myModalFr">Contact Fr</button>
							    <div id="social">
								    <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/lverrecchia" target="_blank">
									<span class="fa fa-twitter" fa-twitter"></span></a>
									 <a class="btn btn-social-icon btn-twitter" href="https://www.facebook.com/lucileverrecchiawebdesigner/" target="_blank">
									<span class="fa fa-facebook"></span></a>
									 <a class="btn btn-social-icon btn-twitter" href="https://www.linkedin.com/in/lverrecchia/" target="_blank">
									<span class="fa fa-linkedin"></span></a>
								</div>
							  </div>
								 
						</nav>
			            </div>

		          </div>
				


				<?php include 'include/modals.php' ?>


		          <div class="inner cover"> 
				<?php
    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD']=='POST') {
     
      // (1) Code PHP pour traiter l'envoi de l'email
     
      // Récupération des variables et sécurisation des données
      $name    = htmlentities($_POST['name']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
      $email   = htmlentities($_POST['email']);
      $message = htmlentities($_POST['message']);
     
      // Variables concernant l'email
     
      $destinataire = 'lverrecchia@yahoo.fr'; // Adresse email du webmaster (à personnaliser)
      $sujet = 'Titre du message'; // Titre de l'email
      $contenu = '<html><head><title>Titre du message</title></head><body>';
      $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
      $contenu .= '<p><strong>Nom</strong>: '.$name.'</p>';
      $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
      $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
     
      // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
      $headers = 'MIME-Version: 1.0'."\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
     
      // Envoyer l'email
      mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
      echo '<h3>' .($_POST['name']). ', thanks for your message!</h3>'; // Afficher un message pour indiquer que le message a été envoyé
      // (2) Fin du code pour traiter l'envoi de l'email
    }
    ?>
		
        
		            <h1 class="cover-heading font-weight-bol text-center">Lucile Verrecchia</h1>
		            <div id="slogan">Webdesigner et désormais intégratrice Front-end en devenir</div>
				 <img src="http://lucileverrecchia.com/wp-content/uploads/2009/03/lucileorange-150x150.jpg" class="img-circle img-responsive" alt="Cinque Terre" width="150" height="150"> 
		            <blockquote class="lead text-muted alert-info jumbotron">Infographiste Web depuis plusieurs années en entreprise ainsi qu’entant qu’indépendante, j’ai décidé de suivre en 2007 une formation de 12 mois de concepteur réalisateur de produits en ligne à l’école des Gobelins à Paris. 10 ans plus tard, c’est vers le développement web que j’ai souhaité m’orienter afin d’évoluer dans les métiers du web toujours en évolution.</blockquote>
		            <p >
		              <a href="http://lucileverrecchia.com" class="btn btn-lg btn-secondary btn-default align-center" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i>
 Visit my Website</a>
		            </p>
		          </div>

		        </div>

		      </div>

		</div>

		<section id="competences">
			<h2>Compétences</h2>
			<div class="row">

		 		<div class="col-md-4 well well-lg">
		 			<h4>Graphic Design</h4>
		 			 <div id="title">Photoshop
		 			 	<div class="progress "> 
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span class="sr-only">70% Complete</span>
							</div>
						</div>
					</div>
					<div id="title">Illustrator
		 			 	<div class="progress "> 
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:60%">
							    <span class="sr-only">70% Complete</span>
							</div>
						</div>
					</div>
					<div id="title">InDesign
		 			 	<div class="progress "> 
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:50%">
							    <span class="sr-only">70% Complete</span>
							</div>
						</div>
					</div>
		 		</div>		 		
				
				<div class="col-md-4 well well-lg">
		 			<h4>Web Development</h4>
		 			 <div id="title">Html5 / CSS3
		 			 	<div class="progress "> 
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:57%">
							    <span class="sr-only">70% Complete</span>
							</div>
						</div>
					</div>
					<div id="title">Jquery / Bootstrap / Javascript
		 			 	<div class="progress "> 
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:50%">
							    <span class="sr-only">70% Complete</span>
							</div>
						</div>
					</div>
					<div id="title">PHP / MySQL
		 			 	<div class="progress "> 
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:45%">
							    <span class="sr-only">70% Complete</span>
							</div>
						</div>
					</div>
		 		</div>		 		


				<div class="col-md-4 well well-lg">
		 			<h4>Web Design</h4>
		 			 <div id="title">Création de templates
		 			 	<div class="progress "> 
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span class="sr-only">95% Complete</span>
							</div>
						</div>
					</div>
					<div id="title">Publicité pour le Web
		 			 	<div class="progress "> 
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span class="sr-only">70% Complete</span>
							</div>
						</div>
					</div>
					<div id="title">CMS Wordpress
		 			 	<div class="progress "> 
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
							  aria-valuemin="0" aria-valuemax="100" style="width:60%">
							    <span class="sr-only">60% Complete</span>
							</div>
						</div>
					</div>
		 		</div>		 		

		 		
		    </div>


	 	</section>
	 	<section id="experience">
	 		<div class="table-responsive">
	 		<h2>Expérience</h2>
				<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Années</th>
				        <th>Nom de l'entreprise</th>
				        <th>Tâches</th>
				      </tr>
				    </thead>
				    <tbody class="tablemore">
				      <tr >
				        <td >2007 > 15</td>
				        <td class="bold"> Freelance</td>
				        <td>Web Designer. Réalisations de sites web pour différentes <br> sociétés françaises et canadiennes. <br>
						Publicité online, mise à jour graphique du site <a href="http://www.lastminute.com" target="_blank">Lastminute.com</a>.</td>
				      </tr>
				      <tr>
				        <td>2011 > 13</td>
				        <td class="bold"><a href="http://www.collectif-web.fr/" target="_blank"> Collectif-Web</a>  </td>
				        <td>Pigiste. Rédaction d’articles de presse pour un Webzine féminin.</td>
				      </tr>
				      <tr>
				        <td>2004 > 06</td>
				        <td class="bold">Addvismédia - Paris</td>
				        <td>Web Designer. Agence de e-marking. <br>Publicité en ligne. Banners, mini sites. Actuellement <a href="http://www.nextedia.com/" target="_blank">Nextedia</a>.</td>
				      </tr>
				       <tr>
				        <td>2003 > 04</td>
				        <td>Labotec - Paris</td>
				        <td>Web Designer. Web Agency.</td>
				      </tr>
				       <tr>
				        <td>2008 > 13</td>
				        <td><a href="http://www.rhrexpert.com" target:"_blank">RHR Expert</a> - Montréal</td>
				        <td>Web Master.</td>
				      </tr>
				    </tbody>
				  </table>
			   </div>
			</section>

			<section id="formation" class="scroll">
				<div class="row">
					<h2>Formations récentes en Developpement Web</h2>
					<div class="col-md-6" align="center">
						<h1>Becode</h1>Septembre 2017 à avril 2018 <div id="imgformation"><a href="http://www.becode.org/" target="_blank"><img src="images/becode.png" alt="cepegra" class="img-responsive mg-thumbnail"></a>Stage de 2 mois prévu en avril 2018.
						</div>
						
					</div>
					<div class="col-md-6" align="center">
						<h1>Cepegra</h1>Mai à Juillet 2016 
						<div id="imgformation"><a href="https://formation-cepegra.be/" target="_blank"><img src="images/cepegra.jpg" alt="cepegra" class="img-responsive mg-thumbnail"></a>
						Stage de 1.5 mois chez Havas Media.</div>
						
						
					</div>	

				</div>
			
			</section>

			<section id="etudes">
			<h2>Études</h2>
				<div class="div-responsive">
					<div class="row">
						<div>

						<table class="table table-sm table-inverse">
							  <thead>
							    <tr>
							      
							      <th>Années</th>
							      <th>Écoles ou organismes</th>
							      <th>Disciplines</th>
							      <th align="center"><i class="fa fa-external-link" aria-hidden="true"></i></th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">Avril 2016</th>
							      <td>Bruxelles Formation.</td>
							      <td>Javascript, Jquery.</td>
							      <td><a href="http://www.bruxellesformation.be/" target="_blank"><img src="images/brFormation.jpeg" alt="Bruxelles Formation" class="img-responsive img-thumbnail" width="80px" ></a></td>
							    </tr>
							    <tr>
							      <th scope="row">Fév. 2016, 8 jours</th>
							      <td>
									École de l’image des Gobelins - Paris. <br>	
									Stage de 2 mois - Publicis - Carré Noir.
								  </td>
							      <td>Concepteur de produit online.</td>
							      <td><a href="https://www.gobelins.fr/" target="_blank"><img src="images/gobelins.png" alt="Les Gobelins" class="img-responsive img-thumbnail" width="80px" ></a></td>
							    </tr>
							    <tr>
							      <th scope="row">2006 > 07</th>
							      <td>École Supérieure des Arts Appliqué - MJM - Paris.</td>
							      <td>Formations P.A.O. et Multimédia.
							      </td>
							      <td><a href="http://www.mjm-design.com/" target="_blank"><img src="images/mjm.png" alt="MJM Graphic Design" class="img-responsive img-thumbnail" width="80px" ></a></td>
							    </tr>
							    <tr>
							      <th scope="row">1996 > 99</th>
							      <td>École de dessin Maximilien Vox - Paris.</td>
							      <td><b>Équivalence CESS / BAC.</b><br>Brevet de technicien dessinateur maquettiste.</td>
							      <td>
							      	<a href="http://www.lyceemaximilienvox.com/" target="_blank"><img src="images/max.jpeg" alt="Lycée Maximilien Vox" class="img-responsive img-thumbnail" width="80px" >
							      	</a>
							      </td>
							    </tr>					
							  </tbody>
							</table>


						</div>
					
					</div>
				</div>
			</section>

			<section id="loisirs">
			<h2>Loisirs</h2>
			<ul>
				<li>Culture : Musées d’art contemporain, expostions de
				photographies, théatre d’improvisation, festivals et concerts.</li>
				<li>Loisirs : Voyages et langues, montagne et sports de
				glisses. Badminton, tennis et natation.</li>
				<li>Hobby du quotidien : Ma fille de 3 ans.</li>
			</ul>
				


			</section>
			
		
		</div>
	
<?php include 'include/footer-bootstrap.php' ?>
