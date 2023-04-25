<?php  
 $connect = mysqli_connect("localhost", "root", "root", "evalecfback");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:entry.php");  
 }  
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
           $query = "INSERT INTO account(username, password) VALUES('$username', '$password')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $query = "SELECT * FROM account WHERE username = '$username'";  




           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  


                         if($row["admininfo"] == 1){

                         //echo ($row["admininfo"]);
                         $_SESSION["username"] = $username;  
                         header("location:admin.php"); 


                         }
                         else
                         {
                          //return true;  
                          $_SESSION["username"] = $username;  

                          $_SESSION["gluten"] = $row["gluten"];      

                          $_SESSION["crustaces"] = $row["crustaces"];   
                          $_SESSION["oeufs"] = $row["oeufs"];   
                          $_SESSION["poissons"] = $row["poissons"];   
                          $_SESSION["arachides"] = $row["arachides"];   
                          $_SESSION["soja"] = $row["soja"];   
                          $_SESSION["lait"] = $row["lait"];   
                          $_SESSION["fruitsacoques"] = $row["fruitsacoques"];   
                          $_SESSION["celeri"] = $row["celeri"];   
                          $_SESSION["moutarde"] = $row["moutarde"];   
                          $_SESSION["grainesdesesame"] = $row["grainesdesesame"];   
                          $_SESSION["anhydridesulfureuxetsulfites"] = $row["anhydridesulfureuxetsulfites"];   
                          $_SESSION["lupin"] = $row["lupin"];   
                          $_SESSION["mollusques"] = $row["mollusques"];   

                          header("location:entry.php"); 
                         }
                      
                          


                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details")</script>';  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
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



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


  </head>
<body>


<?php 
  include "./header.html";
  ?>

    
    <h1>Nutrution</h1>
    <header></header>
   
 









           <div class="container" style="width:500px;">  
               
                <br />  
             
               
                <h3 align="center">Connetion</h3>  
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
                     <!--<p align="center"><a href="register.php">Inscription</a></p>  -->
                </form>  
               
     
            
           </div>


           <?php 
  include "./footer.html";
  ?>


    
</body>
   
</html>