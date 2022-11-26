<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <title>Weather Forecast</title>

    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="../bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap\js\bootstrap.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/skel.min.js"></script>
        <script src="../js/skel-layers.min.js"></script>
        <script src="../js/init.js"></script>
        <link rel="stylesheet" href="../css/skel.css" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/style-xlarge.css" />
</head>
<body onload="DefaultScreen()" class="subpage">
    <?php
      require '../menu.php';
    ?>
    <center>
        <h1 style="font-size: 40px; font-weight: bold; color: green;" id="Para1">5 Days Weather Forecast</h1>
        <p style="font-size: 25px;" id="inputContainer">City: <input type="text" id="cityInput" style="margin: 3px;padding:5px;text-align:center;font-size:20px;font-weight:bold; width: 20%;"></p>
        <button style="background-color: green; color: white; border-radius: 20%;" type="button" onclick="GetInfo()">Search</button>        
        <h2 id="cityName">---Nairobi---</h2>
    </center>
    
    <div style="position: absolute;top: 180%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%);height: 500px;width: 1300px;border: 5px solid rgba(97, 95, 95, 0.829);border-radius: 10px;" id = "weatherContainer">

        <div style="position: absolute;top: 50%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%);height: 440px;width: 1200px;border: 5px solid rgb(31, 82, 82);border-radius: 10px;background-color: lightgreen;" id="iconsContainer">  

            <div style="display: inline-bock;float: left;height: 400px;width: 190px;margin: 20px;border: 5px solid rgb(48, 47, 47);border-radius: 10px;" class = "icons">
                <p class="weather" id="day1"></p>
                <div style="height: 120px;width: 100%;" class="image"><img src="dots.png" class="imgClass" id="img1" style="height: 120px;width: 100%;"></div>
                <p class="minValues" id="day1Min">Loading...</p>
                <p class="maxValues" id="day1Max">Loading...</p>
            </div>
            <div style="display: inline-bock;float: left;height: 400px;width: 190px;margin: 20px;border: 5px solid rgb(48, 47, 47);border-radius: 10px;" class = "icons">
                <p class="weather" id="day2"></p>
                <div style="height: 120px;width: 100%;" class="image"><img src="dots.png" class="imgClass" id="img2" style="height: 120px;width: 100%;"></div>
                <p class="minValues" id="day2Min">Loading...</p>
                <p class="maxValues" id="day2Max">Loading...</p>
            </div>
            <div style="display: inline-bock;float: left;height: 400px;width: 190px;margin: 20px;border: 5px solid rgb(48, 47, 47);border-radius: 10px;" class = "icons">
                <p class="weather" id="day3"></p>
                <div style="height: 120px;width: 100%;" class="image"><img src="dots.png" class="imgClass" id="img3" style="height: 120px;width: 100%;"></div>
                <p class="minValues" id="day3Min">Loading...</p>
                <p class="maxValues" id="day3Max">Loading...</p>
            </div>
            <div style="display: inline-bock;float: left;height: 400px;width: 190px;margin: 20px;border: 5px solid rgb(48, 47, 47);border-radius: 10px;" class = "icons">
                <p class="weather" id="day4"></p>
                <div style="height: 120px;width: 100%;" class="image"><img src="dots.png" class="imgClass" id="img4" style="height: 120px;width: 100%;"></div>
                <p class="minValues" id="day4Min">Loading...</p>
                <p class="maxValues" id="day4Max">Loading...</p>
            </div>
            <div style="display: inline-bock;float: left;height: 400px;width: 190px;margin: 20px;border: 5px solid rgb(48, 47, 47);border-radius: 10px;" class = "icons">
                <p class="weather" id="day5"></p>
                <div style="height: 120px;width: 100%;" class="image"><img src="dots.png" class="imgClass" id="img5" style="height: 120px;width: 100%;"></div>
                <p class="minValues" id="day5Min">Loading...</p>
                <p class="maxValues" id="day5Max">Loading...</p>
            </div>
        </div>
    </div>


        <script src="main.js"></script>


</body>
</html>