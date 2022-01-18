<html>
<head>

  <title>Major Archeological Site</title>
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
                
            <article class="post-290 page type-page status-publish hentry">
                
                <div class="page-content">
                    <h3>
   
<h3><strong><span style="color: #000000;">Paharpur Buddhist Vihara</span></strong></h3>
<p style="text-align: justify;"><a href="image/paharpur.jpeg"style="float:left;padding-right:15px;"><img class="alignleft wp-image-2113" src="image/paharpur.jpeg" alt="Pic-04" width="399" height="238" ></a><span style="color: #000000;">According to the Bengali Vocabulary, the name Paharpur (Pahar = hill, pur = locality) means a locality of hill. It is a village in Badalgachi Upazila of Naogaon District. The nearest railway station of Jamalganj that lies on the Khulna-Parvatipur rail tract and is connected with Paharpur by a 5km long brick metalled bye-way. Paharpur can also be reached from its nearest airport, Sayedpur, following a metalled road via Joypurhat. The village contains the ruins of a Buddhist monastery which was called Somapura Mahavihara (the great monastery situated in the locality of moon) in the ancient Buddhist World. It is now a World Cultural Heritage (BGD. 292).</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Location: Paharpur Bihar Museum, Naogaon</span></p>
<p style="text-align: justify;"><strong><span style="color: #000000;">How to go:</span></strong></p>
<p style="text-align: justify;"><span style="color: #000000;">There are luxurious Coach services from Dhaka to Naogaon.it takes about 5 hours to reach Naogaon and there are several Vehicles like Rickshaw, Cng, buses and auto rickshaws are available from there to go Paharpur.</span></p>
<h3><span style="color: #000000;"><b>Mainamati </b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:5px;" href="image/mainamati.jpeg"><img class="alignleft wp-image-969" src="image/mainamati.jpeg" alt="mainamati14" width="391" height="294" ></a>It is a hilly terrain with an average height of 15m in the district of Comilla. It stands in a north-south alignment with its length extending over 17km and average breadth 2.5km. At the different points of its slope there lie a number of older structural ruins pertaining to temple, stupa and vihara. Along with these ruins some tools made of fossilized wood (could be of pre-historic origin), both Hindu and Buddhist sculptures, metallic coins, objects of daily use, terracotta plaques, carved bricks, ornaments, potteries, metallic utensils, seals and ceilings, copper plates etc. have also been salvaged. On stylistic ground they may be dated in the circa 7th-13th century AD. Scholars are of opinion that there lie the ruins of a southeastern Bengali capital, ‘Devaparvata’ by name, in a corner of the hill range. There was another capital called ‘Jaykarmantavasaka’ in an adjoining corner of the Mainamati-Lalmai Hill Range. There has an archaeological museum and a rest house in Salvana village which occupies the mid-most point of Mainamati-Lalmai Hill Range.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">One can start the journey for Mainamati- Lalmai by any kind of vehicle from Comilla Railway Station.</span></p>
<div class="segmenttitle">
<h4 class="float-left" style="text-align: justify;"><strong><span style="color: #000000;">How to go:</span></strong></h4>
</div>
<div class="content">
<p style="text-align: justify;"><span style="color: #000000;">It is very easy to access this place. It’s just a kilometer away from the Moynamoti War Cemetery. If you are not familiar with the cemetery, then consider the Comilla Cantonment.&nbsp; If you come from Dhaka, then drop at the cantonment gate from the bus. From there you take a rickshaw to go to there.</span></p>
</div>
<h3><span style="color: #000000;"><b>Kantajir Temple</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:5px;" href="image/Kantajir_temple_.jpg"><img class="wp-image-972 alignleft" src="image/Kantajir_Temple_.jpg" alt="Kantaji_Temple_" width="385" height="289"></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">This fabulously embellished temple situated about 19.32km north of Dinajpur town. Maharaja Pran Nath built it in 1752. It was originally a Navaratna (nine- towered) temple. Every inch of its surface is lavishly decorated with different scenes as described in the two Hindu Great Epics, various Hindu divinities, contemporary social life and floral cum geometric motifs.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">One can start his journey for the monument from Dinajpur town or Sayedpur Airport by any kind of motorized vehicle.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>How to go</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">The temple is about a 1 mile west of Dinajpur-Thakurgaon Highway across the Dhepa River. Various types of communications like Bus, Motor bike and Rickshaw van can get you there within hours from the Town. You have to get off the bus at the Place called ‘Kantanagar’, if you choose to walk and enjoy the country atmosphere. However the journey will be a little lengthy, if you go there by Auto rickshaw.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Accomodation</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Dinajpur has some economy accommodation for your stay, just you need a booking before the start. There are two types of accommodations are: government rest houses situated at different locations across the town, while privately held are enough and affordable for you. Circuit House(teleph. 0531-63112), located west of Bara Maidan is handled by the District Authority, while Parajatan Motel(teleph. 0531-64710)located at New town Housing, is a bit expensive for ordinary travelers, however the facilities are much better than others. Ram Sagar Rest house (telph. 0531-65558) located 6km south of the town at Ram Sagar tank will be an awesome place for nature lovers, but no food is available there. You will have to arrange by yourself. Privately held Diamond Hotel(telepone.0531-64629) is renowned for its wide accommodation facilities. There are two hotels( Diamond 1, Diamond 2)under the same name, facing one another, located at Maldapatty in Dinajpur town. They have their own food facilities available near them at Bashuniapatty, 1 minute of walk away. Hotel Sonar Tari(teleph.+8801716018995) at Modern More, Ganeshtala, Hotel Unique (+8801736335264) at Nimatala, New Hotel (0531-64155) and Hotel Konica (+880181829572) at Station Road in Dinajpur are also some notable hotels for your stay. Excluding these 3 pre historic sites, there are still many other points of archeological interests located in the Northern part of Bangladesh.</span></p>
<h3><span style="color: #000000;"><b>Sitakot Vihara</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:5px;" href="image/sitakot_bihar.jpeg"><img class="alignleft wp-image-973" src="image/sitakot_bihar.jpeg" alt="Sitakot Vihara" width="416" height="223" ></a>Situated in village Fatehpur Maras under Nowabgonj thana of Dinajpur District, the site has yielded the impoverished remains of a brick-built Buddhist monastery. It is medium in size, roughly 65.5m each side, and has yielded a number of movable antiquities, i.e. bronze sculptural pieces of Mahayana origin, iron dagger, terracotta net-sinker, terracotta cone, carved brick, potteries of early medieval origin etc.. On ground of style they are datable to the circa 7th-8th century AD.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">To reach at the site one can start his journey from Dinajpur zero point by any kind of motorized vehicle comfortably.</span></p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Mahasthangarh</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:5px;" href="image/mahasthan.jpeg"><img class="wp-image-975 alignleft" src="image/mahasthan.jpeg" alt="Mahasthangarh, Bogra" width="408" height="274"></a>Situated in village Mahasthan of Bogra district, the extensive site represents the wreckage of an ancient city (cir. 4th cent. Bc to 14th cent called Pundranagara. It is roughly oblong (1.523km by 1.371km) in shape encircled by high rampart with thick brick wall core at places and is entrenched on all sides save the east where the river Karatoya were following in ancient time. Inside the fort, however, still lie the remnants of temples, stupas, mosques, tombs and residential complexes at random. Moreover, a good volume of movable antiquities have also been coins, silver coated copper cast coins barring inscription, roulette ware, NBPW, black slipped ware, black and red ware, beads of semiprecious stone, terracotta plaques and toys, sculptures, objects of daily use and so on. But by far the most important one is a Brahmi Inscriptional slab datable to the 3rd cent BC. Around the fort for about 8km excepting the east suburb, there are many older mounds and reservoirs. There has a small site museum and a rest-house near its northeast corner. A mission of French experts has been working in the site since 1993 in order to reveal its whole unknown past as per an agreement with the Government of Bangladesh.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><strong><span class="moduleItemExtraFieldsLabel">Location</span></strong> :<span class="moduleItemExtraFieldsValue">North Bengal,Bogra.</span></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><strong><span class="moduleItemExtraFieldsLabel">How to go:</span></strong></span></p>
<p id="internal-source-marker_0.3743193687578922" dir="ltr"><span style="color: #000000;">Have to go Bogra first from Dhaka by road, and there are many bus services.</span></p>
<p dir="ltr"><span style="color: #000000;">From Bogra town can go to Mahasthangarh by rickshaw, auto-rickshaw or bus.</span></p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Lalbagh Fort</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"> <a href="image/lalbagh.jpeg"style="float:left;padding-right:15px;padding-bottom:5px;"><img class="alignleft wp-image-7615 " src="image/lalbagh.jpeg" alt="lalbagh Fort" width="403" height="255" ></a>The capital city Dhaka predominantly was a city of the Mughals. In hundred years of their vigorous rule successive Governors and princely Viceroys who ruled the province, adorned it with many noble monuments in the shape of magnificent palaces, mosques, tombs, fortifications and Katras often surrounded with beautifully laid out gardens and pavillions. Among these, a few have survived the ravages of time, aggressive tropical climate of the land and vandal hands of man.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">But the finest specimen of this period is the Aurangabad Fort, commonly known as Lalbagh Fort, which indeed represents the unfulfilled dream of a Mughal Prince. It occupies the south-western part of the old city, overlooking the Buriganga on whose northern bank it stands as a silent sentinel of the old city. Rectangular in plan, it encloses an area of 1082′ by 800′ and in addition to corners and a subsidiary small unpretentious gateway on north, it also contains within its fortified. perimeter a number of splendid monuments, surrounded by attractive garden. These are, a small 3-domed mosque, the mausoleum of Bibi Pari, the reputed daughter of Nawab Shaista Khan and the Hammam and Audience Hall of the Governor. The main purpose of this fort, was to provide a defensive enclosure of the palatial edifices of the interior and as such was a type of palace-fortress rather than a seize-fort.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><strong><span class="moduleItemExtraFieldsLabel">Location</span></strong></span> <span class="moduleItemExtraFieldsValue" style="color: #000000;">Lalbagh,Old Dhaka</span></p>
<div class="clr" style="text-align: justify;"><span style="color: #000000;"><strong><span class="moduleItemExtraFieldsLabel">How to Go :</span> </strong></span></div>
<p style="text-align: justify;"><span id="internal-source-marker_0.15351105525123476" style="color: #000000;">You can visit lalbagh fort very easily through rickshaw or public bus transport with minimum cost of 10-50 BDT from Gulistan Golap Shah Mazar in Dhaka.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><strong><span class="moduleItemExtraFieldsLabel">Where to stay:</span> </strong></span></p>
<p style="text-align: justify;"><span style="color: #000000;">There are many Hotels and Restaurants you will find in Dhaka city as well as Old Dhaka to stay and fooding .</span></p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Sonargaon</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:5px;" href="image/sonargaon.jpeg"><img class="wp-image-1013 alignleft" src="image/sonargaon.jpeg" alt="panam-city-Sonargaon" width="375" height="294"></a>Panam City, also known as “the lost city” a historic place &amp; important archaeological site in Bangladesh. Situated in Sonargaon Upazila of Narayanganj District. The structures are older than around 400-500 years. Panam Nagar, The Golden City of Sonargaon, Bangladesh, built blending the Indo-European architectural styles, reflect the socio-economic condition and lifestyle of rich Hindu cloth merchants and the elite class in British colonial period. By the 14th century Sonargaon became a commercial port. Trade activities were mentioned by travelers like Ibn Batuta, Ma Huan and Ralph Fitch. Maritime ships travelled between Sonargaon and southeast/west Asian countries. Muslin / MUSLIN (a loosely-woven cotton fabric – became very popular at the end of the 18th century in France) was produced in this region.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><strong><span class="moduleItemExtraFieldsLabel">Location:</span></strong></span> <span class="moduleItemExtraFieldsValue" style="color: #000000;">Sonargaon, Narayanganj, Dhaka</span></p>
<div class="clr" style="text-align: justify;"><span style="color: #000000;"><strong><span class="moduleItemExtraFieldsLabel">How to Go:</span> </strong></span></div>
<p style="text-align: justify;"><span id="internal-source-marker_0.2671114989180253" style="color: #000000;">You can reach that place using bus from Dhaka(Gulistan). This will take you around 1 hour to reach at the place. You have to get down from the bus at Mograpara Crossing.From the crossing, you have to take a rickshaw, and have to tell the puller to drop you at Sonargaon. This will require 20 taka for the lift.</span></p>
<div class="clr" style="text-align: justify;"><strong><span class="moduleItemExtraFieldsLabel" style="color: #000000;">Where to stay </span></strong></div>
<p style="text-align: justify;"><span id="internal-source-marker_0.2671114989180253" style="color: #000000;">You should have to come back in Narayanganj city to stay in Residencial Hotel because there are no facilities to stay at night in Sonargaon.There are some Restaurants inside and outside of Sonargaon.</span></p>

