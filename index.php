<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Studio Dulcet</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/indexsty.css">
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

    <div class = "nonav">

        <div class = "d-flex justify-content-center center my-auto" id = "github">
            <div class = "gh"><iframe src="https://github.com/sponsors/sme-ek/card" title="Sponsor sme-ek" height="700" width="550" style="border: 0;"></iframe></div>
        </div>
        <div class = "d-flex justify-content-center center my-auto" id = "twitter">
            <div class = "twt"><a href="https://twitter.com/StudioDulcet?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @StudioDulcet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
        </div>

        <div class = "d-flex justify-content-center center my-auto" id = "infobox">
                  <div class = "bodytxt">
                      <p>Welcome to Studio Dulcet! <br> <br>
                         We are a small studio that focuses on creating fun, open-source games. `<br> </p>
                      <p class = "p-5" id = "bus">For business inquiries, please contact <a href = "mailto:smeek@studiodulcet.com">smeek@studiodulcet.com</a></p>
      </div>
      </div>

            <div class = "d-flex justify-content-center center my-auto" id = "dulcetindex">
          <div class = "container-fluid" id = "img">
      <img src = "images/madoka.png" width = "400" height = "600">
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
