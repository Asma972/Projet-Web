<!DOCTYPE html>
<html lang="fr">
	<head>      
            <title>Globe Trotters</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet"  href="../css/index.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous">
            <!-- <script src="../js/index.js" type="text/javascript"></script> -->
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=YOUR_API_KEY">  </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          
		  </head>
     <body>
					 
	<?php include("page1.php")?>
						
		<div class="form">
              <h1>Se connecter</h1>
                <div id="wrapper">
                  <form id="loginform" action="ident.php" method="post">
                    <div id="container" >
                            <p>User Id</p>
                            <input  name="mail" 	type="text"  placeholder="name@example.com">
                            <p>Password</p>
                            <input name="mdp"  type="password"   placeholder="password">
                            <br>
                            <input type="submit" value="Login" placeholder="name@example.com">
                            <input type="submit" value="Click For SignUp!">		
                    </div>
                  </form>
                </div>
              </div>
            </div>
                      
       <?php include("page2.php"); ?>

 
    </body>
</html>
