<?php require("User.php"); ?>

<html>
    <head>
    </head>
    <body>
        <?php echo "<h1>Bienvenu dans l'arrene</h1>";

            $Utilsateur1 = new User();
          
           
           
           

        ?>
           <form method="POST" action="">
                <input type="text" name="nom" value='tata'>
                <input type="text" name="mdp" value='1010'>
                <input type="submit" value="ok">
           </form>

           <?php
                if (isset($_POST['nom'])){
                    $isConnect = $Utilsateur1->verifMpd($_POST['nom'],$_POST['mdp']);
                    if($isConnect){echo "connecté";
                    
                        try{
                            //execution du code sur la BDD exemple
                           $maBase=new PDO('mysql:host=127.0.0.1;dbname=exot;charset=utf8', 'root', '');
                           
                           $ResultRequet = $maBase->query("select * from user"); 
                           echo "<table>";
                           while ($TableauDeDonnee = $ResultRequet->fetch())
                            {
                                echo "<tr>";
                                echo '<td>'.$TableauDeDonnee["nom"].' </td><td> '.$TableauDeDonnee["mdp"].'</td>' ;
                                echo "<tr>";
                            }
                            $ResultRequet->closeCursor();
                            echo "</table>";

                        }
                        catch (Exception $erreur){
                            echo $erreur->getMessage();
                         }
                    
                    
                    
                    }else{echo "erreur";}
                }
            
                
           ?>

        
    </body>
</html>
