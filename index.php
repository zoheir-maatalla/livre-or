<? php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/livre-or.css">
    <title>index</title>
</head>
<body>
    <header class= "hetf">
        <nav>
          <ul>
            <li> <a href="index.php"><img src='img/logo-accueil.png'></a> </li>
            <?php include "header.php" ?>
          </ul>
        </nav>

       
    </header>
    
    <main>
    <section id="accueil">
        <?php if ( isset($_SESSION['login'])): ?>   
                <h1> Bienvenue <?php echo $_SESSION ['login'] ?>, </h1>
                <aside><img src="img/019.png" >  </aside>
                <p id= 'p1'> sur mon livre d'or </p>
                <p id= 'p2'> un petit mot de votre part me fera plaisir </p>
            
        <?php else :?>

           <h1> Bienvenue </h1>
           <p id= 'p1'> sur mon livre d'or </p>
           <p id= 'p2'>  un petit mot de votre part me fera plaisir </p> 
        </br>
           <aside><img src="img/020.PNG">  </aside>
        <?php endif; ?>
    </section>


    </main>
    <footer class= "hetf">
        <nav>
        <ul>
            <?php include "footer.php"?>
        </ul>
    <aside>
     <p> Copyright 2021 Coding School | All Rights Reserved | Project by MATAZOHR </p>
    </aside>
        </nav>
    </footer>
</body>

</html>