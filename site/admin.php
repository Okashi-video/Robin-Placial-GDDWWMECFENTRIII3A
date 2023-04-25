<?php  
 $connect = mysqli_connect("localhost", "root", "root", "evalecfback");  
 
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = password_hash($password, PASSWORD_DEFAULT); 
           
//-----------------------------------------------------------------------------------           
           $glutenadd = 0;


           if (empty($_POST['gluten'])) {
               $glutenadd = 0;
             } else {
               $glutenadd = 1;
             }

//---------------------------------------------------------------------------------------


             $crustacesadd = 0;


               if (empty($_POST['crustaces'])) {
                    $crustacesadd = 0;
               } else {
                    $crustacesadd = 1;
               }

//-------------------------------------------------------------------------------------------



               $oeufsadd = 0;


               if (empty($_POST['oeufs'])) {
                    $oeufsadd = 0;
               } else {
                    $oeufsadd = 1;
               }
//--------------------------------------------------------------------------------------------

               $poissonsadd = 0;


               if (empty($_POST['poissons'])) {
               $poissonsadd = 0;
               } else {
               $poissonsadd = 1;
               }


//----------------------------------------------------------------------------------------------

               $arachidesadd = 0;


               if (empty($_POST['arachides'])) {
               $arachidesadd = 0;
               } else {
               $arachidesadd = 1;
               }


//-----------------------------------------------------------------------------------------------

               $sojaadd = 0;


               if (empty($_POST['soja'])) {
               $sojaadd = 0;
               } else {
               $sojaadd = 1;
               }

//-----------------------------------------------------------------------------------------------

               $laitadd = 0;


               if (empty($_POST['lait'])) {
               $laitadd = 0;
               } else {
               $laitadd = 1;
               }

//-----------------------------------------------------------------------------------------------

               $fruitsacoquesadd = 0;


               if (empty($_POST['fruitsacoques'])) {
               $fruitsacoquesadd = 0;
               } else {
               $fruitsacoquesadd = 1;
               }

//-----------------------------------------------------------------------------------------------

               $celeriadd = 0;


               if (empty($_POST['celeri'])) {
               $celeriadd = 0;
               } else {
               $celeriadd = 1;
               }

//-----------------------------------------------------------------------------------------------

               $moutardeadd = 0;


               if (empty($_POST['moutarde'])) {
               $moutardeadd = 0;
               } else {
               $moutardeadd = 1;
               }

//-----------------------------------------------------------------------------------------------

               $grainesdesesameadd = 0;


               if (empty($_POST['grainesdesesame'])) {
               $grainesdesesameadd = 0;
               } else {
               $grainesdesesameadd = 1;
               }

//-----------------------------------------------------------------------------------------------

               $anhydridesulfureuxetsulfitesadd = 0;


               if (empty($_POST['anhydridesulfureuxetsulfites'])) {
               $anhydridesulfureuxetsulfitesadd = 0;
               } else {
               $anhydridesulfureuxetsulfitesadd = 1;
               }

//-----------------------------------------------------------------------------------------------

               $lupinadd = 0;


               if (empty($_POST['lupin'])) {
               $lupinadd = 0;
               } else {
               $lupinadd = 1;
               }

//-----------------------------------------------------------------------------------------------

               $mollusquesadd = 0;


               if (empty($_POST['mollusques'])) {
               $mollusquesadd = 0;
               } else {
               $mollusquesadd = 1;
               }

//-----------------------------------------------------------------------------------------------

           $query = "INSERT INTO account(username, password, gluten, crustaces, oeufs, poissons, arachides, soja, lait, fruitsacoques, celeri, moutarde, grainesdesesame, anhydridesulfureuxetsulfites, lupin, mollusques) VALUES('$username', '$password', '$glutenadd', '$crustacesadd', '$oeufsadd', '$poissonsadd', '$arachidesadd', '$sojaadd', '$laitadd', '$fruitsacoquesadd', '$celeriadd', '$moutardeadd', '$grainesdesesameadd', '$anhydridesulfureuxetsulfitesadd', '$lupinadd', '$mollusquesadd')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  





 $connect2 = mysqli_connect("localhost", "root", "root", "evalecfback");  

