<?php
  include("../connexion.php");

  if(isset($_POST)){
    $sql           =   $bdd  ->  query("SELECT Id_service FROM Service WHERE Nom_service = '".$_POST['service']."'");
    $Id_service    =   $sql  ->  fetch();

    $sql           =   $bdd  ->  query("SELECT Nom , Prenom FROM Personne WHERE Id_service = '".$Id_service[0]."'");

    while($membre  =   $sql  ->  fetch()){
       echo("<th colspan='3' border=4>".$membre['Nom'].' '.$membre['Prenom']."</th>");
    }
  }
