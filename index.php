<?php
include 'lang.php';
$lang = $langues['eng'];
if(isset($_POST['eng']))
    $lang = $langues['eng'];
if(isset($_POST['fr'])) 
    $lang = $langues['fr'];
if(isset($_POST['sw'])) 
    $lang = $langues['sw'];
  if(isset($_POST['de'])) 
    $lang = $langues['de'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <link href="../style.css" rel="stylesheet">
  <title>Sharkloading</title>
</head>

<body onload="Timer()" style="background-color:#000000;">
  <h1 id="Sharkloading_text_introduction" class="text-center text-white">Sharkloading</h1><br>
  <div id="loader" class="loader mx-auto"></div>

  <div style="display:none;" id="Page" class="animate-page">
    <p class="text-left text-white Sharkloading_text">By <a href="https://github.com/SharkiPro">Sharki</a> | Traduction by <a href="https://github.com/MaeveLaOuf">Maeve</a></p>
    <a class="github-button" href="https://github.com/SharkiPro/SharkLoading" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star SharkiPro/SharkLoading on GitHub">Star</a>
    <h1 class="text-center text-white Sharkloading_text">Sharkloading</h1>
    <p class="text-center text-white Sharkloading_text"><?=$lang['desc']?></p>

    <div class="alert alert-success sticky-top" id="success-alert" role="alert">
    <?=$lang['alert']['1']?><a href="../loadingscreen.html" class="alert-link"><?=$lang['alert']['2']?></a>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <script>
      $("#success-alert").hide();
    </script>
    <div class="alert alert-danger" style="weight: 20%;" id="error-alert" role="alert">
      <a><?=$lang['alert']['error']?></a>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <script>
      $("#error-alert").hide();
    </script>

            <div id="start" class="mx-auto w-50 p-3 bg-white rounded" style="height: 350px;">
                 <h2 class="text-center text-dark Sharkloading_text"><?=$lang['lang']?></h2><br>
                <form method="POST">
                <button name="fr" type="submit" class="m-2 btn btn-primary text-center Sharkloading_text">🥖 French </button>
                </form>
                <form method="POST">
                <button name="sw" type="submit" class="m-2 btn btn-primary text-center Sharkloading_text">🧆 Swedish</button>
                </form>
                <form method="POST">
                <button name="eng" type="submit" class="m-2 btn btn-primary text-center Sharkloading_text">☕️ English</button>
                </form>
                <form method="POST">
                <button name="de" type="submit" class="m-2 btn btn-primary text-center Sharkloading_text">🥃 Deutsch</button>
                </form>
                <button id="Bouton1"  onclick='document.getElementById("etape0").style.display = "block";' style="margin-left: 47.5%;" type="submit" class="btn btn-success text-center Sharkloading_text"><?=$lang['valid']?></button>
            </div><br>

            <div id="etape0" class="mx-auto w-50 p-3 bg-white rounded" style="height: 200px; display:none;">
              <h2 class="text-center text-dark Sharkloading_text"><?=$lang['create']?></h2><br>
              <button id="Bouton1" onclick='document.getElementById("etape1").style.display = "block";' style="margin-left: 47.5%;" type="submit" class="btn btn-success text-center Sharkloading_text">Oui</button>
            </div><br>

    <form method="post">
    
      <div id="etape1" class="mx-auto w-50 p-3 bg-white rounded animate-page" style="display:none; height: 280px;">
        <h2 class="text-center text-dark Sharkloading_text"><?=$lang['name']?></h2><br>
        <input type="text" class="form-control mx-auto" style="height: 50px;" name="subject1" id="subject1" placeholder="Exemple: Sharkland"><br>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text"><?=$lang['color']['text']?></label>
          </div>
          <select class="custom-select" name="couleur">
            <option value="text-dark"><?=$lang['color']['black']?></option>
            <option value="text-white"><?=$lang['color']['white']?></option>
            <option value="text-secondary"><?=$lang['color']['grey']?></option>
            <option value="text-success"><?=$lang['color']['green']?></option>
            <option value="text-primary"><?=$lang['color']['blue']?></option>
            <option value="text-danger"><?=$lang['color']['red']?></option>
          </select>
        </div>
        <button onclick="Etape('subject1','etape2');" style="margin-left: 47.5%;" type="button" class="btn btn-success text-center Sharkloading_text"><?=$lang['valid']?></button>
      </div><br>

      <div id="etape2" class="mx-auto w-50 p-3 bg-white rounded animate-page" style="display:none; height: 220px;">
        <h2 class="text-center text-dark Sharkloading_text"><?=$lang['adesc']?></h2><br>
        <input id="subject2" type="text" class="form-control mx-auto" style="height: 50px; display:none;" name="subject2" placeholder="Exemple: Rien à dire"><br>
        <button id="bouton2" onclick="Etape('subject2','etape3'); Scroll('etape3');" style="margin-left: 47.5%; display:none;" type="button" class="btn btn-success text-center Sharkloading_text"><?=$lang['valid']?></button>
        <button id="Oui2" onclick='Desc();' style="margin-left: 23.75%;" type="button" class="btn btn-success text-center Sharkloading_text"><?=$lang['choice']['yes']?></button>
        <button id="Non" onclick="Get('etape2','etape3')" style="margin-left: 42.5%;" type="button" class="btn btn-danger text-center Sharkloading_text"><?=$lang['choice']['no']?></button>
      </div><br>

      <div id="etape3" class="mx-auto w-50 p-3 bg-white rounded animate-page" style="display:none; height: 220px;">
        <h2 class="text-center text-dark Sharkloading_text"><?=$lang['logo']?></h2><br>
        <input id="logo" type="text" class="form-control mx-auto" style="height: 50px; display:none;" name="logo" placeholder="Exemple: https://image.com/image.jpg"><br>
        <button id="bouton3" onclick="Etape('logo','etape4'); Scroll('etape4');" style="margin-left: 47.5%; display:none;" type="button" class="btn btn-success text-center Sharkloading_text"><?=$lang['valid']?></button>
        <button id="Oui3" onclick='Logo();' style="margin-left: 23.75%;" type="button" class="btn btn-success text-center Sharkloading_text"><?=$lang['choice']['yes']?></button>
        <button id="Non2" onclick="Get('etape3','etape4')" style="margin-left: 42.5%;" type="button" class="btn btn-danger text-center Sharkloading_text"><?=$lang['choice']['yes']?></button>
      </div><br>

      <div id="etape4" class="mx-auto w-50 p-3 bg-white rounded animate-page" style="display:none; height: 220px;">
        <h2 class="text-center text-dark Sharkloading_text"><?=$lang['bg']?></h2><br>
        <input type="text" class="form-control mx-auto" style="height: 50px;" name="background" id="background" placeholder="Exemple: https://image.com/image.jpg"><br>
        <button onclick="Etape('etape4','validation'); Scroll('validation');" style="margin-left: 47.5%;" type="button" class="btn btn-success text-center Sharkloading_text"><?=$lang['valid']?></button>
      </div><br>

      <div id="validation" class="mx-auto w-50 p-3 bg-white rounded animate-page" style="display:none; height: 220px;">
        <h2 class="text-center text-dark Sharkloading_text"><?=$lang['finish']?></h2><br>
        <button style="margin-left: 47.5%;" type="submit" id="ok" name="ok" class="btn btn-success text-center Sharkloading_text"><?=$lang['choice']['yes']?></button>
      </div><br>
    </form>
  </div>

  <script>
    var time;

    function Timer() {
      time = setTimeout(showPage, 10);
    }

    function Scroll(id) {
      document.getElementById(id).scrollIntoView();
    }

    function Get(etapeold, etapenew) {
      document.getElementById(etapeold).style.display = "none";
      document.getElementById(etapenew).style.display = "block";
    }

    function showPage() {
      document.getElementById("Sharkloading_text_introduction").style.display = "none";
      document.getElementById("loader").style.display = "none";
      document.getElementById("Page").style.display = "block";
    }

    function Etape(subject, etape) {
      var input = document.getElementById(subject).value;
      if (input === "") {
        $("#error-alert").show();
        setTimeout(function() {
          $("#error-alert").fadeOut(5000);
        }, 5000);
        return false;
      }
      document.getElementById(etape).style.display = "block";
    }

    function Desc() {
      document.getElementById("subject2").style.display = "block";
      document.getElementById("bouton2").style.display = "block";
      document.getElementById("Oui2").style.display = "none";
      document.getElementById("Non").style.display = "none";
    }

    function Logo() {
      document.getElementById("logo").style.display = "block";
      document.getElementById("bouton3").style.display = "block";
      document.getElementById("Oui3").style.display = "none";
      document.getElementById("Non2").style.display = "none";
    }
  </script>

  <?php

  $logo = !empty($_POST['logo']) ? $_POST['logo'] : null;
  $servername = !empty($_POST['subject1']) ? $_POST['subject1'] : null;
  $desc = !empty($_POST['subject2']) ? $_POST['subject2'] : null;
  $background = !empty($_POST['background']) ? $_POST['background'] : null;
  $couleur = !empty($_POST['couleur']) ? $_POST['couleur'] : "text-black";

  $couleurbg = '#000';
  if ($couleur == 'text-white') {
    $couleurbg = '#fff';
  } elseif ($couleur == 'text-primary') {
    $couleurbg = '#007FFF';
  } elseif ($couleur == 'text-secondary') {
    $couleurbg = '#C0C0C0';
  } elseif ($couleur == 'text-success') {
    $couleurbg = '#32CD32';
  } elseif ($couleur == 'text-danger') {
    $couleurbg = '#FF0000';
  }

  if (isset($_POST['ok'])) {
    if ($servername && $background) {
  ?>
      <script type="text/javascript">
        $("#success-alert").show();
        setTimeout(function() {
          $("#success-alert").fadeOut(5000);
        }, 10000);
      </script>
  <?php
      $file = '../loadingscreen.html';
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
            <h3 class='mx-auto text-center {$couleur}' style='font-size:50px;'>{$servername}</h3>
            <h3 class='mx-auto text-center {$couleur}' style='font-size:20px;'>{$desc}</h3>
            </div>

            <div class='mx-auto' style='width: 600px;' id='outerContainer'>
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
              background-color: {$couleurbg};
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