if(isset($_POST["addrecette"]))  
{  
     if(empty($_POST["namerecette"]) || empty($_POST["descrip"]))  
     {  
          echo '<script>alert("Both Fields are required")</script>';  
     }  
     else  
     {  
          $namerecette = mysqli_real_escape_string($connect, $_POST["namerecette"]); 
          $descrip = mysqli_real_escape_string($connect, $_POST["descrip"]);
          $ing = mysqli_real_escape_string($connect, $_POST["ing"]);
          

          
          
//-----------------------------------------------------------------------------------           
          $glutenaddr = 0;


          if (empty($_POST['gluten'])) {
              $glutenaddr = 0;
            } else {
              $glutenaddr = 1;
            }

//---------------------------------------------------------------------------------------


            $crustacesaddr = 0;


              if (empty($_POST['crustaces'])) {
                   $crustacesaddr = 0;
              } else {
                   $crustacesaddr = 1;
              }

//-------------------------------------------------------------------------------------------



              $oeufsaddr = 0;


              if (empty($_POST['oeufs'])) {
                   $oeufsaddr = 0;
              } else {
                   $oeufsaddr = 1;
              }
//--------------------------------------------------------------------------------------------

              $poissonsaddr = 0;


              if (empty($_POST['poissons'])) {
              $poissonsaddr = 0;
              } else {
              $poissonsaddr = 1;
              }


//----------------------------------------------------------------------------------------------

              $arachidesaddr = 0;


              if (empty($_POST['arachides'])) {
              $arachidesaddr = 0;
              } else {
              $arachidesaddr = 1;
              }


//-----------------------------------------------------------------------------------------------

              $sojaaddr = 0;


              if (empty($_POST['soja'])) {
              $sojaaddr = 0;
              } else {
              $sojaaddr = 1;
              }

//-----------------------------------------------------------------------------------------------

              $laitaddr = 0;


              if (empty($_POST['lait'])) {
              $laitaddr = 0;
              } else {
              $laitaddr = 1;
              }

//-----------------------------------------------------------------------------------------------

              $fruitsacoquesaddr = 0;


              if (empty($_POST['fruitsacoques'])) {
              $fruitsacoquesaddr = 0;
              } else {
              $fruitsacoquesaddr = 1;
              }

//-----------------------------------------------------------------------------------------------

              $celeriaddr = 0;


              if (empty($_POST['celeri'])) {
              $celeriaddr = 0;
              } else {
              $celeriaddr = 1;
              }

//-----------------------------------------------------------------------------------------------

              $moutardeaddr = 0;


              if (empty($_POST['moutarde'])) {
              $moutardeaddr = 0;
              } else {
              $moutardeaddr = 1;
              }

//-----------------------------------------------------------------------------------------------

              $grainesdesesameaddr = 0;


              if (empty($_POST['grainesdesesame'])) {
              $grainesdesesameaddr = 0;
              } else {
              $grainesdesesameaddr = 1;
              }

//-----------------------------------------------------------------------------------------------

              $anhydridesulfureuxetsulfitesaddr = 0;


              if (empty($_POST['anhydridesulfureuxetsulfites'])) {
              $anhydridesulfureuxetsulfitesaddr = 0;
              } else {
              $anhydridesulfureuxetsulfitesaddr = 1;
              }

//-----------------------------------------------------------------------------------------------

              $lupinaddr = 0;


              if (empty($_POST['lupin'])) {
              $lupinaddr = 0;
              } else {
              $lupinaddr = 1;
              }

//-----------------------------------------------------------------------------------------------

              $mollusquesaddr = 0;


              if (empty($_POST['mollusques'])) {
              $mollusquesaddr = 0;
              } else {
              $mollusquesaddr = 1;
              }

//-----------------------------------------------------------------------------------------------

               $po = 0;


               if (empty($_POST['po'])) {
               $po = 0;
               } else {
               $po = 1;
               }

//-----------------------------------------------------------------------------------------------





          $queryrecette = "INSERT INTO recette(namerecette, ing, descrip, po, gluten, crustaces, oeufs, poissons, arachides, soja, lait, fruitsacoques, celeri, moutarde, grainesdesesame, anhydridesulfureuxetsulfites, lupin, mollusques) VALUES('$namerecette', '$ing', '$descrip', '$po', '$glutenaddr', '$crustacesaddr', '$oeufsaddr', '$poissonsaddr', '$arachidesaddr', '$sojaaddr', '$laitaddr', '$fruitsacoquesaddr', '$celeriaddr', '$moutardeaddr', '$grainesdesesameaddr', '$anhydridesulfureuxetsulfitesaddr', '$lupinaddr', '$mollusquesaddr')";  
          if(mysqli_query($connect, $queryrecette))  
          {  
               echo '<script>alert("Registration Done")</script>';  
          }  
     }  
}  



?>
















<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:login.php?action=login");  
 }  

 ?> 




  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Recettes</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

           <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style: none;
    font-family: 'baloo-bhaina-regular', sans-serif;
}


header {
    height: 100vh;
    width: 100vw;
    background-image: url(./img/blueberries-g450504b5e_1920.jpg);
    background-size: cover;
}


.split {
     width: 50%;
     height: 100%;
     top: 0;
     position: fixed;
}

.left {
     left: 0;
}





           </style>
      </head>  
      <body>  

   
    
    <header>


           <br /><br />  
           <div class="container" style="width:500px;">  
                <br />  
               
                
              
                
                <br><br><br><br>









