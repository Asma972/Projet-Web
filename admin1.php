<?php
    session_start();
    include 'admin.php';
?>

<html lang="en">
    <head>
    
        <meta charset="UTF-8">
        <meta name="author" content="admin">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Page d'admin</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <!-- DATATABLE -->
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"/>
 
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        

         <link rel="stylesheet" href="../css/style.css"> 
    </head>
    
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="admin1.php">PAGE ADMINISTRATEUR </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">[]</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">[ici aussi]</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">[ici aussi]</a>
      </li> 
    </ul>
  </div> 
</nav>
        <div class="container-fluid">
            <div class="row justify-content-center">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3 class="text-center text-info">Ajouter question</h3>
                    <form action="../phpjs/admin.php" method="post" enctype="multipart/form-data" id="upload-frm"> 
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        
                        <div class="form-group">
                            <label class="col-4 col-form-label">Intitule de la question</label>
                            <input type="text" name="intituleq" class="form-control" placeholder="Entrez l'intitule de la question" value="<?= $intitule; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-5 col-form-label">Pays concerné par la question</label>
                            <input type="text" name="paysq" class="form-control" placeholder="Entrez le pays" value="<?= $pays; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-2 col-form-label">Latitude</label>
                            <input type="text" name="latitudeq" class="form-control" placeholder="Entrez la latitude" value="<?= $latitude; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-2 col-form-label">Longitude</label>
                            <input type="text" name="longitudeq" class="form-control" placeholder="Entrez la longitude" value="<?= $longitude; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-2 col-form-label">Photo</label>
                            <input type="hidden" name="oldimage" value="<?= $affiche; ?>">
                            <input type="file" name="photo-pays" class="custom-file">
                            <img src="<?= $affiche; ?>" width="120" class="img-thumbnail">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="add-question" id="add" class="btn btn-primary btn-block" value="Ajouter">
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <?php
                        $query=$conn->prepare("SELECT * FROM QUESTION");
                        $query->execute();
                    ?>
                    <h3 class="text-center text-info">Questions entrées dans la base : </h3>
                    <table class="table table-hover table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Intitule</th>
                        <th>Pays</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Photo</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php while($row=$query->fetch(PDO::FETCH_ASSOC)){ ?>
                      <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['intitule']; ?></td>
                        <td><?= $row['pays']; ?></td>
                        <td><?= $row['latitude']; ?></td>
                        <td><?= $row['longitude']; ?></td>
                        <td><img src="<?= $row['affiche_question']; ?>" width="25"></td>  
                        <td>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </body>
    
</html>