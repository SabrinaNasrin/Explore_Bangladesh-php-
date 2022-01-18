<html>
<head>

  <title>Explore the Architechtural Wonders</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  body{
    background-color:#e3e3e3;
  }
input[type=text] {
    width:175px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 5px;
     margin-left: -10px;
     margin-top: 70px;
     box-shadow: 0 8px 16px 0 #465025;
   
}
input[type=submit]
{  
     
    width:75px;
    margin-top: 70px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
    background-color: #457725;

    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding:5px;
    color: white;
    cursor: pointer;
    text-align: left;
    text-indent: 6px;
    position: absolute;
    box-shadow: 0 8px 16px 0 #465025;
}




</style>
   
</head>
<body>
  <h1>Explore <br>Bangladesh<br>
    Experience the land of stories</h1>
  <h2>
    <form action="search.php" method="post">
  <input type="text" name="search" placeholder="Search..">
  <input type="submit" name="search1" value="Search">
</form>
  </h2>
  <marquee style ="font-size:20px;color:red;font-family:hectica;">Welcome to Explore Bangladesh..&emsp;&#9632;&emsp;
    Exclusive Winter offer is going on and it will valid upto 31st January.&emsp;&#9632;&emsp;
    Famous Shakhrain Festival was celebrated in a very colorful way in Old Dhaka Yesterday.&emsp;&#9632;&emsp;</marquee>
  <ul>
    <li style="width:10%">
      <a class="active" href="home.php">Home</a>
    </li>
     <li class="dropdown" style="width:22%">
      <a class="dropbtn">About Bangladesh</a>
      <div class="dropdown-content">
              <a href="anthem.php">National Anthem of Bangladesh</a>
              <a href="bangladesh_at_a_glance.php">Bangladesh at a glance</a>
              <a href="history.php">History of Bangladesh</a>
              <a href="geography.php">Geography of Bangladesh</a>
              <a href="culture_religon.php">Culture,Religion and Bangladesh</a>
            </div>
    </li>
     <li class="dropdown" style="width:17%">
      <a class="dropbtn">Things to do</a>
      <div class="dropdown-content">
              <a href="experience_village.php">Experience village life & people</a>
              <a href="hill_track.php">Adventure in hill tracts</a>
              <a href="jungle.php">Trekking through the jungle</a>
              <a href="river_cruise.php">The grand river cruise</a>
              <a href="beach_holiday.php">Beach Holiday</a>
              <a href="tea_garden.php">Wondering the alleys of tea garden</a>
              <a href="festivals.php">Festivals</a>
              <a href="foods_shopping.php">Foods & Shopping</a>
              <a href="business_trip.php">Business trip</a>
              <a href="research_study.php">Research & Study</a>
            </div>
    </li>

     <li class="dropdown" style="width:17%">
      <a class="dropbtn">Things to see</a>
      <div class="dropdown-content">
              <a href="bangladesh_national_zoo.php">Bangladesh National Zoo</a>
              <a href="explore_the_archeological_wonders.php">Explore the Archeological Wonders</a>
              <a href="carnival_of_culture.php">Carnival of Culture</a>
              <a href="experience_the_diverse_ethnicity.php">Experience the diverse ethnicity</a>
              <a href="explore_the_architechtural_wonders.php">Explore the architechtural wonders</a>
              <a href="a_tripdown_to_memory_lane.php">A trip down to memory lane</a>
              <a href="land_of_pride.php">Land of pride</a>
          </div>
    </li>

     <li class="dropdown" style="width:17%">
      <a class="dropbtn">Where to stay</a>
        <div class="dropdown-content">
               <a href="hotel.php">Hotels</a>
                <a href="resort.php">Resorts</a>
              </div>
    </li>
     <li class="dropdown" style="width:17%">
      <a class="dropbtn">Travel Essentials</a>
      <div class="dropdown-content">
              <a href="travel_tips.php">Travel Tips</a>
              <a href="list_of_bangladeshi_embassies_abroad.php">List of Bangladesh Embassies abroad</a>
              <a href="froeign_embassies_in_bangladesh.php">Foreign Embassies in Bangladesh</a>
              <a href="points_of_immegration_ports.php">Points of immegration ports</a>
              <a href="money_exchange_points.php">Money exchange points</a>
              <a href="emergency_numbers.php">Emergency Numbers</a>
              <a href="government_holidays.php">Government Holidays</a>
          </div>
    </li>
  </ul>
  <div class="w3-content w3-section" style="max-width:100%">
  <img class="mySlides" src="image/flag_of_bd.png" style="width:100%">
  <img class="mySlides" src="image/chitta.png" style="width:100%">
  <img class="mySlides" src="image/White Water Lily.jpg" style="width:100%">
  <img class="mySlides" src="image/water_fall.png" style="width:100%">
  <img class="mySlides" src="image/tea_garden.png" style="width:100%">
  <img class="mySlides" src="image/nilgiri.jpg" style="width:100%">
   <img class="mySlides" src="image/chimbuk.png" style="width:100%">
  <img class="mySlides" src="image/ramna.png" style="width:100%">
  
  <img class="mySlides" src="image/scenery.png" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>
    <ul>
    <li>
      <a href="visit_bangladesh_year.php">Visit Bangladesh Year</a>
    </li>
    <li class ="dropdown">
      <a class="dropbtn" href="transportation.php">Transportation</a>
      <div class="dropdown-content">
              <a href="by_air.php">By Air</a>
              <a href="by_road.php">By Road</a>
              <a href="by_train.php">By Train</a>
              <a href="by_water.php">By Water</a>
              
            </div>
    </li>
    <li>
      <a href="tour_operators.php">Tour Operators</a>
    </li>
    <li>
      <a href="travel_agents.php">Travel Agents</a>
    </li><li>
      <a href="photo_galary.php">Photo Gallery</a>
    </li>
     <li>
      <a href="video_gallery.php">Videos</a>
    </li>
    <li>
      <a href="contact_us.php">Contact Us</a>
    </li>
  </ul>
  <div class="main-content col-md-9">

            
                            
    <div id="content" role="main">
                
            <article class="post-293 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p><a href="image/sritisoudho.jpeg"><img class="alignnone wp-image-1287" src="image/sritisoudho.jpeg" alt="15123591" width="310" height="200" ></a>    <a href="image/ahsanmonjil.jpeg"><img class="alignnone wp-image-1256" src="image/ahsanmonjil.jpeg" alt="Ahsan_Manzil22" width="310" height="200"></a>    <a href="image/lalbagh.jpeg"><img class="alignnone wp-image-1010" src="image/lalbagh.jpeg" alt="Shahi Mosque, Lalbag Fort" width="310" height="200"></a></p>
