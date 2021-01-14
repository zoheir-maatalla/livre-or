<!-- CODE connexion -->

<?php 

if (isset($_POST['connexion']))
{
    if (isset($_POST['login']) && isset($_POST['password']))
    {
        $connexion = mysqli_connect("localhost", "root", "", "livreor");
        $requete = "SELECT * FROM utilisateurs WHERE login ='" . $_POST['login'] . "'";
        $query = mysqli_query($connexion,$requete);;
        $resultat = mysqli_fetch_assoc($query);

        if (!empty($resultat))
        {
            if (password_verify($_POST['password'],$resultat['password']))
            {
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['id'] = $resultat['id'];
                header('Location:index.php');
            }
            else
            {
                echo "<span class='warning'>/!\ Votre mot de passe n'est pas bon /!\\</span>";
            }
        }
        else
        {
            echo "<span class='warning'>/!\ Votre nom d'utilisateur n'existe pas /!\\</span>"; 
        }
        mysqli_close($connexion);
    }
}

?>