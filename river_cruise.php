<html>
<head>

	<title>Grand river cruise</title>
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
                
            <article class="post-189 page type-page status-publish hentry">
                
                <div class="page-content">
                  <p>&nbsp;</p>
                    <p><a href="image/river.jpeg" style="float:left;padding-right:15px;padding-bottom:10px;"><img class="alignleft wp-image-345" src="image/river.jpeg" alt="RIVERS OF BANGLADESH" width="395" height="296" ></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Ahoy! Welcome aboard!</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Our rivers are protected by our wonderful nature. This is why Bangladesh is the ideal place for long and languid river cruise. River cruises are one of the major tourist attractions in Bangladesh which is gaining increasing popularity day by day.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">With a grand and resourceful Bay of Bengal at its north, Bangladesh is also called the land of rivers. As a riverine country, about 800 rivers including tributaries flow through the country in which our souls and livelihood are strongly connected. Like so many songs and poems — which are written specially to celebrate our rivers — the majestically curvy banks or the turbulent tide of Bangladeshi rivers give our people hope and an excitement to live the best out of it. Apart from these rivers, we also have plenty of haors, baor, jheel, beel which strengthens our relation with more affection.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The most fascinating cruise is the historic old paddlewheel service known as the Rocket Steamer. These paddlewheels was build in the British regime in the dockyards of Calcutta which have been a playing a major and historic role in the water travel. The experience of overnight journey from Dhaka to Hularhat on a first-class cabin of century old Rocket Steamer is just as royal as its builders.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Barisal, the southern part of Bangladesh, is the home of river and canals. Many of them flow through this division amidst the lush landscape. You will be amazed after discovering the life that depends strongly on the riverine resources. You can explore the rivers and canals of Barisal by country boats. In these rivers and canals, you will see guava gardens, floating fruit or rice market, boat market, traditional riverine lifestyle, and a unique wildlife. In addition, you can also experience see how our traditional rural life works.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The mysterious and nerve-spiking days-long river cruise through the majestic Sundarbans forest — the largest littoral mangrove forest — is definitely a unique experience for any foreign travelers. This land is the safest sanctuary for a diverse range of wildlife. If you are lucky, you can even get a peek at the world renowned Royal Bengal Tigers. The careless look of amazing deer, a rare glimpse or a sudden terrifying roar or even footprints of Royal Bengal Tiger on the swampy land of Sundarbans, hiking against the bushy and thick jungles of Sundarbans etc will completely satisfy any adventure seekers.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">During winter in Sylhet, the vast wetlands like Hail Haor, Hakaluki Haor, Tanguar Haor is crowded with a diverse range of wildlife. Among these wetlands, Tanguar Haor is located in Sunamganj District (northeast of Bangladesh) covering an area of about 100km<sup>2</sup> of which 2,802.36 ha<sup>2</sup> is wetland. With a unique ecosystem, it includes more than hundred resident birds and many more seasonal species of bird. A boat ride in these wetlands will give a resourceful bird-watching tour.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Located in Gowainghat, Ratargul Swamp Forest is the only freshwater swamp forest in Bangladesh. This also is one of the few freshwater swamp forest in the world. Currently, this forest is naturally conserved under the Department of Forestry, Government of Bangladesh. The forest is situated in the river Goain adjacent with the canal named Chengir Khal. During rainy season, the forest goes under 20-30 feet water. You will have to rent a boat to wonder around the Ratargul Swamp Forest.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Sangu River is the complete part of the natural beauty of Bandarban. It follows a northerly circuitous course in the hill tracts up to Bandarban. It enters the district from the east and flows west across the district and finally falls into the bay of Bengal at the end of a course of 270 km. This river is flowing through the hills thousands of years. It is an important route to communicate with Ruma and Thanci Upozilla. It has huge financial interests for the population of Bandarban. This river is widely used for transportation, agricultural and other necessary products for the people of remote community. In the winter season the current of the river almost becomes stagnant but in the rainy season the current becomes aggressive. Visitor must be attract with the beautification scattered on the both sides of it. You can find here hills, forests, falls with a river together. All the way you will be thrilled only and it is simply amazing. You will enjoy a magnificent river cruise in Sangu and there are so many spots to arrange a picnic. You can hire traditional boats or engine boats from the old Sangu bridge or from Boatghat at Kyachingghata.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">This large man-made lake of Bangladesh spanning over an area of approximately 11000 square kilometre, was created as a reservoir when the Kaptai dam was built during the 1960s. The lake was created by flooding valleys and plain lands between numerous hills. This created a picturesque view as forested hills and plateaus rise from beneath the water. The government run tourism corporation and private operators offer Kaptai Lake Cruise Tours, which is worth of it. Other scenic spots are also accessible through the waterways. On your way you will get to see the shuvolong waterfalls and beauty of Rangamati.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There are plenty of river cruise package offered by the local tour operators. Find the one you like….</span></p>
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