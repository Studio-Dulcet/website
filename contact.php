<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <title>Studio Dulcet | Contact Us</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
            <link rel="stylesheet" href="css/contactsty.css">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="index.php">Studio Dulcet</a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contribute.php">Contribute</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="https://discord.gg/j4wysvegaw" target = "_blank" rel="noopener noreferrer">Discord</a></li>
            </ul>
        </div>
        <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
    </div>
</nav>

<!-- end of nav bar -->

<div class = "d-flex justify-content-center center my-auto" id = "rulesbox">
    <div class = "container-fluid" id = "rules">
<p>Please just be respectful if you contact one of us!<br> Keep in mind that we are people too. <3<br> Generally, the fastes method of contact would be to try to talk to smeek through discord.</p>
    </div>
</div>

<div class = "d-flex justify-content-center center my-auto" id = "contact">

<div class = "container-fluid" id = "smeek">
    <img class = "smeekimg" src="images/smeek.png">
        <div class = "smeekoverlay">
            <div class = "smeektxt">
                <h1>developer</h1> <br>
                smeek@studiodulcet.com <br>
                smeek#0001 <br>
                EST
            </div>
        </div>
</div>



<div class = "container-fluid" id = "shiori">
        <img class = "shioriimg" src="images/shiori.png">
            <div class = "shiorioverlay">
                <div class = "shioritxt">
                    <h1>developer </h1> <br>
                    shiori@studiodulcet.com <br>
                    shiori #1455 <br>
                    HKT
                </div>
        </div>
</div>

<div class = "container-sm" id = "wider">
        <img class = "widerimg" src="images/wider.png">
        <div class = "wideroverlay">
            <div class = "widertxt">
                <h1>story man</h1> <br>
                wider@studiodulcet.com <br>
                YEETboi89#0002 <br>
                PST
            </div>
        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/scripts.js"></script>

<!-- needed on every page -->

<script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('.nav').addClass('affix');
            console.log("OK");
        } else {
            $('.nav').removeClass('affix');
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>
