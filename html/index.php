<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Studio Dulcet</title>
  <link rel="stylesheet" href="../css/indexsty.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body>

<!-- beginning of nav bar (needed on every page) -->
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
<section class="home">
</section>
<div style="height: 1000px">
    <!-- just to make scrolling effect possible -->
    <h5 class="welcome">Welcome to Studio Dulcet!</h5>
    <div class = "gh"><iframe src="https://github.com/sponsors/sme-ek/card" title="Sponsor sme-ek" height="225" width="600" style="border: 0;"></iframe></div>
    <p class="p-5">We are a small studio that focuses on creating fun, open-source games. `
    </p>
    <p class = "p-5" id = "bus">For business inquiries, please contact smeek@studiodulcet.com</p>
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
