<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <title>Sharkloading | Lang Selection</title>
</head>

<body onload="Timer()" style="background-color:#000000;">
    <h1 id="Sharkloading_text_introduction" class="text-center text-white">Sharkloading</h1><br>
    <div id="loader" class="loader mx-auto"></div>

    <div style="display:none;" id="Page" class="animate-page">
        <p class="text-left text-white Sharkloading_text">By Sharki (discord: Sharki#6540) | Langs Implementation by <a href="https://github.com/MaeveLaOuf">Maeve</a></p>
        <a class="github-button" href="https://github.com/SharkiPro/SharkLoading" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star SharkiPro/SharkLoading on GitHub">Star</a>
        <h1 class="text-center text-white Sharkloading_text">Sharkloading</h1>
        <p class="text-center text-white Sharkloading_text">It's Magic</p>

        <div class="mx-auto w-50 p-3 bg-white rounded" style="height: 350px;">
            <h2 class="text-center text-dark Sharkloading_text">What language you want the loader to be ?</h2><br>
            <div class="choose">
                <a href="./fr/"><button style="margin-left: 47.5%;" type="submit" class="btn btn-success text-center Sharkloading_text">French </button></a><br><br>
                <a href="./sw/"><button style="margin-left: 47.5%;" type="submit" class="btn btn-success text-center Sharkloading_text">Swedish</button></a><br><br>
                <a href="./en/"><button style="margin-left: 47.5%;" type="submit" class="btn btn-success text-center Sharkloading_text">English</button></a><br><br>
                <a href="./de/"><button style="margin-left: 47.5%;" type="submit" class="btn btn-success text-center Sharkloading_text">Deutsch</button></a><br><br>
            </div>
        </div><br>
    </div>

    <script>
        function Timer() {
            time = setTimeout(showPage, 10);
        }

        function showPage() {
            document.getElementById("Sharkloading_text_introduction").style.display = "none";
            document.getElementById("loader").style.display = "none";
            document.getElementById("Page").style.display = "block";
        }
    </script>

</body>

</html>