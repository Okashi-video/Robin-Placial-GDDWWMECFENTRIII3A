<?php
$connect = mysqli_connect("localhost", "root", "root", "evalecfback");  

$sqlallr = mysqli_query($connect, "SELECT * FROM recette WHERE po = 0");



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://www.dafontfree.net/embed/YmFsb28tYmhhaW5hLXJlZ3VsYXImZGF0YS81MS9iLzI0NzMxL0JhbG9vQmhhaW5hLVJlZ3VsYXIudHRm" rel="stylesheet" type="text/css"/>
</head>
<body>


<?php 
  include "./header.html";
  ?>

    
    <h1>Mes services, </h1>
    <h6>(Liste des recettes disponible pour tous)</h6>
    <header></header>
   



<div class="container" style="width:500px;">  
<h3 align="center">Listes des recettes</h3>
<br><br><br><br><br>
<?php
if(mysqli_num_rows($sqlallr) == 0){
    echo "Aucune recettes trouvée";
}
else {
    while($row = mysqli_fetch_assoc($sqlallr)) {
        ?>
            <h2><?php echo $row["namerecette"]; ?></h2>
            <br>
            <h4><?php echo $row["ing"]; ?></h4>
            <br>
            <h5><?php echo $row["descrip"]; ?></h5>

<br><br><br><br><br>
        <?php

    }
}


?>


</div>


<?php 
  include "./footer.html";
  ?>

    
</body>
   
</html>