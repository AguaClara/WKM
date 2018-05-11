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

 <!-- landing page-->
 <div class="landing-page">
   <div class="landing-text">
     <h1 class="white">Research . Invent . Design</h1>
   </div>
 </div>

 <!-- facts -->

 <div class="facts container-fluid">
   <div class="row">
     <div class="col-lg-6">
       <img src="images/facts_homepage.jpeg" class="img-fluid mx-auto d-block">
     </div>
     <div class="col-lg-6 text-center">
        <div class="home_highlight_fact">Nearly 3 billion people</div> <p>in the world do not have access to clean and safe drinking water.</p>
        <div class="home_highlight_fact">1,000 children</div> <p>die everyday due to water related diarrheal diseases.</p>
        <div class="home_highlight_fact">More than 80%</div><p> of our wastewater is discharged back to the environment without proper treatment.</p>
     </div>
   </div>
 </div>

 <!-- jumbotron -->

 <div class="container-fluid">
   <div class="text-center row jumbotron greybg">
     <div class="col-12">
       <h2 class="green">We want to change this.</h2>
     </div>
   </div>
 </div>

 <!-- Mission statement -->

 <div class="container-fluid">
   <div class="row mission">
     <div class="col-lg-7">
       <h2 class="blue text-center" id="info">Our mission</h2>
       <br>
       <p id="info">AguaClara Cornell upholds and protects the
         fundamental human right to access safe drinking water.
         We are committed to the ongoing development of resilient, gravity-powered
          drinking water and wastewater treatment technologies.
           Students lead the innovation process, learn from each
            other, and foster a collaborative environment where diversity is celebrated,
            failures are learning opportunities, and success is shared. We research, invent,
             and design technologies that are implemented by partner organizations and managed by
             communities to bring <i>safe water on tap!</i></p>
       <br>
     </div>
     <div class="col-lg-5">
       <img src="images/mission_homepage.jpg" class="img-fluid">
     </div>
   </div>
 </div>

 <!-- Video -->

 <div class="container-fluid video greybg">
   <div class="text-center row">
     <div class="col-lg-12 videotitle">
       <h2 class="green text-center">Our story</h2>
     </div>
     <div class="col-md-11 col-lg-8 col-xl-6 videowrapper">
       <div class="embed-responsive embed-responsive-16by9">
           <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/czCkQHly5do?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
       </div>
     </div>
   </div>
 </div>

<!-- footer -->


 <!--javascript-->

<script src="js/navbar_scroll.js"></script>
<script src="js/navbar_active.js"></script>



</body>

</html>