<p>&nbsp;</p>
<h3 style="text-align: justify;"><span style="color: #000000;"><b>Gorer Mosque, Barabazar, Jhinaidah</b></span></h3>
<p style="text-align: justify;"><a href="image/gorer_mosque.jpeg"style="float:left;padding-right:15px;padding-bottom:5px;"><img class="alignleft wp-image-7664" src="image/gorer_mosque.jpeg" alt="gorer mosque" width="386" height="289" ></a><span style="color: #000000;">It is a single domed square mosque with its entrances on the east. It is entirely built of bricks and datable to the 15th century AD.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>How to go</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">From Bogura, take a bus to Mahasthan (approximately 11 km). From Mahathan take a rickshaw or a three wheeler to get to the sights (approximately 1.7 km)</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Bus Service Provider</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Hanif Enterprise,&nbsp;Phone: 02-9120116, 8114442</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Shyamoli Paribahan,&nbsp;Phone: 02-9333803</span></p>

<p>&nbsp;</p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Train Service Provider</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Bangladesh Railway,&nbsp;Phone: 02-9358634, 8315857</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Where to Stay</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">You can stay at Archeological department rest house; the three rooms having a fan and bathroom. And there is also a small dinning room. List of Hotels in Bogra:</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Parjatan Motel,&nbsp;Phone: 88-051-67024-7, Fax: 88-051-66753</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Safe Way Motel,&nbsp;Phone: 88-051-66087</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Hotel Al-Amin,&nbsp;Phone: 88-051-72937</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Akboria Abasir,&nbsp;Phone: 88-051-65765</span></p>