<div class="split left">
     <div class="content">
     <?php  
                echo '<h1 align="center">Bienvenue '.$_SESSION["username"].' Admin</h1>';
               

                echo '<h4 align="center"><label align="center"><a align="center" href="logout.php">Logout</a></label></h4>';
                ?> 


                <h3 align="center">Ajouter un patient</h3>  


           <div class="container" style="width:500px;">  
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <br />  
                
                <?php       
                }  
                else  
                {  
                ?>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="text" name="password" class="form-control" />  
                     <br />  
                     <br>
                     
                     
                     <input type="checkbox" name="gluten" value="gluten"  /> Gluten<br />
                     <input type="checkbox" name="crustaces" value="crustaces" /> Crustacés<br />
                     <input type="checkbox" name="oeufs" value="oeufs" /> Oeufs<br />
                     <input type="checkbox" name="poissons" value="poissons" /> Poissons<br />
                     <input type="checkbox" name="arachides" value="arachides" /> Arachides<br />
                     <input type="checkbox" name="soja" value="soja" value="soja" /> Soja<br />
                     <input type="checkbox" name="lait" value="lait" /> Lait<br />
                     <input type="checkbox" name="fruitsacoques" value="fruitsacoques" /> Fruits à coques<br />
                     <input type="checkbox" name="celeri" value="celeri" /> Céleri<br />
                     <input type="checkbox" name="moutarde" value="moutarde" /> Moutarde<br />
                     <input type="checkbox" name="grainesdesesame" value="grainesdesesame" /> Graines de sésame<br />
                     <input type="checkbox" name="anhydridesulfureuxetsulfites" value="anhydridesulfureuxetsulfites" /> Anhydride sulfureux et sulfites<br />
                     <input type="checkbox" name="lupin" value="lupin" /> Lupin<br />
                     <input type="checkbox" name="mollusques" value="mollusques" /> Mollusques<br />
                




                     <br>
                     <input type="submit" name="register" value="Inscrire" class="btn btn-info" />  
                     <br />

                </form>  
                <?php  
                }  
                ?>  
           </div>

                

     </div>
</div>                  


<br>



<div class="split right">
     <div class="content">           

           <h3 align="center">Ajouter une recette</h3>  

           <div class="container" style="width:500px;">  
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <br />  
                
                <?php       
                }  
                else  
                {  
                ?>  
                <br />  
                <form method="post">  
                     <label>Nom de la recette</label>  
                     <input type="text" name="namerecette" class="form-control" />  
                     <br>
                     <label>Ingrédiants de la recette</label>  
                     <input type="text" name="ing" class="form-control" />  
                     <br />  
                     <label>Contenu de la recette</label>  
                     <input type="text" name="descrip" class="form-control" />  
                     <br />  
                     <br>
          
                     <label>Veuillez spécifier les allergènes</label>
                    <br><br>
                     <input type="checkbox" name="gluten" value="gluten"  /> Gluten<br />
                     <input type="checkbox" name="crustaces" value="crustaces" /> Crustacés<br />
                     <input type="checkbox" name="oeufs" value="oeufs" /> Oeufs<br />
                     <input type="checkbox" name="poissons" value="poissons" /> Poissons<br />
                     <input type="checkbox" name="arachides" value="arachides" /> Arachides<br />
                     <input type="checkbox" name="soja" value="soja" value="soja" /> Soja<br />
                     <input type="checkbox" name="lait" value="lait" /> Lait<br />
                     <input type="checkbox" name="fruitsacoques" value="fruitsacoques" /> Fruits à coques<br />
                     <input type="checkbox" name="celeri" value="celeri" /> Céleri<br />
                     <input type="checkbox" name="moutarde" value="moutarde" /> Moutarde<br />
                     <input type="checkbox" name="grainesdesesame" value="grainesdesesame" /> Graines de sésame<br />
                     <input type="checkbox" name="anhydridesulfureuxetsulfites" value="anhydridesulfureuxetsulfites" /> Anhydride sulfureux et sulfites<br />
                     <input type="checkbox" name="lupin" value="lupin" /> Lupin<br />
                     <input type="checkbox" name="mollusques" value="mollusques" /> Mollusques<br />
                


                     <br><br><br>
                     


                     <input type="checkbox" name="po" value="po"  /> Uniquement visible par les patients<br />


                     <br>
                     <input type="submit" name="addrecette" value="Ajouter" class="btn btn-info" />  
                     <br />

                </form>  
                <?php  
                }  
                ?>  
           </div>
                        
     </div>           
</div>         

</div>
<!--

                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="text" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="register.php">Inscription</a></p>  
                </form>  


               -->








               <br><br><br><br><br><br><br><br><br>







               <?php

/*
               $recette = mysqli_query($recettelink , "SELECT * FROM recettes");
               if (mysqli_num_rows($recette) == 0){
                    echo "Aucune recettes pour l'instant";
               }else {
                    
               while($row=mysqli_fetch_assoc($recette)){     
               ?>
                    
               
               <h2><?=$row["name"]?></h2>
                    <br>
               <p><?=$row["content"]?></p>
                  <br><br>
                    
               
               <?php
               }}
*/
               ?>


           </div>  


           </header>
      </body>  
 </html>  