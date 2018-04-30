<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <title>About</title>

</head>
<body>
<!--Nav Bar-->
 <?php include("includes/nav.php");?>

 <div id= "about_banner">
   <h1 id="about_Who_We_Are_title"> Who We Are </h1>
   <p id="about_Who_We_Are_txt"> Founded in 2005, AguaClara Cornell pioneers research in community-scale water
     treatment technologies. AguaClara Cornell has partnered with
     AguaClara Reach and other local organizations to build fourteen AguaClara plants that provide
     safe water on tap to over 65,000 people, with the flagship plant in Ojojona, Honduras and other plants in India. </p>
  </div>
<!--Who We Are-->



<!--About Monroe-->
<h2 class= "blue">Monroe Weber-Shirk</h2>
<div id= "about_Monroe_container">
  <div  id="about_Monroe_text">
  <p> Dr. Monroe Weber-Shirk received his PhD in Environmental Engineering from Cornell University in 1992.
    His experiences working in Salvadoran refugee camps in Honduras helped shape his interest in sustainable
    technologies for safe drinking water. </p>
  <p> In 2005 he founded the AguaClara program to address the need for
    sustainable municipal scale water treatment in resource poor communities. His investigations of the
    widespread failure of automated and mechanized water treatment plants have provided the impetus
    to develop a new approach to solve this global infrastructure problem.</p>
  <p> He has guided the AguaClara team to invent a series of technologies that together make
    it possible to produce safe drinking water without using any electricity.</p>
  </div>
  <img src="images/Monroe_thinking.jpg" id="about_Monroe_image" alt ="Picture of Monroe">
</div>

<!--Team Leads-->
<h2 class="green" id="about_TeamLeads"> AguaClara Cornell Spring 2018 Team Leads </h2>
<div id="about_TeamLeads_container">
  <figure>
    <img id="about_Team_Lead1" src="images/Team_Lead1.jpg" class= "about_Team_Lead_image" alt="Team Lead 2">
    <figcaption class="about_figcap"> Janak Shah | jhs373@cornell.edu  </figcaption>
  </figure>
  <figure>
    <img  id="about_Team_Lead2" src="images/Team_Lead2.jpg" class= "about_Team_Lead_image" alt ="Team Lead 2">
    <figcaption class="about_figcap">  Jillian Whiting | jpw236@cornell.edu  </figcaption>
  </figure>
  <figure>
    <img id="about_Team_Lead3" src="images/Team_Lead1.jpg" class= "about_Team_Lead_image" alt ="Team Lead 3">
    <figcaption class="about_figcap">  Sidney Lok | sgl38@cornell.edu  </figcaption>
  </figure>
</div>

<h2 id= "about_subteams" class="blue"> AguaClara Cornell Subteams <h2>
<div id="Subteams_Container">
    <div id= "Subteams_SubC1">

      <div id="GoingGlobal">
        <h2  class="about_subteam_link"> <a href=going_global.php>Going Global</a> </h2>
      </div>

      <div id="Lab_Research">
        <h2 h2 class="about_subteam_link"> <a href=lab_and_research.php>Lab and Research</a> </h2>

    </div>

  </div>

    <div id="Subteams_SubC2">

      <div id="Apps_and_Algorithms">
        <h2 class="about_subteam_link"> <a href=apps_and_algorithms.php>Apps and Algorithms</a> </h2>

      </div>

      <div id="Fabrication">
        <h2 class="about_subteam_link"> <a href=fabrication.php>Fabrication</a> </h2>
    
      </div>

    </div>

  </div>






</body>
</html>