<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Bagha Mosque, Rajshahi</b></span></h3>
<p><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:5px;" href="image/bagha_mosque.jpeg"><img class="wp-image-986 alignleft" src="image/bagha_mosque.jpeg" alt="bagha-mosque" width="422" height="281" ></a></span></p><p style="text-align: justify;"><span style="color: #000000;">Built in 1523 A.D. by Sultan Nusrat Shah, son of Hussain Shah, it is a richly decorated monument originally roofed over with 10 domes which collapsed long ago but recently rebuilt carefully to their original form. The superb terracotta decoration on the central mihrab represents floral frame work and jali rosettes. The whole outer surface of the mosque is beautifully embellished with fine terracotta art motifs.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">One can start his journey for the monument from Rajshahi Railway Station by any kind of motorized vehicle.</span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>
<h3 style="text-align: justify;"><span style="color: #000000;"><b>Baliati Prasad</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:5px;" href="image/baliati_prasad.jpeg"><img class="alignleft wp-image-987" src="image/baliati_prasad.jpeg" alt="Baliati Prasad" width="429" height="321" ></a>Baliati Prasad is a palatial complex situated 35km to the northwest of Dhaka city and can be approached by light motorized vehicle from any traffic point of Dhaka. It accommodates a group of five residential buildings enclosed within a walled compound. The face of the compound is on the east and can be entered through four lion-gates. The buildings are built of brick, lime and brick-dust. The general delineation of the buildings speaks of the neo-Indo-European architecture as they are provided with beautiful Corinthian pillar, colored glass ventilation, tile paved floor, marble table, portraits and many other objects of antiquarian interest. The builders of the establishments were the members of a local elite family who lived in the beginning of the last century.</span></p>
<p><span style="color: #000000;">It can be reached from Dhaka by any kind of motorized vehicle following first the road leading to Aricha and then to Saturia via Kalampur transaction.<br>
</span></p>

<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Bihar and Vasu-Bihar</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:5px;" href="image/vasu_vihar.jpeg"><img class="wp-image-984 alignleft" src="image/vasu_vihar.jpeg" alt="Bihar-and-Vasu-Bihar" width="426" height="334"></a>Bihar and Vasu-Bihar are two villages, situated about 4km to the west of Mahasthangarh. The Nagar river passes through the present Bihar village and, on its western bank, there is a very large brick mound, approximately measuring 213.3m × 182.8m. About 1.61km northwest of this place is the Vasu-Bihar village, where there is another considerably large mound, about 9.14m high, locally known as Narapatir Dhap. A little south or this ruined mound lies a large tank known as Jhinjhrailer Dighi. Close to it on the northwest, the ruins of a temple with carved and ornamental bricks is visible, which now bears the name of Sanyasir Bari. Beyond that on further south lies the Susong Dighi or Sasanka Dighi, traditionally known to have been excavated by king Sasanka (606-636 A.D.). Another large ancient brick mound also is visible towards the south of the Bihar village, situated on a large tank.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The famous Chinese pilgrim, Yuan Chwang, in his itinerary has mentioned Po-Shi-Po, the name of a grand monastery situated about 6km west of Pundravardhana (Pan-na-fa-tan-na), which he visited. Cunningham identifies this Po-Shi-Po either with the mound located at Bihar or at Vasu-Bihar. The pilgrim found here ‘a grand monastery remarkable for the size and height of its tower and pavilion. It was occupied by no less than 700 monks who studied the Mahayana; and men famous for their learning flocked here from the eastern districts. At a short distance from the monastery there was a stupa built by Asoka on the site where Buddha explained his laws to the Devas. Near this was a spot where the last Buddha had taken exercise and rested, traces of his foot-marks were still to be seen’.‘Not far from the last place there was a temple containing the statue of Avalokitesvara which manifested its divine powers by prodigies’.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Cunningham identifies the great monastery of Yuan Chwang with the extensive brick mound of the Bihar village itself. The lofty stupa built by Asoka, he thinks, is well represented by the solid brick mound at Vasu Bihar (present Narapatir Dhap), to the east of which is a large tank (present Jhinjhrailer Dighi).</span></p>
<p style="text-align: justify;"><span style="color: #000000;">He further identifies the Vihara containing statue of Avalokitesvara with the small ruined temple to the north-west of the Asokan Stupa (present Sanyasir Bari). He describes that ‘It is a small building, only 3.9m ×3.3m inside, but the walls are 1.21m thick and it is surrounded by a wall forming an enclosure 31.69m long from north to south by 19.50m broad. The entrance is on the south towards the stupa. No remains of sculpture could be found, but there were plenty of carved bricks, both in situ in the walls and scattered about the ground. Recent excavation, however, has revealed the derelict relic of a medium size Buddhist monastery at village Bihar and a group of three smaller monasteries at village Vasu-Bihar. They have been dated in the 7th- 10th century A.D.</span></p>

<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Idrakpur Fort</b></span></h3>
<p style="text-align: justify;"><a style="float:left;padding-right:15px;padding-bottom:5px;"href="image/idrakpur_fort.jpeg"><img class="alignleft wp-image-7627" src="image/idrakpur_fort.jpeg" alt="11837899125_984c86fdfe_b1" width="386" height="254"></a><span style="color: #000000;">This small fortress is situated on the bank of the dried up Ichamoti river at Idrakpur in Munshigonj town. It was built by Mir Jumla, the viceroy of Bengal in 1660 A.D. The special feature of the fort is a huge solid circular platform or drum, with a diameter of 32.91m. The huge platform evidently was used to mount cannon and also as a watch tower.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><strong>How to go :</strong></span><br>
<span style="color: #000000;"> Munshiganj is not so far from Dhaka. If you are willing to travel and explore you can think of visiting Idrakpur Fort. There are some bus services like Dighirpaar Transport and Dhaka Transport going to Munshiganj from Gulisthan Bus Stand. Your destination should be of a place named Muktarpur. After getting down from the bus all you need is to catch a rickshaw to Idrakpur Fort.</span></p>

