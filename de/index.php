<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <title>Sharkloading</title>
</head>

<body onload="Timer()" style="background-color:#000000;">
  <h1 id="Sharkloading_text_introduction" class="text-center text-white">Sharkloading</h1><br>
  <div id="loader" class="loader mx-auto"></div>

  <div style="display:none;" id="Page" class="animate-page">
    <p class="text-left text-white Sharkloading_text">By Sharki (discord: Sharki#6540) | Langs Implementation by <a href="https://github.com/MaeveLaOuf">Maeve</a></p>
    <a class="github-button" href="https://github.com/SharkiPro/SharkLoading" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star SharkiPro/SharkLoading on GitHub">Star</a>
    <h1 class="text-center text-white Sharkloading_text">Sharkloading</h1>
    <p class="text-center text-white Sharkloading_text">Das ist Magie !</p>

    <div class="alert alert-success sticky-top" id="success-alert" role="alert">
    Ihr Ladebildschirm wurde erfolgreich erstellt! <a href="../loadingscreen.html" class="alert-link">Klicken Sie hier, um zu Ihrem Ladebildschirm zu gelangen.</a>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <script>
      $("#success-alert").hide();
    </script>
    <div class="alert alert-danger" style="weight: 20%;" id="error-alert" role="alert">
      <a>Sie haben die Felder nicht korrekt ausgefüllt !</a>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <script>
      $("#error-alert").hide();
    </script>

    <div class="mx-auto w-50 p-3 bg-white rounded" style="height: 200px;">
      <h2 class="text-center text-dark Sharkloading_text">Möchten Sie einen Ladebildschirm erstellen?</h2><br>
      <button id="Bouton1" onclick='document.getElementById("etape1").style.display = "block";' style="margin-left: 47.5%;" type="submit" class="btn btn-success text-center Sharkloading_text">Ja</button>
    </div><br>

    <form method="post">
      <div id="etape1" class="mx-auto w-50 p-3 bg-white rounded animate-page" style="display:none; height: 280px;">
        <h2 class="text-center text-dark Sharkloading_text">Wie lautet der Name Ihres Servers?</h2><br>
        <input type="text" class="form-control mx-auto" style="height: 50px;" name="subject1" id="subject1" placeholder="Beispiel: Sharkland"><br>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text">Textfarbe</label>
          </div>
          <select class="custom-select" name="couleur">
            <option value="text-dark">Schwarz</option>
            <option value="text-white">Weiß</option>
            <option value="text-secondary">Grau</option>
            <option value="text-success">Grün</option>
            <option value="text-primary">Blau</option>
            <option value="text-danger">Rot</option>
          </select>
        </div>
        <button onclick="Etape('subject1','etape2');" style="margin-left: 47.5%;" type="button" class="btn btn-success text-center Sharkloading_text">Validieren Sie</button>
      </div><br>

      <div id="etape2" class="mx-auto w-50 p-3 bg-white rounded animate-page" style="display:none; height: 220px;">
        <h2 class="text-center text-dark Sharkloading_text">Möchten Sie eine Beschreibung beifügen?</h2><br>
        <input id="subject2" type="text" class="form-control mx-auto" style="height: 50px; display:none;" name="subject2" placeholder="Beispiel: Nichts zu sagen"><br>
        <button id="bouton2" onclick="Etape('subject2','etape3'); Scroll('etape3');" style="margin-left: 47.5%; display:none;" type="button" class="btn btn-success text-center Sharkloading_text">Validieren Sie</button>
        <button id="Oui2" onclick='Desc();' style="margin-left: 23.75%;" type="button" class="btn btn-success text-center Sharkloading_text">Ja</button>
        <button id="Non" onclick="Get('etape2','etape3')" style="margin-left: 42.5%;" type="button" class="btn btn-danger text-center Sharkloading_text">Nein</button>
      </div><br>

      <div id="etape3" class="mx-auto w-50 p-3 bg-white rounded animate-page" style="display:none; height: 220px;">
        <h2 class="text-center text-dark Sharkloading_text">Möchten Sie ein Logo einfügen?</h2><br>
        <input id="logo" type="text" class="form-control mx-auto" style="height: 50px; display:none;" name="logo" placeholder="Beispiel: https://image.com/image.jpg"><br>
        <button id="bouton3" onclick="Etape('logo','etape4'); Scroll('etape4');" style="margin-left: 47.5%; display:none;" type="button" class="btn btn-success text-center Sharkloading_text">Validieren Sie</button>
        <button id="Oui3" onclick='Logo();' style="margin-left: 23.75%;" type="button" class="btn btn-success text-center Sharkloading_text">Ja</button>
        <button id="Non2" onclick="Get('etape3','etape4')" style="margin-left: 42.5%;" type="button" class="btn btn-danger text-center Sharkloading_text">Nein</button>
      </div><br>

      <div id="etape4" class="mx-auto w-50 p-3 bg-white rounded animate-page" style="display:none; height: 220px;">
        <h2 class="text-center text-dark Sharkloading_text">Hintergrund:</h2><br>
        <input type="text" class="form-control mx-auto" style="height: 50px;" name="background" id="background" placeholder="Beispiel: https://image.com/image.jpg"><br>
        <button onclick="Etape('etape4','validation'); Scroll('validation');" style="margin-left: 47.5%;" type="button" class="btn btn-success text-center Sharkloading_text">Validieren Sie</button>
      </div><br>

      <div id="validation" class="mx-auto w-50 p-3 bg-white rounded animate-page" style="display:none; height: 220px;">
        <h2 class="text-center text-dark Sharkloading_text">Möchten Sie die Erstellung Ihres Ladebildschirms validieren?</h2><br>
        <button style="margin-left: 47.5%;" type="submit" id="ok" name="ok" class="btn btn-success text-center Sharkloading_text">Ja</button>
      </div><br>
    </form>
  </div>

  <script>
    var time;

    function Timer() {
      time = setTimeout(showPage, 3000);
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

  <style>
    .Sharkloading_text {
      font-family: 'Indie Flower', cursive;
    }

    #Sharkloading_text_introduction {
      font-family: 'Indie Flower', cursive;
      position: absolute;
      left: 50%;
      top: 45%;
      width: 150px;
      height: 150px;
      margin-left: -75px;
      margin-top: -75px;
    }

    .loader {
      margin-top: -0.25rem;
      border-top: 16px solid #FFF;
      border-radius: 50%;
      position: absolute;
      left: 47.5%;
      top: 50%;
      width: 150px;
      height: 150px;
      margin-left: -75px;
      margin-top: -75px;
      animation: spin 4s linear infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .animate-page {
      position: relative;
      -webkit-animation-name: animatepage;
      -webkit-animation-duration: 1s;
      animation-name: animatepage;
      animation-duration: 1s
    }

    @-webkit-keyframes animatepage {
      from {
        bottom: -100px;
        opacity: 0
      }

      to {
        bottom: 0px;
        opacity: 1
      }
    }

    @keyframes animatepage {
      from {
        bottom: -100px;
        opacity: 0
      }

      to {
        bottom: 0;
        opacity: 1
      }
    }
  </style>
</body>

</html>