<?php session_start();
require 'assets/class/config.php';
require 'assets/class/select.php'; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/index.css">
    <link rel="stylesheet" href="assets/styles/navbar.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <script src="https://kit.fontawesome.com/ee02dbcf72.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/ee02dbcf72.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
<body>
<?php include 'assets/include/navbar.php'?>

<div class="row row-cols-1 row-cols-md-3 g-4 ms-5 me-5 mt-5 mb-5">
<?php
            $projet = new projet;
            $result = $projet->index();
          foreach($result as $row)
            {
          ?>

  <div class="col">
    <div class="card h-100">
      <a href="<?= $row['lien_projet'] ?>"><img src="<?= $row['image_projet'] ?>" class="card-img-top rounded" alt="Responsive image"></a>
      <div class="card-body">
        <h5 class="card-title"><?= $row['titre_projet'] ?></h5>
        <p class="card-text">Mise en place du maquettage du one page avec redirection vers Miro et la maquette ainsi que vers GitHub avec les différents push et merge effectué.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted me-auto ms-auto">
          <button type="button" class="btn btn-primary"><a class="nav-link text-light" href="https://miro.com/app/board/uXjVOvcoIII=/" target="_blank" rel="noopener noreferrer">Miro</a></button>
        <button type="button" class="btn btn-primary"><a class="nav-link text-light" href="<?= $row['github_projet'] ?>" target="_blank" rel="noopener noreferrer">GitHub</a></button></small>
      </div>
    </div>
  </div>
  <?php
            }
            ?>
</div>

<?php include 'assets/include/footer.php' ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>