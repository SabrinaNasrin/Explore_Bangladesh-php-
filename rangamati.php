<html>
<head>

  <title>Rangamati</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  .main-content{
    font-size: 18px;
  }
  body{
    background-color: #e3e3e3;
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
                
            <article class="post-114 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p>
   
<h3><strong><span style="color: #000000;">Rangamati</span></strong></h3>
<span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/rangamati1.jpg"><img class="alignleft wp-image-1071" src="image/rangamati1.jpg" alt="Visitbangladesh_Rangamati" width="438" height="329" ></a></span><p></p>
<p style="text-align: justify;"><span style="color: #000000;">Rangamati, a small town located amongst the green hills, lakes and rivers of the Chittagong Hill Tracts. This is what makes it a prime Bangladesh hill destination. It is known as the Lake City of Bangladesh as this place is located on the bank of the beautiful Kaptai Lake. It is the administrative headquarter of the Rangamati Hill District, the largest district of Bangladesh and located some 77 kilometres away from Chittagong. For long time Rangamati has been a prime Bangladesh tourist destination for its location, scenic beauty, colourful tribal people, tribal homespun textiles and ivory jewellery.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The rich natural resources, diverse flora and fauna makes Rangamati a Bangladesh Eco-Tourism destination. The road leading to Rangamati circles and winds through hilly terrains covered with lush green forests and creates a memorable experience for years to come. A stay here provides a glimpse into the lifestyle of various tribes living there. The ethnic tribes of Rangamati are the Chakma, Marma, Tonchongya, Tripura, Murong, Bome, Khumi, Kheyang, Chak, Pankhoa, and Lusai. The mix of different races, cultures, religions and customs creates an interesting community at Rangamati. It is said that without visiting Rangamati a tourist will miss a colourful slice of Bangladesh.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Visit Rangamati during October to February as the temperature remains cool and usually there is no rainfall, however, the beauty of Rangamati unleashes during the monsoon as the forest becomes greener, bursts with life and the rivers and waterfalls becomes replenished.</span></p>
<h3><span style="color: #000000;"><b>Places to visit at Rangamati</b></span></h3>
<p><span style="color: #000000;"><b>Kaptai Lake</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/rangamati2.jpeg"><img class="wp-image-1029 alignleft" src="image/rangamati2.jpeg" alt="Visitbangladesh_Kaptai_lake" width="351" height="263" ></a>Kaptai lake, beautiful blue watery lake was made by man. The size of Lake is approximately 11000 sq km. You will enjoy the natural beauty of this lake as well as boating on the lake. It is a huge lake and it has some tiny islands. Each island has different name such as “Peda Ting-Ting”, “Tuk-Tuk Echo Village”, “Chang-Pang” etc. “Peda Ting-Ting” is a tiny island and here you will find cottages to stay and enjoy moonlight night with fantastic lake surroundings. “Tuk-Tuk” is an echo park with varities of trees and plants. It is a great place for boating and cruising.</span></p>

<p><span style="color: #000000;">Hanging Bridge is 335 feet long bridge across a portion of the Kaptai lake is an icon of Rangamati. Actually Rangamati is famous for this bridge.It’s really a very beautiful bridge. Every year thousands of people come here to visit this bridge and lake.</span></p>
</div>
<span style="color: #000000;"><strong><span>Location:</span></strong><br><br><span>Kaptai,Rangamati,Chittagong</span>
<p>&nbsp;</p>
<strong><span style="color: #000000;"><span>How to Go :</span> </span></strong><br>
<p><span  style="color: #000000;">There are many bus service available from Dhaka to Rangamati. After reaching Rangamati you can hire an auto-rickshaw to visit the Kaptai lake and Hanging bridge.</span></p>
<strong><span style="color: #000000;"><span >Where to stay</span> </span></strong>
<p style="text-align: justify;"><span  style="color: #000000;">There are lots of hotel and boarding are available in Rangamati to stay and have food. The rate range of hotel is reasonable over there.</span><span style="color: #000000;"><br>
</span></p>

<p><span style="color: #000000;"><b>Shuvolong Falls</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/rangamati3.jpeg"><img class="alignleft wp-image-1076" src="image/rangamati3.jpeg" alt="Visitbangladesh_Shuvolong-Waterfalls" width="352" height="234"></a>Shuvolong a place in Borokol sub district, situated about 25kilometers (11kilometers – as the crow flies) away from Rangamati. There are few waterfalls in Shuvolong zone with the largest one falling from as high as 300 feet. In the past more than a few years, this place has twisted into a tourist journey’s end due to stunning waterfalls and the neighbouring market. Shuvolong is simply easy to get to by rapidity boat or motor boats from Rangamati.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Bangladesh is a pleasing country in the world. There are lots of tourist spot in Bangladesh. Rangamati district is one of them. Rangamati is in the Chittagong division. Shuvolong Waterfalls is a good-looking waterfall in Rangamati. It is the attractive place of Rangamati. The only obtainable path to influence at the waterfall is through water, through the lake. People visit there by boat. It is a well-known place with the tourists for the waterfall, high hills and the natural neighbouring it offers. This waterfall is just in advance the Shubholong Bazaar. Means from the waterfall, it will take from one place to another 5 minutes to reach at bazaar. So that Shuvolong is with no trouble easy to get to by speed boat or motor boats from Rangamati.</span></p>
<p><span style="color: #000000;"><b>Tribal Museum</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/rangamati4.jpg"><img class="wp-image-1033 alignleft" src="image/rangamati4.jpg" alt="Visitbangladesh_Tribal_Museum_at_Araku" width="324" height="243" ></a>Located in Rangamati, the Tribal Cultural Museum in the Hill Tracts of Bangladesh offers fascinating insight into the history and cultural traditions, as well as socio-economic aspects of the different tribes in the area. Visitors can view displays of tribal dress, ornaments, musical instruments, coins and handicrafts at the museum. Paintings depicting the many facets of tribal life are also on display, as well as a collection of statues made from various metals and wood.The Chittagong Hill Tracts in south-eastern Bangladesh is divided into the Khagrachari, Rangamati and Bandarban districts and is home to a number of the country’s tribal groups. Collectively referred to as the Jumma, these tribal groups include the Marma, Tripura, Chakma, Tenchungya, Chak, Pankho, Mru, Bawm, Pankho, Murung, Lushai, Khumi and Khyang tribes.&nbsp;</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><strong>Shajek and Marissa Vally</strong></span></p>
<p style="text-align: justify;"><a href="image/rangamati5.jpeg" style="float:left;padding-right:15px;padding-bottom:10px;"><img class="alignleft wp-image-1570 " src="image/rangamati5.jpeg" alt="Visitbangladesh_Sajek Valley" width="399" height="265"></a><span style="color: #000000;">Sajek is a union at Baghaichari Upazila in Rangamati districts. It is one of the big union in Rangamati districts. Basically it is name of a river which separates Bangladesh from India. The river flows into the Karnafuli River in the Chittagong Hill Tracts. Sajek Valley is situated in the North angle of Rangamati, near the Mizoram border boundary area. The valley is 18000 ft high form sea lavel. Many small rivers flow through the hills among them Kachalon and Machalong are famous. It is one of the biggest union in Bangladesh.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The main ethnic minorities on the valley are Chakma, Marma, Tripura, Pankua, Lushai and Sagma. Before traveling there, be alert about malaria. There is some body lotion or cream to prevent the mosquito. The place is known as hill queen for its natural beauty and roof of Rangamati. Marishsha is a name of a place near Sajek Valley. Most of the houses are made by bamboo. There is another place near Sajek, it is Kanlak, and it is famous for orange orchard.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Most attractions of the spot are sun set, rain, morning, evening, and night and aborigine people. Tourist can buy aborigine people product from indigenous Haat. Roads are like big snake spirals mountains. Most of the people are Buddhist and people are Christian here.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">A new road has been built up to the Ruilui Para by the guidance of Bangladesh army. On the way traveler need to take permission from the army camp. Bangladesh army is very helpful and cooperative. Now mobile network is available here.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The valley is in Rangamati but tourist can reach there from Khagrachhari too. The route is Khagrachhori – Dighinala Bazaar – Bagaihat Bazaar – Machalong&nbsp; Haat – then Sajek. It is 106 km from Khagrachhari. Dighinala to Sajek is 25 km. Main transportation is Chander Gari. It costs tk.5000-tk.6000/- from Khagrachhari. It is like a four wheel jeep. Some time visitor can take some tea berak on the way at Haat. From Dighinala traveler can hire motor bike. It may cost tk 1000-tk1500/- up down. The region is extremely very backward.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Visitor can also go to Sajek from Rangamati by engine vessel.&nbsp; It takes 5-6 hours. Baghaichari is the landing station. Costing is within tk 200/-. And Baghaichari to Sajek by Chander Gari. Per person it take Tk 300/- Normally it is better to book reserve for return journey.</span></p>

<p><span style="color: #000000;">&nbsp;<b>Kaptai National Park</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a href="image/rangamati6.jpg" style="float:left;padding-right:15px;padding-bottom:10px;"><img class="wp-image-1545 alignleft" src="image/rangamati6.jpg" alt="Visitbangladesh_Kaptai National Park" width="337" height="253"></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">This forest reserve is located in the Karnafuly and Kaptai range. According to the government statistics some 50,000 people visits the national park every year as it provides some walking trails among the lush green forest. The animal species of Kaptai National park are deer, elephants, monkeys, fishing cats and birds. The Kaptai Forest Rest house, Kaptai Mukh Forest Rest House and several picnic spots are located here.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;">&nbsp;<b>Rajban Bihar Pagoda</b></span></p>
<p><span style="color: #000000;">An internationally known Buddhist Temple, where the spiritualist principal monk of Rajban Vihara, Shrimath Sadhana Nanda Mohasthabir(Ban Vante) lives.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Peda Ting Ting</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">A small island on the Kaptai Lake, few kilometres away from Rangamati. It is mostly known for its serenity. There are a few tourist accommodation facilities here and a tiny restaurant run by the locals. It offers foods ranging from traditional to indigenous delicacies.<br>
</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Chakma Royal Palace</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">This is the palace of the present Chakma King. However, it is open to public for a visit.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>DC Bungalow Area</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">The District Commissioner’s Bungalow is located adjacent to the lake. There is a small light house and a shelter accessible to the public. This spot provides a nice view of the lake.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Others</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">The local market is also a tourist attraction as it offers handicrafts, textiles and ornaments made by the tribal people.</span></p>
<h3><span style="color: #000000;"><b>Places to Stay</b></span></h3>
<p><span style="color: #000000;"><b>Circuit House</b></span></p>
<p><span style="color: #000000;">Address: Amanat bagh,Vedvedi Area,Rangamati.</span></p>
<p><span style="color: #000000;">Tel:0351-62304(office);0352-62308(Residence);0351-62240(VIP-1);0351-62081(VIP-2)</span></p>
<p><span style="color: #000000;">E-mail:dcrangamati@moestab.gov.bd</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Forest Rest House or BON BIVAG Rest House</b></span></p>
<p><span style="color: #000000;">Address: Banarupa, Rangamati.</span></p>
<p><span style="color: #000000;">Tel:0351-63351(office);0351-63352(res)</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>LGED Rest House</b></span></p>
<p><span style="color: #000000;">Address:T.N.T Area(near Rangamati General Hospital),Rangamati</span></p>
<p><span style="color: #000000;">Tel:0351-63148(office);0351-63252(Res)</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>USAI Rest House</b></span></p>
<p><span style="color: #000000;">Address:Amanatbagh, Vedvedi Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel:0351-63389(office);0351-2283(Res)</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Zila Parishad Rest House</b></span></p>
<p><span style="color: #000000;">Agricultural Division (Krishi Bivagh) Rest House</span></p>
<p><span style="color: #000000;">Address: Tribel Adam,Banarupa Area</span></p>
<p><span style="color: #000000;">Tel: 0351-62324(office);0351-66146(Res)</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Electircity/Power Development Board Rest House</b></span></p>
<p><span style="color: #000000;">Address:Champpok nagar, Banarupa</span></p>
<p><span style="color: #000000;">Tel:0351-62288(Office);0351-62253(Res)</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>BISIC Rest House</b></span></p>
<p><span style="color: #000000;">Address: Near Rangamati Stadium</span></p>
<p><span style="color: #000000;">Tel: 0351-62037(office)</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Parjatan Holiday Complex</b></span></p>
<p><span style="color: #000000;">Address: Near Boarder Guard Bangladesh(BGB) Sector,Tabalchari Area,Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-63126(office)</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">Non-Government Residential Hotel</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Sufia</b></span></p>
<p><span style="color: #000000;">Address: Kathaltali Area(near Fishery Ghat)</span></p>
<p><span style="color: #000000;">Tel: 0351-61178;0351-62145</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Green Castle</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area,Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-71214 and 0351-61200</span></p>
<p><span style="color: #000000;">Mobile: 01726511532, 01815459146</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Motel JOJ</b></span></p>
<p><span style="color: #000000;">Address: College gate,Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-63348</span></p>
<p><span style="color: #000000;">Mobile: 01558480701</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Al-Moba</b></span></p>
<p><span style="color: #000000;">Address: New Bus Station,Reserv Bazar,Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-61959</span></p>
<p><span style="color: #000000;">Mobile: 01811911158</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Mountain View</b></span></p>
<p><span style="color: #000000;">Address: Shiddhibhaban (near Burmise Market),Tabalchari Area,Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-62748</span></p>
<p><span style="color: #000000;">Mobile: 01553440324</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Dignity</b></span></p>
<p><span style="color: #000000;">Address: North Kalindipur Area, Rangamat</span></p>
<p><span style="color: #000000;">Tel: 0351-62364</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Shapla</b></span></p>
<p><span style="color: #000000;">Address: New Court Building Road,Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-63235</span></p>
<p><span style="color: #000000;">Mobile: 01819636955</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Raju</b></span></p>
<p><span style="color: #000000;">Address: New Bus Station,Reserv Bazar,Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-62910</span></p>
<p><span style="color: #000000;">Mobile: 01811258305,01820303578</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Geroni</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 01198118122</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hamid Boarding</b></span></p>
<p><span style="color: #000000;">Address: Launch Ghat, Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-63328, 01740904518</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Banani Boarding</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 01197264724</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Alam Boarding</b></span></p>
<p><span style="color: #000000;">Address: Launch Ghat, Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-63328, 01190264192</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Somota Boarding</b></span></p>
<p><span style="color: #000000;">Address: Tridip Nagar Sarak, Banarupa, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-61747, 01556627182</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Paharika Hotel</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Ares, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-62176</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Siddik Boarding</b></span></p>
<p><span style="color: #000000;">Address: Jetty Ghat,Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 04433326230, 01196124416</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Madhumita Boarding</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-63359, 01818047386</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Al Amin Boarding</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-61507, 01815699423</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Suktara Boarding</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Al Helal Hotel</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-62703, 01673763306</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Santi Boarding</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 01190715935</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Arju Boarding</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-62359, 01556321309</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Al Amin Hotel</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 01817204461, 01726-000437</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Islamia Boarding</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area,Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-3393</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Kor Boarding</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Arez, Rangamati</span></p>
<p><span style="color: #000000;">Tel: 01814765679</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Laxmi-Narayon Boarding</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area, Rangamati</span></p>
<p><span style="color: #000000;">Tel:01926695154</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Alif Boarding</b></span></p>
<p><span style="color: #000000;">Address: Banarupa, Rangamati</span></p>
<p><span style="color: #000000;">Tel:0351-3342</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Azad Boarding</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area,Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-61322</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Jamal Boarding</b></span></p>
<p><span style="color: #000000;">Address: Reserv Bazar Area,Rangamati</span></p>
<p><span style="color: #000000;">Tel: 0351-62397</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>How to go</b></span></h3>
<p><span style="color: #000000;">Both AC and Non AC Bus service is available from both Dhaka and Chittagong to Rangamati.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Dolphin Challenger</b></span></p>
<p><span style="color: #000000;">11, Fakirpool, Dhaka</span></p>
<p><span style="color: #000000;">Tel: 02-8317557, 8315375</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Unique Services</b></span></p>
<p><span style="color: #000000;">4 Inner Circular Road</span></p>
<p><span style="color: #000000;">Fakirapool, Dhaka-1000</span></p>
<p><span style="color: #000000;">Tel: 02-8123160, 9561252</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Shyamoli Paribahan</b></span></p>
<p><span style="color: #000000;">Arambagh Counter – (+8802) 7194291, 7193910</span></p>
<p><span style="color: #000000;">Asad Gate Counter – (+8802) 9123471, 8124881, 9124514</span></p>
<p><span style="color: #000000;">Darussalam/Technical Counter – 01712-008672</span></p>
<p><span style="color: #000000;">Fakirapool Counter – (+8802) 7193725, 9333364, 7194190, 7195974</span></p>
<p><span style="color: #000000;">Gabtoli New Counter – (+8802) 9014560</span></p>
<p><span style="color: #000000;">Gabtoli Counter (Bus terminal) – (+8802) 8014538, 01711-987028</span></p>
<p><span style="color: #000000;">Kamalapur New Counter – (+8802) 8316246</span></p>
<p><span style="color: #000000;">Kamalapur BRTC office (International) – (+8802) 8360241, 01716-942154, 01711-472297</span></p>
<p><span style="color: #000000;">Kalyanpur Counter – (+8802) 9003331, 8034275</span></p>
<p><span style="color: #000000;">Kolabagan Counter – (+8802) 9141047, 01711-130862</span></p>
<p><span style="color: #000000;">Pantapath Counter – (+8802) 9102082, 01711040881, 01727422045</span></p>
<p><span style="color: #000000;">Syedabad Counter – (+8802) 7540993, 7540991, 7550071, 7541019</span></p>
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