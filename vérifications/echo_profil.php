<?php

if (isset($_POST['Modifier'])) {
    if ($erreur_oldpassword == 1) {
        echo "<span class='warning'>/!\ Mot de passe actuel incorrect ! /!\</span>";
    } else {
        if ($erreur_log == 1) {
            echo "<span class='warning'>Désolée, " . $login . " est déjà pris !</span>";
        }
        if ($erreur_password == 1) {
            echo "<span class='warning'>/!\ Mot de passe différents ! /!\ </span>";
        }
        if ($modif_log == 1) {
            if ($modif_password == 1) {
                echo "Validation des différentes modifications.";
            } else {
                echo "Validation du nouveau Login.";
            }
        } elseif ($modif_password == 1) {
            echo "Validation du nouveau mot de passe. ";
        }
    }
}
