<?php
include 'config.php';
if(isset($_POST['add-question'])){
    $intitule=$_POST['intituleq'];
    $pays=$_POST['paysq'];
    $latitude=$_POST['latitudeq'];
    $longitude=$_POST['longitudeq'];
    $photo_pays=$_FILES['photo-pays']['name'];
    $upload_pays="../pays/".$photo_pays;
    
     $stmt=$conn->prepare("INSERT INTO question(intitule,pays,latitude,longitude,photo) VALUES (:intitule,:pays,:latitude,:longitude,:photo)");
    
    $success = $stmt->execute(array(
                        'intitule'=>$nom_acteur,
                        'pays'=>$nationalite_acteur,
                        'latitude'=>$age_acteur,
                        'longitude'=>$upload_acteur,
                        'photo'=>$upload_pays
                ));
    
    move_uploaded_file($_FILES['photo-pays']['tmp_name'], $upload_pays);
    header('location:../page/admin1.php');
    $_SESSION['response']="Insertion reussie !";
    $_SESSION['res_type']="success";
    
}
?>