<?php
require ('../bdd.php');
$id = $_POST["ani_id"];
$bdd->exec("DELETE FROM animal WHERE id_ani = $id");
header('Location:board.php');