<!DOCTYPE html>
<html lang="fr">
	<head>      
            <title>Globe Trotters</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet"  href="../css/index1.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous">
            <script src="../js/index.js" type="text/javascript"></script>
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=YOUR_API_KEY">  </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     </head>
     <body>
					 
	<?php include("page1.php")?>

			
	
  <div class="container">
          <div class="row">
		   <div class="center-block">
		   	<div class="form" >
              
                <div id="wrappe">
                  <form id="loginform" action="ident.php" method="post" class="col-lg-9 col-lg-offset-9s col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <div id="container" >
                            <p>Votre email</p>
                            <input  name="email" type="text" placeholder="name@example.com" class="col-lg-12 col-lg-offset-12 col-md-12 col-md-offset-12 col-sm-12 col-sm-offset-12 col-xs-10 col-xs-offset-1">
                            <p>Password</p>
                            <input name="psw"  type="password"   placeholder="password" class="col-lg-12 col-lg-offset-12 col-md-12 col-md-offset-12 col-sm-12 col-sm-offset-12 col-xs-10 col-xs-offset-1">
                            <br>
                            <input type="submit" value="Login" id="idDiv" >
                            <a href="inscription.php"> <input type="button" value="Click For SignUp!" class="col-lg-12 col-lg-offset-12 col-md-12 col-md-offset-12 col-sm-12 col-sm-offset-12 col-xs-10 col-xs-offset-1" >	
                    </div>
                  </form>
				  </div>
                </div>
              </div>
            </div>
             
				</div>
            </div>	
       <?php include("page2.php"); ?>

 
    </body>
</html>