<p><a href="image/sangsad.jpeg"><img class="alignnone wp-image-1293" src="image/sangsad.jpeg" alt="National Parliament of Bnagladesh" width="310" height="200" ></a>    <a href="image/masque.jpeg"><img class="alignnone wp-image-1283" src="image/masque.jpeg" alt="Baitul_Mukarram_Nation_Mosque2_by_Yueshi" width="310" height="200" ></a>    <a href="image/paharpur.jpeg"><img class="alignnone wp-image-1387" src="image/paharpur.jpeg" alt="Pahar01-29" width="310" height="200" ></a></p>
<p><span style="color: #000000;font-size:18px;">The country sees a countless numbers of architectural splendors all over her land. Most of this wonders are designed by the best designers and architects of Bangladesh. If you are thinking that the splendors or our creation can only be dated back to this century, you are wrong. Some of our finest is rooted back to the beginning of previous century. Deep beneath the stoned concrete and layer of bricks, there lies the passion and dedication of our hardworking people — people who can go further beyond imagination even through shapes and bricks.</span></p>
<p><span style="color: #000000;font-size:18px;">A day trip inside the Dhaka city may suffice for a grand tour for the architectural wonders. To visit places outside of the Dhaka city you would need a proper planning. Better if you plan your trip with including few other places of interest. Here’s a list of places you may not want to miss:</span></p>

<span style="color: #000000;">01. National Parliament Building</span><br>
<span style="color: #000000;">02. Motijheel Shapla Square</span><br>
<span style="color: #000000;">03. Shaheed Minar (Martyr Monument), Dhaka</span><br>
<span style="color: #000000;">04. National Memorial in Savar</span><br>
<span style="color: #000000;">05. Baitul Mukarram National Mosque</span><br>
<span style="color: #000000;">06. Seven Domed Mosque (Saat Masjid) at Mohammadpur, Dhaka</span><br>
<span style="color: #000000;">07. Armenian Church at Old Town, Dhaka</span><br>
<span style="color: #000000;">08. Lalbagh Fort, Old Town, Dhaka</span><br>
<span style="color: #000000;">09. Ahsan Manzil, Old Town, Dhaka</span><br>
<span style="color: #000000;">10. Paharpur</span><br>
<span style="color: #000000;">11. Mainamati</span><br>
<span style="color: #000000;">12. Wari-Bateshwar</span><br>
<span style="color: #000000;">13. The Sixty Dome Mosque or Shaṭ Gombuj Moshjid</span><br>
<span style="color: #000000;">14. World War II Cemetery</span><br>
<span style="color: #000000;">15. Kantaji Temple</span><br>
<span style="color: #000000;">16. Shahid Minar at Jahangirnagar University</span><br>
<span style="color: #000000;">17. Mujibnagar Smriti Saudha</span><br>
<span style="color: #000000;">18. Martyred Intellectuals Memorial</span><br>
<span style="color: #000000;">19. Aparajeyo Bangla</span><br>
<span style="color: #000000;">20. Amar Ekushey</span><br>
<span style="color: #000000;">21. Sangsaptak</span><br>
<span style="color: #000000;">22. Shabash Bangladesh</span><br>

                </div>
            </article>

            
            
        
    </div>


        

</div>



 <div class="clearfix"></div>
<footer class="footer">&#169;2016. All rights reserved to<br>
   Sabrina Nasrin<br>
   Department of CSE


  </footer>


</body>
</html>