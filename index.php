<?
  const $home_video_link = "https://drive.google.com/open?id=1jI28KBgRqN-Q39DEkDVtcf_0eKMnTXN_";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> AguaClara Cornell </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>

 <?php include("includes/nav.php");?>
<!-- Images banner -->
<div id="slides" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner_homepage.JPG">
    </div>
    <div class="carousel-item">
      <img src="images/banner2_homepage.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/banner3_homepage.jpg">
    </div>
  </div>
</div>

<!-- jumbotron -->

<div class="container-fluid">
  <div class="text-center row jumbotron">
    <div class="col-12">
      <h3>Safe water on tap,</h3>
      <h2 class="blue"
      >1 drop at a time</h2>
    </div>
  </div>
  <hr>
</div>

<!-- facts -->

<div class="facts container-fluid padding">
  <div class="row">
    <div class="col-md-6 col-lg-6">
      <img src="images/facts_homepage.jpeg" class="img-fluid mx-auto d-block">
    </div>
    <div class="col-md-6 col-lg-6">
       <div class="home_highlight_fact">Nearly 3 billion people</div> <p>in the world do not have access to clean and safe drinking water.</p>
       <div class="home_highlight_fact">1,000 children</div> <p>die everyday due to water related diarrheal diseases.</p>
       <div class="home_highlight_fact">More than 80%</div><p> of our wastewater is discharged back to the environment without proper treatment.</p>
    </div>
  </div>
  <hr>
</div>

<!-- jumbotron -->

<div class="container-fluid">
  <div class="text-center row jumbotron change">
    <div class="col-12">
      <h2 class="green">We want to change this.</h2>
    </div>
  </div>
  <hr>
</div>

<!-- Mission statement -->

<div class="container-fluid padding">
  <div class="row padding mission">
    <div class="col-lg-6 misstatement">
      <h2 class="blue">Our mission</h2>
      <br>
      <p>AguaClara Cornell researches, invents, and designs resilient, gravity-powered, community-managed water treatment technologies for villages, towns, and cities. </p>
      <p> Students lead the innovation process, learn from each other, and foster a collaborative environment where diversity is cherished, failures are learning opportunities, and where success is shared. </p>
      <p> We work with partner organizations who implement AguaClara technologies to provide reliable safe water on tap to whole communities.</p>
        <br>
    </div>
    <div class="col-lg-6">
      <img src="images/mission_homepage.jpg" class="img-fluid">
    </div>
  </div>
  <hr>
</div>



</body>

</html>
