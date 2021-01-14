<!-- CODE commentaire -->

<?php 

if (isset($_POST['validation']))
{
    $commentaire = addslashes($_POST['commentaire']);
    $utilisateur = $_SESSION['id'];
    $date = date('Y-m-d\TH:i:s');
    $connexion = mysqli_connect('localhost','root','','livreor');
    $insert_comment= "INSERT INTO commentaires (commentaire, id_utilisateur, date) VALUES ('$commentaire', '$utilisateur', '$date')";
    $query_comment = mysqli_query($connexion,$insert_comment);
  
    mysqli_close($connexion);
}

?>