<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Arcadia</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/0c39fbe230.js" crossorigin="anonymous"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              jauneor: '#d6a123',
              vertfonce: '#426720',
              vertclair: '#2e7b11',
              marron : '#7f5f14',
            }
          }
        }
      }
    </script>

  </head>
  <?php
    session_start();
    if(!isset($_REQUEST['controleur'])){
      $controleur='accueil';
    } else{
      $controleur=$_REQUEST['controleur'];
    }

    switch ($controleur) {
      case 'accueil':
        {
          include('./vues/header.php');
          break ;
        }
      case 'gestionvisiteur':
        {
          include('./controleur/c_gestion_visiteur.php');
          break ;
        }
      case 'gestionadmin':
        {
          include('./controleur/c_gestion_admin.php');
          break ;
        }
    }
  ?>
</html>
