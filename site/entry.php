



<?php

 $recettelink = mysqli_connect("localhost", "root", "root", "evalecfback");  

 $recette = mysqli_query($recettelink , "SELECT * FROM recette");


?>





<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:register.php?action=login");  
 }  

 ?> 




  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Recettes</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body style="background-color: #c5c5c5;">  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h2 align="center">Liste de tout les recettes</h2>  
                <br />  
                <?php  
                echo '<h1>Bienvenue '.$_SESSION["username"].'</h1>';  
                echo '<label><a href="logout.php">Logout</a></label>';
                ?> 
                
              
                
                <br><br><br>




               <?php


               $recette = mysqli_query($recettelink , "SELECT * FROM recette");
               if (mysqli_num_rows($recette) == 0){
                    echo "Aucune recettes pour l'instant";
               }else {

/*
                    var_dump(
                         $_SESSION["gluten"],
                         $_SESSION["crustaces"],
                         $_SESSION["oeufs"],
                         $_SESSION["poissons"],
                         $_SESSION["arachides"],
                         $_SESSION["soja"],
                         $_SESSION["lait"],
                         $_SESSION["fruitsacoques"],
                         $_SESSION["celeri"],
                         $_SESSION["moutarde"],
                         $_SESSION["grainesdesesame"],
                         $_SESSION["anhydridesulfureuxetsulfites"],
                         $_SESSION["lupin"],
                         $_SESSION["mollusques"]
                       
                    );

*/
                              
                         while($row=mysqli_fetch_assoc($recette)){     


                              if($_SESSION["gluten"] == 1 AND $row["gluten"] == 1 ){
                                   echo '1 ';
                              }
                              else{

                                   if($_SESSION["crustaces"] == 1 AND $row["crustaces"] == 1){
                                        echo '1 ';
                                   }
                                   else{

                                        if($_SESSION["oeufs"] == 1 AND $row["oeufs"] == 1 ){
                                             echo '1 ';
                                        }
                                        else{

                                             if($_SESSION["poissons"] == 1 AND $row["poissons"] == 1){
                                                  echo ' 1';
                                             }
                                             else{

                                                  if($_SESSION["arachides"] == 1 AND $row["arachides"] == 1){
                                                       echo '1 ';
                                                  }
                                                  else{

                                                       if($_SESSION["soja"] == 1 AND $row["soja"] == 1){
                                                            echo '1 ';
                                                       }
                                                       else{

                                                            if($_SESSION["lait"] == 1 AND $row["lait"] == 1){
                                                                 echo '1 ';
                                                            }
                                                            else{

                                                                 if($_SESSION["fruitsacoques"] == 1 AND $row["fruitsacoques"] == 1){
                                                                      echo '1 ';
                                                                 }
                                                                 else{

                                                                      if($_SESSION["celeri"] == 1 AND $row["celeri"] == 1){
                                                                           echo '1 ';
                                                                      }
                                                                      else{
     
                                                                           if($_SESSION["moutarde"] == 1 AND $row["moutarde"] == 1){
                                                                                echo '1 ';
                                                                           }
                                                                           else{
          
                                                                                if($_SESSION["grainesdesesame"] == 1 AND $row["grainesdesesame"] == 1){
                                                                                     echo ' 1';
                                                                                }
                                                                                else{
               
                                                                                     if($_SESSION["anhydridesulfureuxetsulfites"] == 1 AND $row["anhydridesulfureuxetsulfites"] == 1){
                                                                                          echo '1 ';
                                                                                     }
                                                                                     else{
                    
                                                                                          if($_SESSION["lupin"] == 1 AND $row["lupin"] == 1){
                                                                                               echo '1 ';
                                                                                          }
                                                                                          else{
                         
                                                                                               if($_SESSION["mollusques"] == 1 AND $row["mollusques"] == 1){
                                                                                                    echo '1 ';
                                                                                               }
                                                                                               else{
                                                                                                    ?>



                              <h2><?php echo $row["namerecette"]; ?></h2>
                              <br>
                              <h4><?php echo $row["ing"]; ?></h4>
                              <br>
                              <p><?php echo $row["descrip"]; ?></p>
                              <br>

                                                                                               
                                                                                               
                                                                                               <?php
                                                                                                    
                              
                                                                                               }
                         
                                                                                          }
                     
                    
                                                                                     }
               
               
                                                                                }
          
          
                                                                           }
     
                                                                      }

                                                                      

                                                                 }

                                                            }

                                                       }

                                                  }

                                             }


                                        }


                                   }

                              }
                        

                         
                       
 

                         
                         
                         }
          
          
               }

               ?>


           </div>  
      </body>  
 </html>  