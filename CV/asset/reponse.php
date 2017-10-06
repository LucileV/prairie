<?php include 'include/header.php' ?>




<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">                        
          <h2>Contact</h2>
        </div>
    </div>
    <form action="reponse.php" method="post">
          <div class="row">
              <h4><?php echo $_POST['name']; ?> , votre message a bien été envoyé !</h4>
          </div>

    <?php
    $destinataire = '<lverrecchia@yahoo class="fr"></lverrecchia@yahoo>';
    $sujet = 'Envoi d\'un mail';
    $message = 'Bla... bla... bla...';
    $header = 'From: "Mon site"<adresse@fai.fr>'."\r\n\r\n";             
                     
       mail($destinataire, $sujet, $message, $header);
    ?>


</div>
<?php include 'include/footer.php' ?>