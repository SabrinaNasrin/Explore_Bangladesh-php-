<html>
<head>

  <title>Culture,religion and Bangladesh</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  .main-content{
    font-size: 18px;
  }

  .page-content img{
    float: left;
    padding-right: 15px;
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
                
            <article class="post-73 page type-page status-publish hentry">
                
                <div class="page-content">
                    <span style="color: #000000;"><b>Religion</b></span>
<p><span style="color: #000000;"><a style="color: #000000;" href="image/eid.jpg"><img class="alignleft wp-image-1469" src="image/eid.jpg" alt="04_53d7a46e5c02c" width="474" height="275" ></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">In the matter of faith and belief, the majority of Bangladeshi population is Muslims. The remaining population is consisted of Hindus, Buddhists, Christians, and others. Even though religion is one the major thing that constitutes human identity, in Bangladesh, there exists no boundary between the people of various religions. In happiness, sadness, or even celebration, we live here like the perpetual siblings of a common motherland. With some powerful Islamic architectural heritage, Muslims in Bangladesh are unique for their peaceful values and devotions.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">A century old traditional root and continuing faith is still keeping the Hindu culture and ritual in Bangladesh as unique as the neighboring country. The age old background of Buddhism in Bangladesh is clearly noticeable in many of our archeological wonders. But the ritualistic practice of Buddhism is still intact and as astonishing as many other countries. Even though, the era of Christianity in Bangladesh started during the late sixteenth to early seventeenth century, the union and togetherness of Bangladeshi Christian population is well-built; not to mention about the togetherness as one nation is unbroken.</span></p>
<p><span style="color: #000000;"><b>Culture</b></span></p>
<p><span style="color: #000000;"><a style="color: #000000;" href="image/boishakh.jpg"><img class="alignleft wp-image-1520" src="image/boishakh.jpg" alt="Colourful-Celebration-of-Poyla-Boishakh-Dhaka" width="479" height="286" ></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Bangladesh has a rich and diverse culture which is reflected in the architecture, culture, literature, music, painting, clothing, discourse etc. Even in this era of rock ‘n’ roll, Bangladeshi culture is still being cherished and respected by the people of all over the world. Even the culture of the tribes is rich and diverse too. Clothing, one of the most important aspect of the culture of Bangladesh, defines the Bangladeshi people very skillfully. Saree — a finely embroidered cloth worn by the Bangladeshi woman and made by the skilled hands of Bangladeshi artisans — is now a global fashion trend. Festivals, held throughout the year with great zeal and zest, play a significant role in our culture. Some festivals are so intensely rooted in our cultural and social base that they are still being continued after centuries. Some festivals are based on social and political significances with marking our communal and national value, some are religious, and some are even observed seasonally. Bangladeshi people have so many reasons to cheer their life and soul. This is why this land is called the Land of Festivals.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<span style="color: #000000;"><b>Language</b></span>
<p style="text-align: justify;"><span style="color: #000000;">The official language of Bangladesh is Bangla (or, Bengali). Dated even before the birth of Christ, Bangla was widely spoken in this region, and now spoken by more than 200 million people all over the world. It has a various dialects with different accents, pronunciations and minor grammatical changes in different region in Bangladesh. Based on usage, Bangla is divided in two forms: sadhu bhasha (formal language) and cholito bhasha (common language).</span></p>
<p style="text-align: justify;"><span style="color: #000000;">If opting for second language, most Bangladeshi people chose English as they have practical efficiency in English and its interactive usage in common situation. Apart from our official language, there are a significant number of tribal languages are spoken by the tribes of Bangladesh. The major and well-known tribal languages are Garo, Khashia, Magh, Manipuri, Munda, Chakma, Tipra etc.</span></p>
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