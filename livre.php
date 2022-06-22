<?php
require("header.php");
require("bdd.php"); 

$reponse = $bdd->query("SELECT * FROM livre");

$tableau = $reponse->fetchAll($mode = PDO::FETCH_ASSOC);


?>


<?php foreach ($tableau as $livre)
{
  ?>
<div class="container groupe">




        <div class="card" style="width: 30%;">
            <img src="images/<?php echo $livre['image']; ?>" class="card-img-top" alt="..."  >
            <div class="card-body">
              <h5 class="card-title"><?php echo $livre['auteur']; ?></h5>
              <p class="card-text"><?php echo ucfirst($livre['titre']). " " . $sexe . " agé de ". $animal['age_ani']. " ans." ; ?></p>
              <a href="pageperso.php?id=<?php echo $animal['id']; ?>" class="btn" style="background:#802B75; color:white;">Consulter la page de <?php echo $livre['titre']; ?> </a>
            </div>
        </div>



</div>
<?php }?>
<? foreach ($tableau as $livre){?>
<div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $auteur['nom']; ?></h5>
              <a href="pageperso.php?id=<?php echo $auteur['id']; ?>" class="btn" style="background:#802B75; color:white;">Consulter la page de <?php echo $auteur['PAYS']; ?> </a>
            </div>
</div>
<?php }>
require("footer.php");

?>