<p>&nbsp;</p>
<h3><span style="color: #000000;">&nbsp;</span><span style="color: #000000;"><b>Jorbangla Temple</b></span></h3>
<p style="text-align: justify;"><a href="image/jorbangla_temple.jpeg"style="float:right;padding-left:15px;padding-bottom:5px;"><img class="wp-image-11013 alignleft" src="image/jorbangla_temple.jpeg" alt="Jor_Bangla_Temple_3_Bishnupur" width="380" height="285"></a><span style="color: #000000;">It resembles two curved Bangali huts joined together from which this highly ornate brick temple derives its name of Jorbangla. Traditionally it was built by one Braja Krori, a ‘Tahsilder under Naweb of Bengal in the 18th century A.D. It stands on a single platform. The constituent of the temple is an anti-chamber and sanctuary. The frontage of the sanctuary is provided with three ornamental arched entrances. Its entrance facade is enriched with terracotta plaques depicting scenes from the Hindu Epic.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">One can start his journey for the monument from Pabna Bus Stoppage or Railway Station by any kind of motorized vehicle.</span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>M.M. Datta Bari</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">It is a brick built house situated in village Sagardari of Jessore district. It contains three groups of buildings built in the 19th century A.D. by a locally reputed lawyer. But the house is famous since it is the place where the famous Bengali poet Michael Madhusudan Datta.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">One can start his journey to visit the site from Jessore airport by any kind of motorized vehicle</span></p>
<h3><span style="color: #000000;"><b>Mir Kadim Bridge</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">It is a chamber type of masonry bridge spanning the Mir Kadim Khal, which connected ‘Jatar Deul’and Abdullapur village of Munshigonj district. Its architectural style clearly points to its erection during the Mughal period for military purpose or to facilitate movement of Traffic. This bridge spans over three arches.</span></p>
<h3><span style="color: #000000;"><b>Mughal Eidgah</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">One of the earliest dated Mughal monuments in Dhaka is the Eidgah, built in 1640 by Mir Abdul Qasim, the Dewan of prince Shah Shuja. A Persian inscription set over the central prayer niche recorded the date of its erection. The screen wall on the west, with a series of mihrabs, has been extensively repaired and the perimeter walls of the remaining wings have been reconstructed in 1988.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">One can start his journey for the monument from any part of Dhaka by any kind of motorized vehicle.</span></p>
<h3><span style="color: #000000;"><b>Bharat Bhayana , Jessore</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">The site is known after the name of its village Bharat Bhayana which is in the thana of Kesabpur under Jessore district. The village and its surroundings are dotted with some and sparsely lying architectural pieces. Of them, only one, Bharat Rajar Deul, has yielded the substantial ruins of a brick-built curious structure. It was planned on a cruciform base and endowed with several bind cells above. It shows starkly plain wall surface save some receding offsets at the base level only. The present height of the roof-less structure is about 10 meter at its highest point that appears to have been much more in its original form. The site has also yielded some busts of princely male figures, potteries of early medieval origin etc. On stylistic ground they may be dated in circa 5th-6th century AD.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">One can start his journey for Bharat Bhyana from either Khulna Bus Stoppage or Jessore Airport by any kind of motorized vehicle.</span></p>
<h3><span style="color: #000000;"><b>Bibi Pari’s Tomb</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Architecturally most interesting and unique Mughal building in Dhaka, Bibi Pari’s Tomb is the Mausoleum of Paribibi which was erected in the center of the Lalbagh fort. Tradition attributes that Paribibi was the favorite daughter of Nawab Shaista Khan. The shrine is built of three kind of stones namely- black basalt from Rajmahal, grey and stone. Internally the tomb is symmetrically divided into nine compartments.</span></p>
<h3><span style="color: #000000;"><b>Godaibari Dhap</b></span></h3>
<p><span style="color: #000000;">It is a medium size mound situated about 4km to the southwest of Mahasthangarh. In course of a recent digging, the mound has exposed the impoverished structural vestiges of a lost temple datable to the 7th-8th century. Moreover, it has yielded a stone piece bearing some Brahmi inscription. The text, however, has not yet been properly deciphered.</span></p>
<h3><span style="color: #000000;"><b>Harish Chandra Raja’s Mound</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Situated on the northeast corner of Savar town (18km north of Dhaka metropolitan city), the mound has yielded the substantial ruins of a smaller Buddhist monastery entirely built of brick. In its close north there still exist the ruins of a medium size votive stupa. The site has also exposed some bronze sculptural pieces belonging to Buddhist pantheon, carved bricks, potteries and a silver coin of Pattikera-Harikela origin. It is further to be mentioned here that a number of Imitation Gupta Gold Coins have earlier been reported from the surroundings of Harischandra Rajar Prasada Mound time and again. Moreover, there exist the remains of a mud fort, Kotbari by name, on the northwest of the monastery. It is also to be remembered that remains of a group of votive stupas were also discovered a few years back in a place called Rajasan which is only 150m on the east of the site. Of the promising structural ruins of the neighboring area mention may also be made of ‘Harischandra Rajar Buruj’ that appears to have been a brick-built stupa. On stylistic ground they are datable to circa 6th-8th century AD.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">One can start his journey for the site directly from Dhaka by any kind of motorized vehicle.</span></p>
<h3><span style="color: #000000;"><b>Muktagacha Palace</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:5px;" href="image/muktagacha.jpeg"><img class="alignleft wp-image-983" src="image/muktagacha.jpeg" alt="Muktagacha" width="449" height="300" ></a>It is an extensive palatial complex sprawling over at least 20 hectors of land. The whole area is full of many ponds, temples, palaces and out buildings. Of them only a part is now being protected by the Department of Archaeology. The protected area is an east facing enclosed precinct studded with gateway, garden, reservoirs, residential complexes, temples and several other ancillary buildings. The architecture of all the buildings simulate Indo-European neo-classic ethic. They were built by different members of the Muktagacha zamindar family in different time. Some are still being used for different purposes. The protected part is called ‘Char Ana’ locally. It may hardly be dated in the early 20th century A.D.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Puthia Palace</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a style="float:right;padding-left:15px;padding-bottom:5px;" href="image/puthia.jpeg"><img class="alignleft wp-image-7652 " src="image/puthia.jpeg" alt="Puthia-Palace" width="445" height="230" ></a>Puthia is about 28km east of Rajshahi town and is connected to the Rajshahi-Natore highway by a 200m stretch of feeder road towards the south. This derelict but imposing palace faces the ‘Dol-Mancha’ temple across a large meadow to the north presenting a projection on each of its eastern and western ends. Its central part, which is about 15m wide, has an imposing portal in front. The building has two other smaller projections on either end and a further inset at the rear. A 3 meter wide verandah runs along the front of the block and provides access to some large halls behind. The balcony roof is supported on three graceful semi-Corinthian round and fluted columns which reach up to the upper storey. The central part of the building is relieved with a triangular pediment and the parapet is tastefully decorated with floral plasterwork. A broad wooden staircase, which is built into the eastern end of the verandah, provides access to the upper storey. Each projecting end of the edifice is relieved with four semi-Corinthian columns. A bilingual inscription fixed over the portal records its construction in 1895 by Rani Hemanta Kumari Devi. There are to be seen a few more out-buildings in its premise, all being built in the same period.</span></p>
<p><span style="color: #000000;"><b>How to go</b></span></p>
<p><span style="color: #000000;">Rajshahi – Natore highway, one kilometer south of puthiya bas stand. and only five minutes from the highway. Distance of 34 kilometers by road from the city of Rajshahi.</span></p>
<p><span style="color: #000000;"><b>Where to Stay</b></span></p>
<p><span style="color: #000000;">At Rajshahi there are Different kind of hotels,those are</span></p>
<p><span style="color: #000000;">1. Hotel Dalas International</span></p>
<p><span style="color: #000000;">Extra Facilities: Boiled Water, Television for Each Room, Car Parking, Attached Bath. Address:</span></p>
<p><span style="color: #000000;">Bindur More, Rail Gate, Rajshahi</span></p>
<p><span style="color: #000000;">Phone: 0721-811470, 0721-773839, Mobile: 0171-802387</span></p>
<p><span style="color: #000000;">2.&nbsp;&nbsp;&nbsp; HOTEL NICE&nbsp; International</span></p>
<p><span style="color: #000000;">Address: Ganakpara, Shaheb Bazar (West of P.N Girls High School)&nbsp; Rajshahi-6100</span></p>
<p><span style="color: #000000;">Phone: 0721-776188, 0721-771808</span></p>
<p><span style="color: #000000;">Fax : 88-0721-775625</span></p>
<p><span style="color: #000000;">Email:&nbsp; Hotel.nice@yahoo.com</span></p>
<p><span style="color: #000000;">Website Address:&nbsp; www.hotelnice-raj.com</span></p>
<p><span style="color: #000000;">3.&nbsp;&nbsp;&nbsp; Hotel&nbsp; Mukta&nbsp; International</span></p>
<p><span style="color: #000000;">Address: Ganakpara, Shaheb Bazar, Rajshahi</span></p>
<p><span style="color: #000000;">Phone: 0721-771100, 0721-771200</span></p>
<p><span style="color: #000000;">4.&nbsp;&nbsp;&nbsp; Hotel&nbsp; Gulshan</span></p>
<p><span style="color: #000000;">Extra Facilities: Car Parking, Dining, Salon, Attached Bath. Address: Station Road, Rajshahi</span></p>
<p><span style="color: #000000;">Phone: 0721-772592, 0721-772691</span></p>
<p><span style="color: #000000;">Mobile: 0172-197883</span></p>
<p><span style="color: #000000;">5.&nbsp; Hotel Chez Razzak Service</span></p>
<p><span style="color: #000000;">Address: Padma Housing Estate, Rajshahi</span></p>
<p><span style="color: #000000;">Phone:&nbsp; 0721-762011</span></p>
<p><span style="color: #000000;">Mobile: 01715-772824</span></p>
<p><span style="color: #000000;">6.&nbsp; Hotel Sukarna International</span></p>
<p><span style="color: #000000;">Extra Facilities: Boiled water, Television,</span></p>
<p><span style="color: #000000;">Telephone, Car Parking, Attached Bath, AC Hall Room Address: Samobai Super Market, Malopara,</span></p>
<p><span style="color: #000000;">Rajshahi Phone: 0721-771817, 770670,</span></p>
<p><span style="color: #000000;">Mobile: 01711-811014, 01717-888853</span></p>
<p><span style="color: #000000;">7.&nbsp; Hotel Way Home</span></p>
<p><span style="color: #000000;">Address:&nbsp; New Market Road, Rajshahi. Phone:&nbsp; 0721-812470</span></p>
<p><span style="color: #000000;">Mobile: 01195209874</span></p>
<p><span style="color: #000000;">8.&nbsp;&nbsp;&nbsp; Haq’s&nbsp; Inn</span></p>
<p><span style="color: #000000;">Extra Facilities: Boiled water, Television, Car Parking, Attached Bath</span></p>
<p><span style="color: #000000;">Address: Shiroil, Rail Station Road, Rajshahi -6100</span></p>
<p><span style="color: #000000;">Phone: 0721-810420, 0721-810421</span></p>
<p><span style="color: #000000;">Mobile :01715605157</span></p>
<p><span style="color: #000000;">Email:&nbsp; haqsinn@librabd.net</span></p>
<p><span style="color: #000000;">9.&nbsp; Hotel&nbsp; Parjatan Motel</span></p>
<p><span style="color: #000000;">Address: Abdul Mazid Road, Kazihata, Rajshahi ( Near&nbsp; Zoo&nbsp; of&nbsp; Rajshahi ) Phone: 0721-775237</span></p>
<p><span style="color: #000000;">10.&nbsp;&nbsp; Hotel Mid Town International</span></p>
<p><span style="color: #000000;">Extra Facilities: Boiled water, Television, Telephone, Dining, Attached Bath</span></p>
<p><span style="color: #000000;">Address: Shaheb Bazar (Be side of Zero Point), Rajshahi</span></p>
<p><span style="color: #000000;">Phone: 0721-774961, 0721-811528</span></p>
<p><span style="color: #000000;">Mobile: 0173-704314</span></p>
<p><span style="color: #000000;">11.&nbsp;&nbsp; Hotel Red Castle</span></p>
<p><span style="color: #000000;">Address: Near Rajshahi College, Rajshahi. Phone: 0721-810046</span></p>
<p><span style="color: #000000;">Mobile : 01714020124</span></p>
<p><span style="color: #000000;">12.&nbsp;&nbsp; Hotel Classic International</span></p>
<p><span style="color: #000000;">Extra Facilities: Car Parking, Television, Attached Batch Address: Hossain Super Market, Rani</span></p>
<p><span style="color: #000000;">Bazar, Rajshahi Phone: 0721-771313</span></p>
<p><span style="color: #000000;">13.&nbsp; Hotel Sundarban International</span></p>
<p><span style="color: #000000;">Extra Facilities: Attached Bath, Television</span></p>
<p><span style="color: #000000;">Address: Shiroil Local Bus Station, Shiroil, Rajshahi</span></p>
<p><span style="color: #000000;">Mobile: 0189-821128</span></p>
<p><span style="color: #000000;">14. Hotel Heaven</span></p>
<p><span style="color: #000000;">Extra Facilities: Attached Bath, Television Address: Station Bazar, Shiroil, Rajshahi Phone:</span></p>
<p><span style="color: #000000;">0721-775054, Mobile: 0172-092109</span></p>
<p><span style="color: #000000;">15. Hotel Al-Hera</span></p>
<p><span style="color: #000000;">Extra Facilities: Attached Bath, Television</span></p>
<p><span style="color: #000000;">Address: Rani Bazar, Rajshahi</span></p>
<p><span style="color: #000000;">Phone: 0721-774486</span></p>
<p><span style="color: #000000;">16.&nbsp; Hotel Hasna Hena</span></p>
<p><span style="color: #000000;">Extra Facilities:</span></p>
<p><span style="color: #000000;">Attached Bath, Television</span></p>
<p><span style="color: #000000;">Address: Shiroil Station, Ghoramara, Rajshahi</span></p>
<p><span style="color: #000000;">Phone: 0721-774565</span></p>
<p><span style="color: #000000;">17.&nbsp; Hotel Elegant</span></p>
<p><span style="color: #000000;">Extra Facilities: Attached Bath, Television, Prayer Room</span></p>
<p><span style="color: #000000;">Address: Ganakpara, Shaheb Bazar, Rajshahi</span></p>
<p><span style="color: #000000;">Phone: 0721-772103, Mobile: 0171-109633</span></p>
<p><span style="color: #000000;">18.&nbsp; Hotel Golden Star</span></p>
<p><span style="color: #000000;">Extra Facilities: Attached Bath, Television Address: Shiroil Station, Ghoramar, Rajshahi Mobile:</span></p>
<p><span style="color: #000000;">0176-411403</span></p>
<p><span style="color: #000000;">19.&nbsp; Hotel City</span></p>
<p><span style="color: #000000;">Extra Facilities: Attached Bath, Television Address: Shiroil Station, Ghoramar, Rajshahi Mobile:</span></p>
<p><span style="color: #000000;">0176-386386</span></p>
<p><span style="color: #000000;">20.&nbsp; Hotel Rajmohal</span></p>
<p><span style="color: #000000;">Extra Facilities: Attached Bath, Television, Prayer Room</span></p>
<p><span style="color: #000000;">Address: Ganakpara, Shaheb Bazar, Rajshahi</span></p>
<p><span style="color: #000000;">Phone: 0721-774399</span></p>
<p><span style="color: #000000;">21. Hotel Anam</span></p>
<p><span style="color: #000000;">Extra Facilities: Television, Telephone, Attached Bath Address: Anam Plaza, Shaheb Bazar, Malopara,</span></p>
<p><span style="color: #000000;">Rajshahi Phone: 0721-773740, 0721-774764</span></p>
<p><span style="color: #000000;">22.&nbsp; Hotel Al – Rashid</span></p>
<p><span style="color: #000000;">Extra Facilities: Car Parking, Prayer Room, Television, Attached Bath</span></p>
<p><span style="color: #000000;">Address: Shaheb Bazar, Malopara, Rajshahi</span></p>
<p><span style="color: #000000;">Phone: 0721-775537</span></p>
<p><span style="color: #000000;">23.&nbsp; Hamidia Grand Hotel</span></p>
<p><span style="color: #000000;">Extra Facilities: Television, Attached Bath</span></p>
<p><span style="color: #000000;">Address: Shaheb Bazar, Rajshahi, Phone: 0721-772930</span></p>
<p><span style="color: #000000;">24.&nbsp; Hotel Al – Hasib</span></p>
<p><span style="color: #000000;">Extra Facilities: Television, Attached Bath for Each Room Address: Al – Hasib Plaza, Ganakpara,</span></p>
<p><span style="color: #000000;">Shaheb Bazar, Rajshahi Phone: 0721-774399</span></p>
<p><span style="color: #000000;">25.&nbsp; Hotel Mohanagar</span></p>
<p><span style="color: #000000;">Extra Facilities: Television, Attached Bath for Each Room</span></p>
<p><span style="color: #000000;">Address: Ganakpara, Shaheb Bazar, Rajshahi</span></p>
<p><span style="color: #000000;">Phone: 0721-774399</span></p>
<p><span style="color: #000000;">Mobile: 0172-777480</span></p>
<p><span style="color: #000000;">26.&nbsp; Hotel Star</span></p>
<p><span style="color: #000000;">Extra Facilities: Television, Attached Bath</span></p>
<p><span style="color: #000000;">Address: Karim Super Market, Shaheb Bazar, Rajshahi</span></p>
<p><span style="color: #000000;">Mobile: 0176-164443, 0176-475639</span></p>
<p><span style="color: #000000;">27.&nbsp; Hotel Memory</span></p>
<p><span style="color: #000000;">Extra Facilities: Common Bath</span></p>
<p><span style="color: #000000;">Address: Abdul Kader Monjil (First Floor), Ganakpara Shaheb Bazar, Rajshahi</span></p>
<p><span style="color: #000000;">Phone: 0721-774742</span></p>
<p><span style="color: #000000;">28. Hotel Sharna</span></p>
<p><span style="color: #000000;">Extra Facilities: Attached Bath for Each Room, Television Address: Gold hill Complex, Kazi Nazrul</span></p>
<p><span style="color: #000000;">Islam Road Shaheb Bazar, Rajshahi</span></p>
<p><span style="color: #000000;">Mobile: 0171-302388</span></p>
<p><span style="color: #000000;">29.&nbsp; &nbsp;Hotel Prince</span></p>
<p><span style="color: #000000;">Extra Facilities: Television, Attached Bath</span></p>
<p><span style="color: #000000;">Address: Be side of Bhubon Mohan Park, Malopara, Rajshahi, Phone: 0721-772776,</span></p>
<p><span style="color: #000000;">Mobile: 0171-364164</span></p>
<p><span style="color: #000000;">30.&nbsp;&nbsp; Hotel Jomjom</span></p>
<p><span style="color: #000000;">Extra Facilities: Television, Attached Bath, Car Parking, Prayer Room</span></p>
<p><span style="color: #000000;">Address: Be side of Bhubon Mohan Park, Malopara, Rajshahi, Phone: 0721-810882,</span></p>
<p><span style="color: #000000;">Mobile: 0171-364164</span></p>
<p><span style="color: #000000;">31.&nbsp; Hotel Surjomukhi</span></p>
<p><span style="color: #000000;">Extra Facilities: Television, Attached Bath, Car Parking</span></p>
<p><span style="color: #000000;">Address: Be side of Shaheb Bazar Boro Mosjid, Shaheb Bazar, Rajshahi</span></p>
<p><span style="color: #000000;">32.&nbsp; New Hotel Night House</span></p>
<p><span style="color: #000000;">Extra Facilities: Television, Attached Bath</span></p>
<p><span style="color: #000000;">Address: Malopara, Rajshahi, Phone: 0721-772581</span></p>
<p><span style="color: #000000;">33.&nbsp; Hotel Rader</span></p>
<p><span style="color: #000000;">Extra Facilities: Television, Attached Bath</span></p>
<p><span style="color: #000000;">Address: Malopara, Rajshahi, Phone: 0721-772834</span></p>
<p>&nbsp;</p>

