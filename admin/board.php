<?php 
require("../bdd.php");

?>
<a href="modifier1.php">modifier animal</a>
<a href="inscri.php"> ajout animal</a>
<a href="suppr.php">supprimer</a>
<?php
$reponse = $bdd->query("SELECT * FROM animal"); 
$tableau = $reponse->fetchAll($mode = PDO::FETCH_ASSOC);
//on prépare la requete en donnant des valeurs que l'on nomme temporairement. Cette requete peut être executée quand on le souhaite
$req = $bdd->prepare("INSERT INTO animal(nom_ani, espece_ani, race_ani, age_ani, sexe_ani, image_ani, desc_ani, enfant_ani, date_acceuil_ani, dateado_ani) 
                        VALUES (:nom, :espece, , :age, :sex, :image, :des, :enfant, :dateacceuil, :dateadoption)");
//On execute la requete préparée stockée dans la variable $req en lui injectant un tableau associatif, ou les clés vont d'associer avec les valeurs temporaire (avec les :) de la requete préparée 
foreach($tableau as $animal){
  echo $animal['nom_ani'] ." ". $animal['id_ani']."".$animal['espece_ani'] ."".'<br/>';
 }
/* <form action="action.php" method="GET">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>
<input type="submit" name="submit" value="Submit"> 
*/?>
</br>


