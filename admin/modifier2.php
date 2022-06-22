<?php   require ("../bdd.php");
       $nom = $_POST["nom"];
        $espece = $_POST['espece'];
       $race = $_POST['race'];
       $sexe = $_POST['sexe'];
       $img = $_POST['image'];
        $dateacceuil = $_POST['dateacceuil'];
        $dateadoption = $_POST['dateadoption'];
        $descr = $_POST['desc'];
         $enfant = $_POST['enfant'];
         $age = $_POST['age'];
$id = $_POST["ani_id"];

//on prépare la requete en donnant des valeurs que l'on nomme temporairement. Cette requete peut être executée quand on le souhaite
$req = $bdd->prepare("INSERT INTO animal(nom_ani, espece_ani, race_ani, age_ani, sexe_ani, img_ani, desc_ani, enfant_ani, dateaccueil_ani, dateado_ani , fk_ref, fk_cli) 
                        VALUES (:nom, :espece, :race, :age, :sexe, :img, :descr, :enfant, :dateacceuil, :dateadoption, :fk_ref, :fk_cli)");
//On execute la requete préparée stockée dans la variable $req en lui injectant un tableau associatif, ou les clés vont d'associer avec les valeurs temporaire (avec les :) de la requete préparée                        
$result = $req->execute(array( 'nom' => $nom, 
                    'espece' => $espece, 
                    'race' => $race, 
                    'age' => $age, 
                    'sexe' => $sexe, 
                    'img' =>  $img, 
                    'descr' => $descr, 
                    'enfant' =>$enfant,
                    'dateacceuil'=>$dateacceuil,
                    'dateadoption'=>$dateadoption, 
                    'fk_ref'=>1,
                    'fk_cli'=>1));


$bdd->exec("DELETE FROM animal WHERE id_ani = $id");
header('Location:board.php');