<h3><span style="color: #000000;"><b>Salban Vihar, Mainamati – Lalmai</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:5px;" href="image/salban_vihar.jpeg"><img class="alignleft wp-image-1009" src="image/salban_vihar.jpeg" alt="SalbanVihara" width="392" height="261"></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">It is a large quadrangular monastery with a cruciform central shrine with an elaborate gateway complex on the north. It has 115 monastic cells. According to a terracotta inscribed seal it was built during the Deva King Bhava Deva in the early 8th century A.D. The lower basement of its central temple in relieved with frieze of terracotta plaques depicting scene mostly from the folk life of ancient Bengal.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Atiya Mosque</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:5px;" href="image/atiya_mosque.jpeg"><img class="alignright wp-image-976" src="image/atiya_mosque.jpeg" alt="AtiyaMosque" width="350" height="259"></a></span><span style="color: #000000;">Constructed in 1609 A.D. by Sayyed Khan Pani, son of Bayazid Khan Pani, the mosque (21m x 12.19m) consists of a single domed square prayer chamber fronted by a verandah covered over by 3 domes. Its cornice is deeply curved and wall surface is relieved with terracotta ornamental panels showing a blending of Mughal and pre-Mughal architectural traits.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">It can be approached from the zero point of Tangail town, along the Dhaka-Jamuna Setu, by any means of motorized vehicle.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Shahi Mosque </b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">This elegant three- domed mosque is located to the west of the fort built by prince Azam in 1678 A.D. The architectural decorations, interior and exterior follow the usual Shaista Khan style. One of the most interesting features of this mosque is its fresco design underneath the domes. Besides, the domes are ribbed externally.</span></p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Bara Katra</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:5px;" href="image/boro_katra.jpeg"><img class="alignleft wp-image-1015 " src="image/boro_katra.jpeg" alt="Bara Katra" width="449" height="359" ></a>Bara Katra an architectural relic of Dhaka city. It is situated to the south of Chawk Bazar close to the bank of the river Buriganga.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Originally, the Katra enclosed a quadrangular courtyard with 22 rooms on all of its four sides. Two gateways were erected, one each on the north and south. The ruins consist of an edifice having a river frontage.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The southern wing of the structure was planned on a grand scale and was marked with an elaborate three-storied gate containing an octagonal central chamber. The remaining portion was two-storied and encased by projected octagonal towers.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The gateway structure is rectangular in plan. It is lofty in height and its fronton is projected towards the river. A tall alcove rising to the second storey reduces the mass of this projection. The wall surface is relieved with panels that are square as well as rectangular and that contain a variety of decorations of four-centered, cusped, horseshoe and flat arches. Above the apex of the alcove open the windows of the third storey. Under the alcove is the main arched entrance which leads to the guardroom. Furthermore, as one passes through two successive archways, one comes across an octagonal domed hall, the ceiling of which is plastered and bears various net-patterns and foliaged designs. The double storied structure resolves on both sides of the central entrance into a row of five vaulted rooms in the ground floor and livingrooms with a continuous corridor on the upper one. Likewise, the upper floors of the entrance are furnished with rooms. The three storyed corner towers are hollow and can be approached from the subsidiary structures. Following the traditional pattern of the caravan-sarai of Central Asia, the Bara Katra was highly fortified and was embellished with all the features of the imperial Mughal style.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The Bara Katra contains two inscriptions in Persian: one records that it was built in 1053 AH (1643-44 AD) and the other contains the date 1055 AH (1645-46 AD) and confirms that SHAH SHUJA gave the building to Mir Abul Qasim to be used as a Katra on the condition that the officials in charge of the endowments (waqf) should not take any rent from any deserving person alighting therein.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">It should be noted here that more than half of the Katra building has already been destroyed and the building as a whole is in a dilapidated condition. It could not be taken over by the Department of Archaeology owing to the resistance of its owners. The owners have made several alterations to the original character of the building and have also started construction of a new multi-storied building in the area. Nevertheless, the surviving ruins stand as one of the most important monuments of Bengal. It is perhaps the most magnificent Mughal edifice of Bangladesh which has a monumental central archway.</span></p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Chhota Katra</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:5px;" href="image/choto_katra.jpeg"><img class="alignleft wp-image-1016 " src="image/choto_katra.jpeg" alt="choto-katra-online-dhaka" width="471" height="272"></a>Chhota Katra, Dhaka&nbsp; is situated about around 183 meter east of the bara katra at hakim habibur rahman lane on the bank of the river Buriganga in Mughal (old) Dhaka.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The Katra is rectangular in plan, 101.20 m × 92.05m externally and 81.07m 69.19 m internally. The thickness of the outer walls is 0.91 to 1.00m and the maximum thickness of the bastion walls is 1.22m. It is similar in plan to that of the Bara Katra, but is smaller in size. There are two gateways, one on the north and the other on the south. The southern one is the main entrance. Both the gateways, though much altered recently, are still in situ. In the two outer corners of the south wall of the structure there are two octagonal towers. The structures around the open courtyard have undergone much renovation, reconstruction and repair. Many modern extensions were also added to the original building. The three storied gateway on the river side has assumed some colonial features. The triple windows and the lofty angle towers reflect the colonial influence during subsequent restoration.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The Chhota Katra is believed to have been built by Shaista Khan in about 1664 AD. It is also said that the Katra was constructed to accommodate some officials and also a part of Shaista Khan’s expanding family.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">It is evident that the structure has lost much of its original look through indiscriminate alterations and unworthy restoration, though they have given it some durability. The two Katras of Dhaka have not been taken under the protection of the Department of Archaeology, and the specimens of this type of architecture in Bangladesh are on the verge of total extinction.</span></p>
<h3><span style="color: #000000;"><b>Musa Khan Mosque</b></span></h3>
<p><span style="color: #000000;">Musa Khan (reigned: 1599-1610) son of Isa Khan was the leader of Bara-Bhuiyans (twelve landlords of medieval Bengal) of the Bhati region. Musa Khan Mosque is located on the western side of the Shahidullah Hall of Dhaka University, and is less than half a km to the south of the Khwaja Shahbaz’s Mosque. A high vaulted plinth with a three-domed mosque above and the grave of Musa Khan to its northeast comprise the mosque complex of Musa Khan.<br>
</span></p>
<h3><span style="color: #000000;"><b>Nimtali Deury</b></span></h3>
<p><span style="color: #000000;">Nimtoli Deuri or the Nimtoli palace gate is one of the most important Mughal historical buildings used by the Nawab-e-Nazim of Dhaka. It was built in 1765-66.</span></p>
<h3><span style="color: #000000;"><b>North Brook Hall</b></span></h3>
<p><span style="color: #000000;">Northbrook Hall (Lalkuthi) was built (1879-1880) as a town hall during the British period. Situated at Farashgonj road in Old Dhaka, on the north bank of the Buriganga River. Northbrook Hall is an Indo-Saracen building, which is a fusion of Mughal architecture and European Renaissance architectural styles.</span></p>
<h3><span style="color: #000000;"><b>Choto Sona Masjid</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:5px;" href="image/choto_sona_mosque.jpg"><img class="alignleft wp-image-982 " src="image/choto_sona_mosque.jpg" alt="Choto Sona Masjid" width="330" height="205"></a>It is a remarkably fine architectural specimen of the Sultante Period. It was built by Wali Muhammad son of Ali during the reign of Sultan Hossain Shah (1493-1519). It has fifteen gilded domes including three chauchala domes in the middle row. Chief attractions of the Mosque are its intricate stone carvings and decoration.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Rose Garden</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Rose Garden Palace was built by Zamindar Hrikesh Das in the late 19th century. It is situated in Shamibag area at the K.M. Das Lane of Tikutuli, Dhaka. The building has Corinthian columns and has eight apartments including a central hall on its ground floor. There are several classical marble statues in the garden.</span></p>
<h3><span style="color: #000000;"><b>Ruplal House</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Ruplal House exhibits a fine example of the late Renaissance European architecture introduced during the colonial period. Rooplal House was built by Armenian Jamindar Aratun in 1825. It was bought by Rooplal Das and his brother Roghunath Das in 1835 and renovated in neo-classical style, by hiring Martin and company, an architectural firm of Calcutta.</span></p>
<h3><span style="color: #000000;"><b>Bhajahari Lodge</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Bhajahari Lodge is a heritage site recognized by the government of Bangladesh. It is located on Tipu Sultan Road, Dhaka. The Saho Banik family built the magnificent Shankhanidhi Lodge, Natmandir, Bhajohari Lodge, and Radha Binod Temple on the Tipu Sultan Road.<b></b></span></p>
<h3><span style="color: #000000;"><b>Building of Raja Harish Chandra</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Raja Harish Chandra – eighteenth century, Majidpur village, Savar, Dhaka. Harish Chandra Raja’s Dhibi a remarkable area consisting of a four-sided monument, with scattered remains of trenches, and walls which seemed to belong to a temple or a Buddha Bihar. another archeological site is here is Harish Chandra’s Courthouse, Rajashan.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Antiquities recovered from the site include turquoise blue glazed ware, silver coin, brick, bronze materials, Stupa and Vihara and inscription.</span></p>
<h3><span style="color: #000000;"><b>Goaldi Mosque</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Goaldi Mosque is an elegant little pre-Mughal mosque Built in 1519 by Mulla Hizabar Akbar Khan, during the reign of Alauddin Husain Shah at a place called Goaldi, half a mile northeast of Panam village in Sonargaon Upazila of Narayanganj District. Single-domed Goaldi Mosque is a good example of the ‘enclosed square type’ mosque of Sultanate period.</span></p>
<h3><span style="color: #000000;"><b>Mausoleum of Ghiyasuddin Azam Shah</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Ghiyasuddin Azam Shah (1390-1411 CE) was the third Sultan of the first Iliyas Shahi dynasty of Bengal and one of the more widely known of medieval Sultans of Bengal. Tomb of Ghiyasuddin Azam Shah is situated in Narayanganj District of Bangladesh.</span></p>
<h3><span style="color: #000000;"><b>Taksal Poddar Bari</b></span></h3>
<p><span style="color: #000000;">Poddar Bari (Panam Raj Bari) is situated in eastern side to the panam city, Narayanganj, Bangladesh.</span></p>
<h3><span style="color: #000000;"><b>Tomb of Haji Baba Saleh</b></span></h3>
<p><span style="color: #000000;">Baba Saleh Mosque (1481 AD). This is one of the archaeological sites in Bangladesh listed by Department of Archaeology of Bangladesh.</span></p>
<h3><span style="color: #000000;"><b>Sonakanda Fort</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Sonakanda Fort a Mughal river-fort located on the eastern bank of the shitalakshya at Bandar, almost opposite hajiganj fort in Narayanganj district. On stylistic similarities with other Mughal river-forts in and around Dhaka it is datable to the mid-17th century.</span></p>
<h3><span style="color: #000000;"><b>Hajiganj Fort</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Hajiganj Fort situated on the western bank of the Sitalakshya River at Hajiganj in Narayanganj. This Mughal fort was probably established during the time of mir jumla to counter the raids of the Maghs and the Portuguese. This is one of the archaeological sites in Bangladesh listed by Department of Archaeology of Bangladesh.</span></p>
<h3><span style="color: #000000;"><b>Palace of Murapara</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Murapara Palace, also known as “Murapara Jomidar Bari” is located at the Rupganj of Narayanganj. It was built in 1909 by Zaminder Jagadish Chabndra Banerjee.</span></p>
<h3 style="text-align: justify;"><span style="color: #000000;"><b>Idrakpur Fort</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Idrakpur Fort was built in 1660 A.D. on the bank of the river Ichhamati during the Mughal rule. Situated at Munshiganj. The present Munshigonj town including the outlying areas was known as Idrakpur which was named after the then Mughal faujdar Idrak. It was intended to counter the advances of the ‘magh’ and ‘portuguese’ raiders by water.</span></p>
<h3 style="text-align: justify;"><span style="color: #000000;"><b>Baba Adam Mosque</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">This six domed mosque was built by the great Malik Kafur during the reign of Sultan Jalaluddin Fatah Shah in or around 1483 A.D. Baba Adam’s Mosque is now a protected monument under the Department of Archaeology, Bangladesh.</span></p>
<h3 style="text-align: justify;"><span style="color: #000000;"><b>Binat Bibi Mosque</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">This pre-Mughal building is the oldest mosque built in Dhaka. According to an inscription, Bakht Binat, daughter of Marhamat, built it 15th Century dated in 1454 during the rule of Sultan Mahmud Shah I.</span></p>
<h3 style="text-align: justify;"><span style="color: #000000;"><b>Wari-Bateshwar</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">The Wari-Bateshwar region in Narsingdi, Bangladesh is the site of an ancient fort city dating back to 450 BCE. The 2500-year old ruins being unearthed near the old course of the Brahmaputra River are a major archaeological discovery in South Asia. It challenges the earlier notions of early urban civilization in Bengal.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The site is about 75km from Dhaka situated near the Wari and Bateshwar villages in the Belabo Upazila of Narsingdi District.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">It was discovered in the 1933 by a local school teacher, Hanif Pathan. However, formal excavation started only recently in 2000. The current scientific study is being carried out by a team from the Archaeology Department of Jahangirnagar University led by Professor Sufi Mostafizur Rahman. Prof. Rahman believes that Wari-Bateshwar is the rich, well planned, ancient emporium (a commercial city) “Sounagora” mentioned by Greek geographer, astronomer, mathematician Ptolemy in his book Geographia. The other emporia mentioned in Ptolemy’s work include Arikamedu of India, Mantai of Sri Lanka, Kion Thom of Thailand. All of these were the most ancient civilizations in their respective regions, each was a river port, and all of them produced monochrome glass beads. The artifacts found at Wari-Bateshwar bear similarity with those found in the other emporia sites.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">According to researchers, the discovery of rouletted ware, knobbed ware, stone beads, sandwiched glass beads, gold-foil glass beads, Indo-Pacific monochrome glass beads and importantly its geographical location indicates to Southeast Asiatic and Roman contacts.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Excavation also unearthed the presence of pit-dwelling. The discovery of a pit-dwelling is the first of its kind in Bangladesh. People used to live in these small ditches. The pit-dwelling is a Copper Age or Chalcolithic artifact. Similar pit-dwellings have been found in India and Pakistan which are believed to be 4000 years old. The unearthing of a 180-meter long, six-meter wide and 21-35cm thick road with a by-lane points to very early urbanization in this area. Before the discovery of this, the widely held view was that urbanization occurred later than what Wari-Bateshwar ruins indicate.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Silver punch-marked coins, different types of earthen pots, rouletted ware, knobbed ware, northern black Polish ware, black-slipped ware, common ceramics, semi-precious stone beads. Iron artifacts include blooms, hand-axes, spearheads, knives, nails and slugs, melted pieces of iron. It is also suspected that it might be the oldest place in the world which have a money based currency system.</span></p>
<h3 style="text-align: justify;"><span style="color: #000000;"><b>Bikrampur Vihara</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Bikrampur Vihara is an ancient Buddhist ‘Vihara’ (monastery) at Raghurampur village in Bikrampur region of Munshiganj District. The monastery is located at Raghurampur village under Rampal Upazila of Munshiganj District.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The discovery was declared at 23 March 2013 after four years of excavation conducted jointly by Agrasar Bikrampur Foundation, a local socio-cultural organization, and Archaeology Department of Jahangirnagar University. The excavation was financed by Bangladesh’s Ministry of Cultural Affairs.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">On 23 March 2013, Director of the Archaeological Excavation and Research in Bikrampur region, declared the discovery of this 1000 years old Buddhist Vihara. Over 100 precious idols and sculptures have been found till March, 2013.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The Vihara is one of the 30 monasteries built by Emperor Dharmapala during his regime around 820 A.D., second king of Pala dynasty and related to Atish Dipankar Srigyan, a child prodigy like Gautama Buddha.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">It is said that, during the period and Atish, this region was the center of Buddhist education and some 8,000 students and professors came to the Buddhism education centre in Bikrampur from as far as China, Tibet, Nepal and Thailand.</span></p>
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