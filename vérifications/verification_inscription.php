<!-- CODE inscription -->

<?php

if (isset($_POST['inscription'])) {
    $login = $_POST["login"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT, array('cost' => 12));
    $connexion = mysqli_connect('localhost','root','','livreor');
    $requete = "SELECT login FROM utilisateurs WHERE login = '$login'";
    $query = mysqli_query($connexion,$requete);
    $resultat = mysqli_fetch_all($query);

    if (!empty($resultat))
    {
        echo "<span class='warning'>Ce login est déjà prit !</span>";
    }
    elseif ($_POST['password'] != $_POST['password_conf'])
    {
        echo "<span class='warning'>/!\ Mot de passe différents /!\\</span>";
    }
    else
    {
        $insert_inscri = "INSERT INTO utilisateurs (login,password) VALUES ('$login','$password')";
        $query_inscri = mysqli_query($connexion,$insert_inscri);
        header('Location:connexion.php');
    }
    mysqli_close($connexion);

}

?>