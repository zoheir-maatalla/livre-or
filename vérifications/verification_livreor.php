<!-- CODE commentaire -->

<?php

$connexion = mysqli_connect("localhost", "root", "", "livreor");
$requete = "SELECT commentaire,date,login FROM commentaires JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id ORDER BY date ASC";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query, MYSQLI_ASSOC);

$taille = sizeof($resultat);

$j = 0;
while ($j < $taille) 
{
    $date = date('d-m-Y à H:i:s', strtotime($resultat[$j]['date']));
    $log = "<span class='login'>@".$resultat[$j]['login']."</span>";
    echo "<h1> Posté le " .$date." par ".$log." :<br></h1><p>".$resultat[$j]['commentaire']."</p>"; 
    $j = $j + 1;
}

mysqli_close($connexion);

?>