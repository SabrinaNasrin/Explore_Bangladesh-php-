<html>
<head>

  <title>Performing arts</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  .main-content{
    font-size: 18px;
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
                
            <article class="post-327 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Folk Songs</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:25px;" href="image/folk_song.jpeg"><img class="alignleft wp-image-1539" src="image/folk_song.jpeg" alt="2011-06-05-folk-song460" width="394" height="237"></a>Our folk songs are our cultural heritage. With a vast imagery and unfathomed beauty of melody, our folk songs are spiritually, mystically, romantically and culturally vast and diverse. Most established and popular form of folk songs includes Bhatiali, Baul, Marfati, Murshidi, and Bhawaiya.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Legendary lyricists like Lalon Shah, Hason Raja, Kangal Harinath, Romesh Shill, Abbas Uddin, and many unknown anonymous lyricists have enriched the tradition of folk songs of Bangladesh. And Robindro Shongit and Nazrul Giti are also upholding our cultural heritage in modern context.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p><span style="color: #000000;">&nbsp;<b>Dance</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Dance is a form of expression that enables our entire physical body to mingle with our soul. Our soul celebrates our existence through our body. With hundreds of variations like katthak, dhali, baul, manipuri, snake dances, classical, non-classical etc. our dance holds a dominant position in our Bangladeshi culture.</span></p>
<p><span style="color: #000000;">&nbsp;<b>Drama </b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Drama is one of the oldest form of performances arts that has been popularized in both urban and rural areas. In the urban areas, like in Dhaka, there are dozens of theatre groups who have been regularly staging locally written or plays written by famous writers of other countries which are usually adopted or translated. Popular theatre groups are Dhaka Theatre, Nagarik Nattya Sampraday and Theatre. Even street drama is gradually becoming a popular form of drama.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Jatra or folk drama is one the most significant divisions of Bangladeshi culture. Mostly themed around mythological stories that deals with love and tragedy, stories that depicts the heroism and virtues, jatra is not only a popular means of entertainment in rural areas, but also it holds a significant position to our culture that identifies our devotion and artistic passion towards art.</span></p>
<p><span style="color: #000000;"><strong>&nbsp;</strong></span></p>
<p><a href="image/tribal_art.jpg" style="float:right;padding-left:15px;"><img class="alignright wp-image-1540 size-full" src="image/tribal_art.jpg" alt="2005072113730201" width="351" height="280"  ></a><span style="color: #000000;"><strong>Tribal</strong></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Our tribal music and dance is as significant as our mainstream culture. They are of indigenous origin and also rooted with the Bangladeshi soil as much as any kind of Bangladeshi culture. Each tribe has its own dance and music numbers with their unique ways of expressing the spiritual being. Among the tribal dances, Monipuri and Santal are popular.</span></p>
                </div>
            </article>

            
            
        
    </div>


        




 <div class="clearfix"></div>
<footer class="footer">&#169;2016. All rights reserved to<br>
   Sabrina Nasrin<br>
   Department of CSE


  </footer>



</body>
</html>