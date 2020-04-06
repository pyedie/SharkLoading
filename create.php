<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sharkloading</title>
</head>
<body>
<h3 class="mx-auto" style="width: 200px;">SharkLoading</h3>
&nbsp
<form class="mx-auto" style="width: 200px;" action="" method="post">
  <div class="form-group">
    <label>Nom du serveur: (Obligatoire)</label>
    <input type="text" class="form-control" name="subject1" id="subject1" placeholder="Exemple: Sharkland">
  </div>
  <div class="form-group">
    <label>Description du serveur: (facultatif)</label>
    <input type="text" class="form-control" name="subject2" id="subject2" placeholder="Exemple: Rien à dire">
  </div>
  <div class="form-group">
    <label>Logo du serveur: (facultatif)</label>
    <input type="text" class="form-control" name="logo" id="logo" placeholder="Exemple: https://image.com/image.jpg">
  </div>
  <div class="form-group">
    <label>Arriere plan: (Obligatoire)</label>
    <input type="text" class="form-control" name="background" id="background" placeholder="Exemple: https://image.com/image.jpg">
  </div>
  <button type="submit" class="btn btn-success" name="ok">Accepter</button>
</form>
<?php

$logo = !empty($_POST['logo'])?$_POST['logo']:null;
$servername = !empty($_POST['subject1'])?$_POST['subject1']:null;
$desc = !empty($_POST['subject2'])?$_POST['subject2']:null;
$background = !empty($_POST['background'])?$_POST['background']:null;

if(isset($_POST['ok'])){
    if($servername && $background){
        $file = 'loadingscreen.html';
        $current = "
        <!doctype html>
        <html>
            <head>
            <meta charset='utf-8'>
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
            <title>SharkLoading</title>
            </head>

            <body>
            <div class='mx-auto'>
            <img class='mx-auto' style='width: 200px;' src={$logo}>
            <h3 class='mx-auto text-center text-black' style='font-size:50px;'>{$servername}</h3>
            <h3 class='mx-auto text-center text-black' style='font-size:20px;'>{$desc}</h3>
            </div>

            <div class='mx-auto' style='width: 625px;' id='outerContainer'>
              <div id='container'>
                <div class='circle' style='animation-delay: 0s'></div>
                <div class='circle' style='animation-delay: 1s'></div>
                <div class='circle' style='animation-delay: 2s'></div>
                <div class='circle' style='animation-delay: 3s'></div>
              </div>
            </div>

            <style>
            body {
              background-image: url({$background});
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
            }

            #container {
              width: 600px;
              height: 400px;
              display: flex;
              align-items: center;
              justify-content: center;
              overflow: hidden;
              position: relative;
            }
         
            .circle {
              border-radius: 50%;
              background-color: black;
              width: 150px;
              height: 150px;
              position: absolute;
              opacity: 0;
              animation: scaleIn 4s infinite cubic-bezier(.36, .11, .89, .32);
            }
         
            .item {
              z-index: 100;
              padding: 5px;
            }
         
            .item img {
              width: 150px;
            }

            @keyframes scaleIn {
              from {
                transform: scale(.5, .5);
                opacity: .5;
              }
              to {
                transform: scale(2.5, 2.5);
                opacity: 0;
              }
            }
            </style>

            </body>
        </html>
        ";
        file_put_contents($file, $current);        
    }
}
?>
</body>
</html>