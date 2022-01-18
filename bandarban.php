<html>
<head>

  <title>Bandarban</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  body{
    background-color: #e3e3e3;
  }
  .main-content{
    font-size: 18px;
  }
input[type=text] {
    width:71%;
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
     
    width:6%;
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
                
            <article class="post-112 page type-page status-publish hentry">
                
                <div class="page-content">
                
   
<h3><span style="color: #000000;"><strong>Bandarban</strong></span><br></h3>
<span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="http:image/bandarban1.jpg"><img class="alignleft wp-image-1527" src="image/bandarban1.jpg" alt="bandarban2" width="462" height="260"></a></span>
<p style="text-align: justify;"><span style="color: #000000;">Bandarban is in Chittagong division and located in southeastern Bangladesh. It is one the most attractive travel destination in Bangladesh for its adventurous characteristics and heavenly scenic beauty. This eventually gets really hard to leave if anyone visits Bandarban. The scenic beauty will undoubtedly captivate your soul. Bandarban includes the three highest peak of Bangladesh — Tahjindong (or Bijoy), Mowdok Mual (or Saka Haphong) and Keokradong. Anyone can easily hike through the jungle and hilly rivers to win any of these three god’s creations. There are so many waterfalls hidden through the hills of Bandarban would appear in your hiking. The exotic offerings such as foods, tribal handicrafts etc from the tribal people will delight your heart. Meanwhile you can easily experience the tribal culture very closely.</span></p>
<h3><span style="color: #000000;"><b>&nbsp;Shoilo Propat Waterfalls</b></h3>

<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="bandarban2.jpg"><img class="alignleft wp-image-991" src="image/bandarban2.jpg" alt="Shoilo Propat" width="367" height="275" ></a></span><span style="color: #000000;">Shoilo Propat or Shoylo Propat is at Milanchari and 4km from the town on the road to Thanchi. This waterfall is a tourist site maintained by Bangladesh Parjatan Corporation. During the rainy season, the water flow becomes really furious. While visiting this water you may want to roam around the small market near this waterfall for handicrafts, handloom products and exotic foods sold by the tribal people.</span></p>
<h5 class="float-left"><strong><span style="color: #000000;">How to go</span></strong></h5>
<p style="text-align: justify;"><span style="color: #000000;">After reaching at Bandarban, take local transport to reach that waterfall in Thanchi Upazila.&nbsp;So you can hire a private jeep or auto rickshaw to go there.</span></p>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="text-align: left;"><span style="color: #000000;">&nbsp;<b>Nafakhum</b></span></p>
<p style="text-align: left;"><a href="image/bandarban3.jpg" style="float:left;padding-right:15px;padding-bottom:10px;"><img class="wp-image-10232 alignleft" src="image/bandarban3.jpg" alt="Nafhakhum" width="365" height="274" ></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Nafakhum is one of the most beautiful waterfalls in Bangladesh. Nafakhum is situated on the wild hilly Sangu River at a remote area called Remakri of Thanchi upazilla under Bandarban Hill District in Bangladesh. Nafakhum is also known as Remakri waterfall.</span></p>
<div id="stcpDiv" style="text-align: justify;"><span style="color: #000000;">Every traveler should have a tour plan to visit this beautiful tourism spot of Bandarban at least once and then they will feel to visit that travel spot again and again.</span></div>
<div id="stcpDiv">
<h5><strong><span style="color: #000000;">How to go</span></strong></h5>
<p style="text-align: justify;"><span style="color: #000000;">Travelers should reach to Bandarban if they are interested to have a tour to this Nafakhum waterfall. There are many bus services among the districts of Bangladesh to reach Bandarban.</span></p>
</div>
<p>&nbsp;</p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Rijuk Waterfall</b></span><br>
<span style="color: #000000;"> <a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/bandarban4.jpg"><img class="alignleft wp-image-994" src="image/bandarban4.jpg" alt="rijuk-waterfall-300x239" width="375" height="298"></a></span><span style="color: #000000;">Located at Ruma upazilla, Rijuk Waterfall (Rijuk Jhorna) is about 300 feet high with continuous flow of water which falls into the river Sangu. This waterfall is surrounded by diverse natural resources. It is 66km southeast from Bandarban town. Rijuk waterfall is located at Ruma upazilla of Bandarban in Bangladesh. It is 66 kilometer southeast from Bandarban town. As there is no food and accommodation facility in Rijuk falls you have to carry your food and waters from Ruma Bazaar.</span></p>
<h5><strong><span style="color: #000000;">How to go</span></strong></h5>
<p style="text-align: justify;"><span style="color: #000000;">First need to reach at Bandarban from Dhaka by bus. Then need to reach at ‘Koikhong jhiri’, Ruma Ghat by local bus or ‘Chander Gari’. Cross river Sangu by engine boat, will take 30 minutes to reach at Ramu Bazar. At ‘Ruma Bazar’ need to hire a guide and must register tourist name, guide name and additional informations to the military check post. From ‘Ramu Bazar’ need to hire engine boat to reach ‘Rijuk Waterfall’ for two way (Up-down).</span></p>
<p>&nbsp;</p>
<p style="text-align: left;"><span style="color: #000000;"><b>Jadipai Waterfall</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;paddding-bottom:10px;" href="image/bandarban5.jpeg"><img class="wp-image-995 alignleft" src="image/bandarban5.jpeg" alt="jadi-pai-waterfall" width="368" height="276" ></a></span><span style="color: #000000;">Jadipai Waterfall or Jadipai Jhorna is one of the widest water falls in Bangladesh. Jadipai Waterfall is located at Ruma upazilla of Bandarban district in Bangladesh. From Keokradong Summit to Jadipai waterfall a traveler will take about one hour walk.</span></p>
<h5><strong><span style="color: #000000;">How to go</span></strong></h5>
<p style="text-align: justify;"><span style="color: #000000;">Start journey from Dhaka.Dhaka to Bandarban you can travel by Bus,it can be around 7-8 hours journey.From Bandarban you have to hire a Chander Gari (Jeep) to reach Ruma. </span><span style="color: #000000;">From Ruma bazar you have to hire a Chander Gari ( Jeep) to reach Boga Lake.</span><br>
<span style="color: #000000;"> At Boga lake you have to stay a night because it will be evening when you will reach there.There are many Tribal villages in the area of Boga lake. You can stay the night and take dinner from here and guide will help you to find a good place. </span><span style="color: #000000;">At morning you have to start journey to Keokradong as soon as possible. </span><span style="color: #000000;">After reaching Keokradong you have a long way to go Jadipai.It will take 2.5 hours to reach Jadipai by feet.</span></p>
<p>&nbsp;</p>

<p><span style="color: #000000;"><b>Chingri Jhiri Waterfall</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/bandarban6.jpg"><img class="alignleft wp-image-1000" src="image/bandarban6.jpg" alt="কেওকারাডং চিংড়িঝিরি" width="362" height="271" ></a></span><span style="color: #000000;">Chingri Jhiri waterfall is situated at Ruma upazilla and close to Boga lake. It takes mostly one-hour-walk from Boga lake through some big rock and pebble stones.</span></p>
<h5><strong><span style="color: #000000;">How to go</span></strong></h5>
<p style="text-align: justify;"><span style="color: #000000;">You have to make a trip from Bandarban to Ruma by “Chander Gari” (public jeep) or a private vehicle. From Ruma you can hire public jeep upto Boga Lake. You can also walk to Boga Lake in winter season. It will require 6 hours to reach Boga Lake.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Zingsiam Saitar</b></span></p>
<p style="text-align: justify;"><a href="image/bandarban7.jpg"style="float:left;padding-right:15px;padding-bottom:10px;"><img class="wp-image-10260 alignleft" src="image/bandarban7.jpg" alt="Zingsiam-Saitar" width="364" height="273" ></a><span style="color: #000000;">Zingsiam Saitar is one of the wonderful waterfalls at Ruma upazilla in Bandarban. The unique feature of this waterfall the water fall is divided into three different sections. Altogether these three falls makes a really amazing view. This waterfall is used by the Bawn community for their everyday needs.</span></p>
<h5><strong><span style="color: #000000;">How to go</span></strong></h5>
<p style="text-align: justify;"><span style="color: #000000;">If any travelers are interested to go Zingsiam Saitar then travelers should reach to Bandarban first. There are many bus services among the districts of Bangladesh to reach Bandarban.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Patang Jhiri Waterfall</b></span></p>
<p style="text-align: justify;"><a href="image/bandarban8.jpg" style="float:right;padding-left:15px;padding-bottom:10px;"><img class="wp-image-10271 alignleft" src="image/bandarban8.jpg" alt="Patang-Jhiri" width="370" height="208" ></a><span style="color: #000000;">Patang Jhiri waterfall is located at Ruma upazilla and appears on the way to Boga lake. This not-so-big waterfall has some exceptional beauty in its structure and surroundings.</span></p>
<h5 style="text-align: justify;"><span style="color: #000000;"><strong>How to go</strong></span></h5>
<p style="text-align: justify;"><span style="color: #000000;">If any travelers are interested to go Patang Jhiri then travelers should reach to Bandarban first. There are many bus services among the districts of Bangladesh to reach Bandarban.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Faipi Waterfall</b></span></p>
<p><a href="image/bandarban9.jpg" style="float:left;padding-right:15px;padding-bottom:10px;"><img class="wp-image-10249 alignleft" src="image/bandarban9.jpg" alt="Faipi-Waterfall" width="370" height="278" ></a><span style="color: #000000;">Faipi waterfall is situated in Thaikang Para. You can visit Faipi both via Thanchi or Ruma.</span></p>
<h5><strong><span style="color: #000000;">How to go</span></strong></h5>
<p style="text-align: justify;"><span style="color: #000000;">To go to Faipi waterfall a traveler has to go Bandarban first. Then he can go there by using some different route. There are many bus services among the districts of Bangladesh to reach Bandarban. Dhaka to Bandarban it may cost around 550/- Taka (BDT) to the travelers if they travel by any non-ac bus service. The travel buses usually start at night. The bus service providers may offer new schedule as well. It can be around 7-7.5 hour’s journey to go Dhaka to Bandarban.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Baklai Waterfall</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/bandarban10.jpg"><img class="alignleft wp-image-996" src="image/bandarban10.jpg" alt="Baklai-Waterfall" width="375" height="238"></a></span><span style="color: #000000;">Baklai Waterfall is situated at Baklai para in Thanchi upazilla in Bandarban. Baklai Waterfall is 370 feet height. Some people think that Baklai Waterfall is the top highest waterfall in Bangladesh. The view of Baklai waterfall is so amazing.</span></p>
<div id="stcpDiv">
<h5><span style="color: #000000;">How to go<br>
</span></h5>
<p style="text-align: justify;"><span style="color: #000000;">As the Baklai Waterfall is located at Thanchi so the traveler should go to Bandarban first. There are many bus services among the districts of Bangladesh to reach Bandarban.</span></p>
<p><span style="color: #000000;">Now the travelers have to go to Thanchi by bus or Chander Gari (Jeep) from Bandarban to reach the destination tour spot. It may take around 4.5 hours for the traveler to reach Thanchi. The distance between Bandarban to Thanchi is about 79 km. </span></p>
<p style="text-align: justify;"><span style="color: #000000;">From Thanchi Bazar to Baklai you will pass some para as like Tutong Para, Boarding Headman Para, Kaiton Para etc and it will take few hours. If a traveler wants to climb top of the waterfall it may take an hour.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<span style="color: #000000;"><b>Boga Lake</b></span>

<p style="text-align: justify;"><span style="color: #000000;"> <a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/bandarban11.jpg"><img class="wp-image-997 alignleft" src="image/bandarban11.jpg" alt="bogalake" width="390" height="255"></a></span><span style="color: #000000;">Boga Lake is the most beautiful natural lake in Bangladesh. It is also known as Bagakain Lake or Baga Lake. Boga lake is 18 kilometer away from Ruma Sadar Upozilla in Bandarban. The area of this lake is about 15 acres. It is about 3000 feet above sea level. The color of water of this lake is blue and very nice. There are many mythological stories behind the creation of this lake. There are many tourists make their way to Boga lake every year, specially in the winter season. Small tribe community like Bawm, Khumi have localities besides the Boga lake. In the rainy season, it is quite difficult to stroll beside the boga lake. The road from Ruma to Boga lake is still under construction. There waiting lots of pleasure and delight for you at Boga lake. You will definitely be amazed looking at the big rocks lying in and out of the Boga lake. You can have a camp fire beside the lake, that will be unbelievable and mind-blowing memory in your life.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Bogalake, an inscriptive endowment of beauty and pleasure at Bandarban, Bangladesh</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Nature lovers always feel a thirst inside for beauty, thrill and enchantment. And the holy nature has bestowed Bangladesh with an overwhelming and unparallel creature which is publicly known as Boga Lake. Bogalake is considered as a source of wonder, unlimited beauty and adventure for the nature`s lovers and travelers. So Boga Lake is waiting with its unique beauty for those adventurous travelers who just not only want to satisfy their eyes with artificial and tedious natural beauties but also want to fill their heart with eternal joy and thrill to innovate their restless mind. And it has emerged like a holy duty of the travelers and tourists to visit the Boga Lake as soon as possible to highlight the beauty with thrill.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The origin of the name Boga lake is derived from some domestic mythological stories. The word Boga is derived from the local word Baga which means a dragon or fire. Actually some super natural stories flame the fire about the lake being the accommodation of an ancient dragon indeed and that concludes the story of the identification of Boga lake</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Anthropologists define Boga lake as 2000 year old hill enclaved natural lake of Bandarban,Bangladesh. Boga lake is accompanied with deep bamboo bushes from its three sides wich are bounded by mountain peaks. Again, Boga lake is recognized as the highest natural lake of Bangladesh which is approximately 1500 ft above the sea level. Boga lake has a rectangular shap either funnel shape. But some experts argue that the Boga lake is about (3000-3700) fts above the sea levels indeed. The lake is supposed to be 38 meter deep. There remains a small spring beside the Boga lake which is called Bagachhara (153m deep). Boga lake is a closed lake and to drain out water there is no outlet. Basically Bagachhara is the fundamental source of water along with surface drainage, rain water and seepage of spring, soft and small rocks of different shapes have almost covered Boga lake surface.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The beauty and attraction of the Boga lake changes with the color change of the lake. Depending on various indicators like sun rays, clouds` humidity and the so called existence of a hot spring at the bottom of the Boga lake the water of the Boga lake takes different color at different seasons. But usually the lake water shows its extra –ordinary crystal clear mirror view of blue shade which reflects like pearls and more than enough to astonish a tourist guy.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">It is easy to imagine for the common people that almost 1500 ft above sea level and unfavorable natural area of Boga lake has made it without any existence of human community or barren area indeed. But the tourists and travelers will feel relieved to know that they will find numbers of local tribes like Bawm or Bom, Khumi and others on their way and in the Boga lake area too.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Accomodation</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">The local tribal communities have interesting arrangements for the tourists and travelers accommodation of the Boga Lake. They have built small but attractive cottages with sufficient facilities within their range.</span></p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Budha Dhatu Jadi<br>
</b></span></h3>
<p><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/bandarban12.jpg"><img class="alignleft wp-image-999" src="image/bandarban12.jpg" alt="Budha Dhatu Jadi" width="244" height="316" ></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">The Buddha Dhatu Jadi is a Theravada Buddhist temple also known as the Bandarban Golden Temple. The Buddha Dhatu Jadi is located at Pulpara 4 kilometer from Balaghata town and 10 kilometer from in the remote Bandarban hill district, in Bangladesh. The Bandarban Golden Temple is the largest Theravada Buddhist Temple with the second largest Buddha statue in Bangladesh.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The Buddhist temple is known in local language as kyang. The Buddha Dhatu Jadi is regarded as one of the holy site for Theravada Buddhism followers and Buddhist pilgrims. This religion is practiced by the Marma or Mogh tribal group of the Chittagong Hill Tracts, a dominant ethnic group in Bandarban. They are of Arakan descent and Buddhists by religion.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The temple is situated in the hill town of Bandarban, which has two of the highest peaks hills, the Tajingdong (4,000 feet or 1,200 meters) and the Keokaradong (4,632 feet or 1,412 meters) covered with dense forests. Sangu river flows through the town. There is a waterfall nearby. The temple is built on top of a (200 feet or 60 meters) high hill. Construction of the temple started in 1995 and was complete in 2000.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The Buddha Dhatu Jadi temple attracts pilgrims and visitors in all over the world. The Buddha Dhatu Jadi is a part of the Buddhist Circuit Tour promoted by the South Asia Sub regional Economic Cooperation (SASEC) Tourism Development Project.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There is small pond in the temple named “The Pond of Angels” on the top of a hill. Traveler or tourist can see a total glance of Balaghata and its surrounding natural beauties from here. Many festivals are arranged here in every year.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Visitors can hire a rickshaw or auto rickshaw from Bandarban city. It is open from 5 PM to 7PM for the visitors and each visitor is charge 10 taka for entrance. A strict dress code of ‘no shorts and no shoes’ in temple precincts is followed here.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Chimbuk Hill<br>
</b></span></h3>
<p><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/bandarban13.jpg"><img class="alignleft wp-image-1006" src="image/bandarban13.jpg" alt="Chimbuk-Hill" width="415" height="251" ></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Chimbuk hill is the third highest mountain in Bangladesh. Chimbuk is one of the most familiar tourist spot in Bandarban. It is just 26 kilometer away from Bandarban sadar. Chimbuk hill is about 2500 feet high above sea level. The road of this area is zigzag. So if you ride in a jeep it will be charming. While your jeep is moving through the various indigenous villages, their simplicity in human gestures will compel you to think about our predecessors struggles to cope with to maintain existence. They are as simple as nature. However when you are looking down from Chimbuk, it will get you the feelings of floating over the clouds. When it is a shiny day, you can see the shades of clouds over the hills. You will also see the beauty of Chimbuk and Nilgiri.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There are two government-owned rest-houses in this area. You have to confirm the reservation from the authority, if you want to stay here. There is an well managed canteen in that place so you can easily take food or snacks here.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Chimbuk is 26 kilometer away from Bandarban sadar. Visitor can hire a private vehicle from Bandarban sadar or you can go there by Thanci bound bus or jeep. On the way to Chimbuk, visitor has to register his name and address to the military check post.</span></p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Meghla</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/bandarban14.jpeg"><img class="wp-image-1005 alignleft" src="image/bandarban14.jpeg" alt="Meghla" width="413" height="269" ></a></span><span style="color: #000000;">Meghla Parjatan Complex is the most amazing tourist or visited spot for the tourists coming from all over the country. Meghla is in the contiguous area of the Bandarban hill district council on the gateway of Bandarban maintained by district administration. It is 4 km from the town on the road to Keranihat, which features a mini-safari-park, a zoo, boat journey, a hanging bridge and at the bottom of the hills artificial lake has been made. It is a popular place for picnic party. A lot of tourist makes the way to Meghla for celebrating their vacations.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Inside Meghla there is no arrangement for heavy food. Visitor can have snacks only. But visitor can take lunch packet, if he stay whole day there. Outside the Meghla there has two restaurants with Chinese and Continental food at Holiday Inn resort and Parjatan Motel. Accommodation facilities are also available in the Holiday Inn resort and the Parjatan Motel.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Meghla Parjatan Complex is just 4 kilometer away from Bandarban town. Visitor can hire privet Jeep or auto rickshaw for go to Meghla. Local bus is also available to go there.</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;">&nbsp;</span><h3><span style="color: #000000;"><b>Nilachal</b></span></h3></p>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/bandarban15.jpg"><img class="alignleft wp-image-1007" src="image/bandarban15.jpg" alt="Nilachal" width="425" height="303"></a></span><span style="color: #000000;">There is another beautiful place to see near Meghla is called Nilachal also maintained by district administration. it is known as tiger hill. The view of Nilachal is so spectacular for snapping.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Nilachal is the nearest tourist spot from Bandarban. It is situated at Tigerpara. It is near about 2000 feet above of sea level and 5 kilometer away from the Bandarban town. From here visitor can see the total glance of Bandarban town and a vast landscape. In the rainy season visitor can be thrilled walking through the clouds. Visitor can watch a golden twilight in the evening and also enjoy an evergreen moonlight in the moonlit night. During the winter season, it is awesome at the foggy morning. On the way to Nilachal, visitor can see some tribe villages with their raw natural expression.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The tourist spot is under construction. Yet there is no food and accommodation facility. The authority has already erected infrastructures for restaurant and rest house and it will start near future. So if someone wants to stay long there, he should to take food and drinking water from Bandarban town.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Nilachal is just 5 kilometer away from Bandarban town. So visitor can hire private jeep or auto rickshaw to go there.</span></p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Nilgiri<br>
</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/bandarban16.jpeg"><img class="wp-image-1018 alignleft" src="image/bandarban16.jpeg" alt="Nilgiri" width="449" height="299"></a></span><span style="color: #000000;">Nilgiri or Nil Giri is one of the tallest peaks and beautiful tourist spot in Bangladesh. It is about 3500 feet high and situated at Thanci Thana. It is about 46 km south of Bandarban on the Bandarban-Chimbuk-Thanchi road. Beside this spot you can see Mro villages. Their colorful culture and living style are surely an unexplored experience for the visitors. In rainy season here creates a spectacular scenery, the whole spot is covered with the blanket of clouds. You can enjoy a cloudy experience. Winter is waiting for you with it’s foggy gesture on the height. It is a nice place for campfire in that season. Most attractive time is the dawn. It is better if you chose to stay during 7-18 dates of a lunar month to enjoy the moonlit night. You can also enjoy the serpentine course of Sangu River. This is the most spectacular tourist spot in Bandarban and managed by Army brigade of Bandarban.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There is beautiful resort in the top of the mountain maintain by the Bangladesh Army. You have to confirm the reservation through army officer. There are three well furnished cottages ranging from Tk4000-7000. There are also three tents having 4 beds each Tk2000 per tent. There is also restaurant, helipad etc. Electricity available from 6-9 pm and temperature near 10-25 degree Celsius.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Nilgiri is 46 kilometer away from Bandarban sadar. Visitor can hire a private vehicle from Bandarban sadar or you can go there by Thanci bound bus or jeep. On the way to Nilgiri Visitor have to register his name and address to the military check post.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Sangu River</b></span></p>
<p style="text-align: justify;"><a href="image/bandarban17.jpg"style="float:left;padding-right:15px;padding-bottom:10px;"><img class=" wp-image-11452 alignleft" src="image/bandarban17.jpg" alt="Sangu_River_from_Bandarban_Town,_18_Nov,_2004" width="395" height="296" ></a><span style="color: #000000;">Sangu River is the complete part of the natural beauty of Bandarban. It follows a northerly circuitous course in the hill tracts up to Bandarban. It enters the district from the east and flows west across the district and finally falls into the bay of Bengal at the end of a course of 270 km. This river is flowing through the hills thousands of years. It is an important route to communicate with Ruma and Thanci Upozilla. It has huge financial interests for the population of Bandarban. This river is widely used for transportation, agricultural and other necessary products for the people of remote community.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">In the winter season the current of the river almost becomes stagnant but in the rainy season the current becomes aggressive. Visitor must be attract with the beautification scattered on the both sides of it. You can find here hills, forests, falls with a river together. All the way you will be thrilled only and it is simply amazing.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">You will enjoy a magnificent river cruise in Sangu and there are so many spots to arrange a picnic. You can hire traditional boats or engine boats from the old Sangu bridge or from Boatghat at Kyachingghata.</span></p>
<h3><span style="color: #000000;"><b>Prantik Lake</b></span></h3>
<p style="text-align: justify;"><a href="image/bandarban18.jpg" style="float:right;padding-left:15px;padding-bottom:10px;"><img class=" wp-image-11485 alignleft" src="image/bandarban18.jpg" alt="Prantik-Lake" width="384" height="288" ></a><span style="color: #000000;">Prantik Lake is really beautiful tourist spot in Bandarban district of Bangladesh. This lake is surrounded by many kind of plants and trees. This amazing place will certainly attract tourist mind. Prantik Lake is an ideal place for travel.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Prantik Lake located in a village named “Holudia” near the Keranihat-Bandarban Road. It is 14km away from Bandarban town. Volume of this area is 29 acres.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Tourist can voyage the lake by paddle boat. This lake is nice place for fishing. After getting the authorities permission anyone can fishing here.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Bandarban to Holudia local bus is available and from Holudia you can hire a jeep or auto rickshaw to go Prantik Lake.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There is no food and accommodation facility in near Prantik Lake. So you have to manage mineral water and food with your own arrangement. Tourists can stay whole day till evening. But in the evening you have to return in Bandarban.</span></p>
<h3 style="text-align: justify;"><span style="color: #000000;"><b>Mirinja Parjatan</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Mirinja tourist spot (Parjatan complex) is situated at Lama upazilla of Bandarban district in Bangladesh. It is wonderful tourist spot in Lama. It is about 1500 feet high from sea level. In good weather, you can view Maheskhali Island, Bay of Bengal, Matamuhuri River and Lama upazilla at a glance. Parjatan Corporation developed an attractive tourist spot in that area. There is an observation tower in this spot.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Mirinja tourist spot situated at 16 Kilometer point of Fashiakhali – Lama – Ali Kadam road of Bandarban district in Bangladesh.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">From Bandarban Sadar to Lama upazilla it is 70 kilometer distance. So you can go Mirinja tourist spot by jeep/chander gari or private vehicle.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There is a government owned rest house in that area. If you want stay there, you need proper authorization from the authority.</span></p>
<h3><span style="color: #000000;"><b>Upabon Parjatan</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">Upabon Parjatan is another beautiful tourist spot in Bandarban at Naikhongchari. It is wonderful gift of nature. Here is an amazing lake surrounded by forest.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">A lot of birds are singing here and you will surely be amazed looking at the big rocks and surrounding natural scene. There is a hanging bridge over the lake and it is longer than the Meghla hanging bridge. The view of Upobon is so spectacular for snapping.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Upabon Parjatan complex is located at Nikhongchari Upazilla of Bandarban district in Bangladesh. Upabon Parjatan complex is just 2 Kilometer away from Nikhongchori Upazilla sadar.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Nikhongchari Upazilla is about 110 Kilometer far away from Bandarban Sadar. You can go there by a private vehicle from Bandarban sadar. Another way is if you are in Coxsbazar then at first go to Ramu upazilla of Coxsbazar by bus and then go to Naikhongchari sadar by Jeep/Chander Gari or Auto rickshaw.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There are two Government owned rest houses and one residential HOTEL IN that area. But it will be better to stay Coxsbazar hotel or you can stay Naikhongchori sadar.</span></p>

<h3><span style="color: #000000;"><b>Keokeradong</b></span></h3>
<p><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/bandarban19.jpg"><img class="size-full wp-image-1019 alignleft" src="image/bandarban19.jpg" alt="Keokradong-Bandarban" width="300" height="220"></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Keokradong is the second highest mountain of Bangladesh. Keokradong is about 4,035 ft (1,230 meters) high from the sea level. It is situated in 30km away from the Ruma sadar upazilla of Bandarban in Bangladesh. This remote area is full of natural beauty. Here you can see many small and big mountains and hills. This area is covered with dense forests, birds and animals.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Keokradong Mountain is located on the border between Bangladesh and Myanmar. It is the place of surprising beauty. This natural beauty is surely attracts the mind of the adventurous people. In the winter season many adventurous tourist visit this place with great excitement. You will pleased with the dazzling beauty of green hill, cool fountains, zigzag path, hilly road side, hide and seek game of clouds on the top of the hill.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">For visiting Keokradong you have to reach at Bandarban first then go to Ruma Upazilla. Ruma is 50 kilometer away from Bandarban. You should remember that after 4 pm you are not allowed to leave Ruma for visiting Bogalake, Keokradong or Tajingdong. As it is a remote area of Bangladesh, the road is not so plain. The communication systems of Bogalake become very difficult in the Rainy season. The road is still under construction. From Ruma you can hire a pickup or jeep (locally known as “Chander Gari”) up to Koikhong Jiri at the fare of Tk. 1800-2000. You can also go there by buying tickets of Chander Gari or Bus. The first trip is at 9am. It will take 1-1.30 hrs. Koikhong Jiri to Ruma you have to go by one hour boat journey. Again Ruma to Boga Lake you should hire a jeep at the fare of Tk. 1800. Two tribal communities named Saikotpara and Darjilingpara are 4 km away from Bogalake. There are some tribal groups live in this area. Darjilingpara is about 1 km away from Keokradong. It will take another 45 minute to reach the highest point of Keokradong and you have to walk through the hills from Boga Lake to Keokradong to go there.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Remember that, this journey is very much laborious. So keep confidence. Always carry drinking water and first aid box with you. Show positive attitude with local people and should respect the tribal culture.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There are some residential hotels in Ruma Bazar, so you have to confirm at first the hotel reservation before going to Ruma, otherwise you will have no alternative passing the night. If you are fortunate you can get tribal house to pass the night.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">In Bogalake There is no other accommodation facility except the rest houses of district council. There is no mobile network, no restaurant and also no good road communication. You should start your journey early in the morning from Bogalake to reach Keokradong and it may take 5 to 6 hours to reach Keokradong. However, the sceneries of cool air, white clouds, hills, river and lake are really unique and incomparable. If you go there obviously you can get an enjoyable, delightful and thrilling experience.</span></p>
<h3><span style="color: #000000;">&nbsp;</span><span style="color: #000000;"><b>Tajingdon</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/bandarban20.jpg"><img class="alignleft wp-image-1021" src="image/bandarban20.jpg" alt="tajingdong" width="425" height="239" ></a></span><span style="color: #000000;">Tajingdong also known as “Bijoy” is the highest mountain of Bangladesh. Tajingdong is about 4300 ft (1310 meters) high from the sea level. It is situated in remakri pangsha union under Ruma upazilla of Bandarban in Bangladesh. According to local tribal language “Tajing” means “Great” &amp; “Dong” means “Hill” so that means “Great hill”.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There are various tribal community is developed surrounding the mountain and their living styles are so natural. This remote area is full of natural beauty. Here you can see many small and big mountains and hills. This area is covered with dense forests, birds and animals.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There are many tourist visits the Tajingdong Mountain in every year. It is the place of surprising beauty. This natural beauty is surely attracts the mind of the adventurous people. In the winter season many adventurous tourist visit this place with great excitement. You will pleased with the dazzling beauty of green hill, cool fountains, zigzag path, hilly road side, hide and seek game of clouds on the top of the hill.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">For visiting Tajingdong you have to reach at Bandarban first then go to Ruma Upazilla. Ruma is 50 kilometer away from Bandarban. You should remember that after 4 pm you are not allowed to leave Ruma for visiting Bogalake, Keokradong or Tajingdong. As it is a remote area of Bangladesh, the road is not so plain. The communication systems of Bogalake become very difficult in the Rainy season. The road is still under construction. From Ruma you can hire a pickup or jeep (locally known as “Chander Gari”) up to Koikhong Jiri at the fare of about Tk. 2000-200. You can also go there by buying tickets of Chander Gari or Bus. The first trip is at 9am. It will take 1-1.30 hrs. Koikhhong Jiri to Ruma you have to go by one hour boat journey. Again Ruma to Boga Lake you should hire a jeep at the fare of about Tk. 1800-2000. Finally you have to walk through the hills from Boga Lake to Tajingdong.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Remember that, this journey is very much laborious. So keep confidence. Always carry drinking water and first aid box with you. Show positive attitude with local people and should respect the tribal culture.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There are some residential hotels in Ruma Bazar, so you have to confirm at first the HOTEL RESERVATION before going to Ruma, otherwise you will have no alternative passing the night. If you are fortunate you can get tribal house to pass the night.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">In Bogalake There is no other accommodation facility except the rest houses of district council. There is no mobile network, no restaurant and also no good road communication. You should start your journey early in the morning from Bogalake to reach Tajingdong and it may take 7 to 8 hours to reach Tajingdong. However, the sceneries of cool air, white clouds, hills, river and lake are really unique and incomparable. If you go there obviously you can get an enjoyable, delightful and thrilling experience.</span></p>
<h3 style="text-align: justify;"><span style="color: #000000;"><b>Plan your trip</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">While visiting Bandarban, you have to hike through the mysterious hills of Bandarban, drive through the zigzag hilly roads, or struggles against the fiery Sangu river. This trip is a lifetime opportunity for any travelers. The travelers need an expert driver to move one place to another place. And the local drivers of Bandarban are very expert in driving through the hilly roads. It is better to use double gear vehicle. The vehicle can easily be rented from the Bandarban town. It is better to book transport and accommodation to avoid any last-minute trouble.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Following trip plans are commonly operated by tour operators. However necessary arrangement can be made by your special requirement.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Plan 1: Bandarban – Golden Temple – Meghla – Nilachol – Bandarban.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Plan 2: Bandarban – Milonchori – Shoilo Propat – Chimbuk – Nilgiri – Bandarban.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Plan 3: Transport Package–3: Bandarban – Golden Temple – Meghla – Nilachol – Milonchori – Shoilo Propat – Chimbuk – Nilgiri – Bandarban.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Plan 4: Bandarban – Ruma – Bogalake – Bandarban.</span></p>
<h3><span style="color: #000000;"><b>How to go Bandarban from Dhaka</b></span></h3>
<p><span style="color: #000000;">Following bus services can be used to go Bandarban from Dhaka and Chittagong:</span></p>
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
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Saudia Paribahan</b></span></p>
<p><span style="color: #000000;">Arambag, Dhaka – Phone: +88-02-7102465</span></p>
<p><span style="color: #000000;">Gabtoli, Dhaka – Phone: +88-02-8018445</span></p>
<p><span style="color: #000000;">Kalabagan, Dhaka – Phone: +88-02-9124792</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>S.Alam Services Ltd.</b></span></p>
<p><span style="color: #000000;">Fakirapul, Dhaka, Bangladesh Telephone: +8802-9331864</span></p>
<p><span style="color: #000000;">Kamalapur, Dhaka, Bangladesh Telephone: +8802-8315087</span></p>
<p><span style="color: #000000;">Suritola, Dhaka, Bangladesh Telephone: +8802-9566654</span></p>
<p><span style="color: #000000;">Gabtoli, Dhaka, Bangladesh Telephone: +8802-9002702</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Dolphin Services</b></span></p>
<p><span style="color: #000000;">Motijheel, Dhaka Phone +880-2-9558802</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Unique Services</b></span></p>
<p><span style="color: #000000;">Gabtoli Counter, Dhaka – Phone-9002710</span></p>
<p><span style="color: #000000;">Asadgate Counter, Dhaka – Phone-8113946</span></p>
<p><span style="color: #000000;">Sukrabad Counter, Dhaka – Phone-9143975</span></p>
<p><span style="color: #000000;">Fakirapool Counter, Dhaka – Phone-8318151</span></p>
<p><span style="color: #000000;">Kamalapur Counter, Dhaka – Phone-9337846</span></p>
<p><span style="color: #000000;">Sayedabad Counter – 1, Dhaka – Phone-7546377, 01190-534998</span></p>
<p><span style="color: #000000;">Sayedabad Counter – 2, Dhaka – Phone-7552152</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;">&nbsp;<b>Places to eat</b></span></h3>
<p><span style="color: #000000;"><b>Sakura Hill Resort Restaurant</b></span></p>
<p><span style="color: #000000;">Ruma Road, Bandarban</span></p>
<p><span style="color: #000000;"><b>Sangu Restaurant.</b></span></p>
<p><span style="color: #000000;">Sangu Restaurant, Don Bosco High School Road, Jadi Para, Bandarban</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;">&nbsp;<b>Places to stay</b></span></h3>
<p><span style="color: #000000;"><b>Sakura Hill Resort</b></span></p>
<p><span style="color: #000000;">3 km from Bandarban Sadar (Ruma Road), Bandarban, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Types of Resort: Bungalow, Cottage, Tribal Cottage and VIP Complex.</span></p>
<p><span style="color: #000000;">Total Resorts: There is a VIP Complex, Tribal Cottage, 8 Bungalows and 4 Cottages.</span></p>
<p><span style="color: #000000;">Rent of Resort: Rent Range of Sakura Hill Resort is Tk. 1000-8500 (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Plaza</b></span></p>
<p><span style="color: #000000;">Address of Hotel : Hotel Plaza Bandarban, Ward No.7, Army Para, Bandarban, Chittagong</span></p>
<p><span style="color: #000000;">Phone Number : +88 01856699910, +88 01856699911</span></p>
<p><span style="color: #000000;">Room Types of this Hotel:</span></p>

<span style="color: #000000;">Royal Suite</span><br>
<span style="color: #000000;">Deluxe</span><br>
<span style="color: #000000;">Couple + Couple</span><br>
<span style="color: #000000;">Couple + Single</span><br>
<span style="color: #000000;">Couple</span><br>
<span style="color: #000000;">Three Single</span><br>
<span style="color: #000000;">Two Single</span><br>
<span style="color: #000000;">Single</span>

<p><span style="color: #000000;">Rent of Room : Price range of Hotel Plaza is approximately Tk. 1500-7000/- (BDT).</span></p>
<p><span style="color: #000000;">Services of Hotel Plaza Bandarban</span></p>

<span style="color: #000000;">30 Rooms are fully Air-Conditioned</span><br>
<span style="color: #000000;">24 Hours Security Service</span><br>
<span style="color: #000000;">Multilingual Staff</span><br>
<span style="color: #000000;">VIP support</span><br>
<span style="color: #000000;">Medical Service</span><br>
<span style="color: #000000;">Computerized Billing System with Credit Card Settlement</span><br>
<span style="color: #000000;">Timely Check-in / Check-out</span><br>
<span style="color: #000000;">Phone Service with ISD</span><br>
<span style="color: #000000;">Satellite Dish Connection</span><br>
<span style="color: #000000;">Safety Deposit Box</span><br>
<span style="color: #000000;">Hot and Cold Water facilities</span><br>
<span style="color: #000000;">Generator Services</span><br>
<span style="color: #000000;">Conference Room facilities</span><br>
<span style="color: #000000;">Transportation Service</span>

<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Sangu Residential Hotel</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Sangu Residential Hotel, Don Bosco High School Road, Jadi Para, Bandarban</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911</span></p>
<p><span style="color: #000000;">Room Types of Hotel Sangu, Bandarban:</span></p>

<span style="color: #000000;">Royal Suite (AC)</span><br>
<span style="color: #000000;">Super Deluxe (AC)</span><br>
<span style="color: #000000;">Couple Bed (AC)</span><br>
<span style="color: #000000;">Twin Bed (AC)</span><br>
<span style="color: #000000;">Single Bed (AC)</span><br>
<span style="color: #000000;">Couple Bed (Non AC)</span><br>
<span style="color: #000000;">Twin Bed (Non AC)</span><br>
<span style="color: #000000;">Single Bed (Non AC)</span><br>
<span style="color: #000000;">Conference Room (Non AC )</span>
<p><span style="color: #000000;">Rent of Room:</span></p>
<p><span style="color: #000000;">Price range of Hotel Sangu is approximately Tk. 700-6000/- (BDT).</span></p>
<p><span style="color: #000000;"><b>Hotel 3 Star</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Hotel 3 Star, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911</span></p>
<p><span style="color: #000000;">Room Types of this Hotel: AC Room, Non AC Room and has a Conference Room. Rent of Room:</span></p>
<p><span style="color: #000000;">The price range of this hotel is Tk. 3500-5000 (BDT)</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hillside Resort</b></span></p>
<p><span style="color: #000000;">Hillside Resort is situated at 4 kilometer away from Bandarban town on Chimbuk road. The area is named as Milonchori. Hillside Resort has pleasant accommodation facilities for 50 persons in various categories like single bed, double bed, triple bed and quartet bed. They have also a restaurant name as RESTORA RIGRRE KHYANG. Hillside Resort has five nice cottages with three are fully air conditioned including a tribal house and a dormitory. All cottages and houses have attached bathrooms with hot water and other facilities. They are able to mange local guide for tourists and also provide vehicle services for movements. Hill Side Resort is the best place for view the surrounding hilly area with the amazing view of Sangu River and other places.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Holiday Inn Resort.</b></span></p>
<p><span style="color: #000000;">Address of Resort: Holiday Inn Resort, Meghla, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">holiday inn resort</span></p>
<p><span style="color: #000000;">Holiday Inn Resort</span></p>
<p><span style="color: #000000;">Room Types of this Resort:</span></p>
<p><span style="color: #000000;">AC Deluxe</span></p>
<p><span style="color: #000000;">AC</span></p>
<p><span style="color: #000000;">Non AC</span></p>
<p><span style="color: #000000;">Cottage</span></p>
<p><span style="color: #000000;">Number of Rooms in this Resort: There are 9 rooms and a cottage (2 rooms) in this resort.</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Holiday Inn is approximately Tk. 1800-2200 (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Paharika</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Hotel Paharika, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">hotel paharika</span></p>
<p><span style="color: #000000;">Hotel Paharika, Bandarban</span></p>
<p><span style="color: #000000;">Room Types of this Hotel:</span></p>
<p><span style="color: #000000;">Single Bed</span></p>
<p><span style="color: #000000;">Double Bed</span></p>
<p><span style="color: #000000;">Three Bed</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Hotel Paharika is approximately Tk. 1200-2200/- (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">Hotel Four Star.</span></p>
<p><span style="color: #000000;">Address of Hotel: Hotel Four Star, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">hotel 4 star bed room bandarban bangladesh</span></p>
<p><span style="color: #000000;">Hotel 4 Star Non AC Bed Room</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Four Star</b></span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Room Types of this Hotel:</span></p>
<p><span style="color: #000000;">3 Bed AC Room</span></p>
<p><span style="color: #000000;">3 Bed Non AC Room</span></p>
<p><span style="color: #000000;">3 Bed Non AC Room</span></p>
<p><span style="color: #000000;">4 Bed Non AC</span></p>
<p><span style="color: #000000;">Couple Bed AC</span></p>
<p><span style="color: #000000;">Couple Bed Non AC</span></p>
<p><span style="color: #000000;">Single Non AC</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Hotel Four Star is approximately Tk. 500-2250 (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Green Hill</b></span></p>
<p><span style="color: #000000;">Address of Hotel : Hotel Green Hill, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Room Types of this Hotel :</span></p>
<p><span style="color: #000000;">Single Bed</span></p>
<p><span style="color: #000000;">Double Bed</span></p>
<p><span style="color: #000000;">Triple Bed</span></p>
<p><span style="color: #000000;">Number of Rooms in this Hotel: There are 18 rooms in this residential hotel and more than 30 person can stay at Greenhill hotel.</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Hotel Green Hill is approximately Tk. 400-900 (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Purabi</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Hotel Purabi, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Room Types of this Hotel:</span></p>
<p><span style="color: #000000;">Single</span></p>
<p><span style="color: #000000;">Double</span></p>
<p><span style="color: #000000;">3 Bed</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Hotel Purobi is approximately between Tk. 225 to Tk. 2200 (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Purbani</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Hotel Purbani, Bandarban, Chittagong</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Room Types of this Hotel:</span></p>
<p><span style="color: #000000;">Single Bed</span></p>
<p><span style="color: #000000;">Double/Couple Bed</span></p>
<p><span style="color: #000000;">Group Bed</span></p>
<p><span style="color: #000000;">Rent of Room: Price range of Hotel Purbani is approximately Tk. 800-2200/- (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Prue Abashika</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Hotel Prue Abashika, Bandarban Sadar, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Hotel Prue Abashika is approximately Tk. 150-600 (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Nilgiri Resort</b></span></p>
<p><span style="color: #000000;">Address of Resort: Nilgiri Resort, Nilgiri, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Description of the Resort: Nilgiri Resort is the top most resort in Bangladesh. Nilgiri Resort is located 47 kilometer South-East of Bandarban town on Chimbuk Range at a height of 2400 feet from sea level. Nilgiri Resort has a high class residential accommodation that makes a difference. Bangladesh Army in Bandarban established and maintained Nilgiri Resort. To visit Nilgiri Resort traveler have to seek permission from Brigade HQ of Bangladesh Army in Bandarban. The place is accessible by road. It is better to have your own vehicle. It may take 2 Hrs Drive from Bandarban. Nilgiri Resort area is locally known as Darjeeling of Bangle. There is a nice Restaurant in Nilgiri Resort and have 5 cottages.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Parjatan Motel</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Parjatan Motel, Meghla, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Room Types and other facilities of this Hotel:</span></p>
<p><span style="color: #000000;">Royal AC Suite</span></p>
<p><span style="color: #000000;">AC Deluxe</span></p>
<p><span style="color: #000000;">AC Twin</span></p>
<p><span style="color: #000000;">Non AC Twin</span></p>
<p><span style="color: #000000;">Economy Room</span></p>
<p><span style="color: #000000;">Conference Hall</span></p>
<p><span style="color: #000000;">Restaurant</span></p>
<p><span style="color: #000000;">Number of Rooms in this Hotel: There are 27 different types of room in this hotel.</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Parjatan Motel is approximately Tk. 300-4300 (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Hill Bird</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Hotel Hill Bird, Bandarban Bazar, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Room Types of this Hotel:</span></p>
<p><span style="color: #000000;">Single</span></p>
<p><span style="color: #000000;">Double</span></p>
<p><span style="color: #000000;">Triple</span></p>
<p><span style="color: #000000;">Room with common bath</span></p>
<p><span style="color: #000000;">Number of Rooms in this Hotel: There are 43 different types of room in this hotel.</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Hotel Hillbird is approximately Tk. 300-1300 (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Ajmir</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Hotel Ajmir, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Room Types of this Hotel :</span></p>
<p><span style="color: #000000;">Single</span></p>
<p><span style="color: #000000;">Couple/Family</span></p>
<p><span style="color: #000000;">3 Bed</span></p>
<p><span style="color: #000000;">4 Bed</span></p>
<p><span style="color: #000000;">Dormitory</span></p>
<p><span style="color: #000000;">Number of Rooms in this Hotel: There are more than 14 rooms in Hotel Ajmir.</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Hotel Ajmir is approximately Tk. 600-2250 (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Autithi</b></span></p>
<p><span style="color: #000000;">Address of Hotel : Hotel Autithi, Bandarban Sadar, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Room Types of this Hotel :</span></p>
<p><span style="color: #000000;">Single</span></p>
<p><span style="color: #000000;">Couple/Family</span></p>
<p><span style="color: #000000;">3 Bed</span></p>
<p><span style="color: #000000;">4 Bed</span></p>
<p><span style="color: #000000;">Dormitory</span></p>
<p><span style="color: #000000;">Rent of Room : Rent range of Hotel Autithi is approximately Tk. 600-2250/- (BDT).</span></p>
<p><span style="color: #000000;"><b>Hotel Sumaiya</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Hotel Sumaiya, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Room Types of this Hotel:</span></p>
<p><span style="color: #000000;">Single</span></p>
<p><span style="color: #000000;">Couple/Family</span></p>
<p><span style="color: #000000;">3 Bed</span></p>
<p><span style="color: #000000;">4 Bed</span></p>
<p><span style="color: #000000;">Dormitory</span></p>
<p><span style="color: #000000;">Number of Rooms in this Hotel: There are more than 14 rooms in Hotel Sumaiya.</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Hotel Sumaiya is approximately Tk. 600-2250 (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Bilkis Hotel</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Bilkis Hotel, Bandarban Sadar, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Room Types of this Hotel:</span></p>
<p><span style="color: #000000;">Single</span></p>
<p><span style="color: #000000;">Double</span></p>
<p><span style="color: #000000;">Triple</span></p>
<p><span style="color: #000000;">Total Number of Sit in this Hotel: There are 20 Beds in this residential hotel.</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Hotel Bilkis is approximately Tk. 225-525/- (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Hotel Royal</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Hotel Royal, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Room Types of this Hotel:</span></p>
<p><span style="color: #000000;">Single</span></p>
<p><span style="color: #000000;">Single Deluxe</span></p>
<p><span style="color: #000000;">Double</span></p>
<p><span style="color: #000000;">Double Deluxe</span></p>
<p><span style="color: #000000;">3 Bed</span></p>
<p><span style="color: #000000;">Deluxe</span></p>
<p><span style="color: #000000;">AC Deluxe (Single)</span></p>
<p><span style="color: #000000;">AC Deluxe (Double)</span></p>
<p><span style="color: #000000;">Deluxe Twin</span></p>
<p><span style="color: #000000;">Rent of Room: Rent range of Hotel Royal is approximately Tk. 375-1950/- (BDT).</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Ruma Bazar Resort</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Ruma Bazar Resort, Ruma, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Phone Number: +88 01856699910, +88 01856699911.</span></p>
<p><span style="color: #000000;">Description of the Hotel: In Ruma bazar there are several resorts to stay. Ruma Bazar Resort is situated beside the river. And this resort is in Ruma Thana. From this place there is a very beautiful trail to Boga Lake. Beside Boga Lake there are some hotels to stay at night.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Police Officers Mess</b></span></p>
<p><span style="color: #000000;">Address of Hotel: Police Officers Mess, Bandarban, Chittagong, Bangladesh.</span></p>
<p><span style="color: #000000;">Room Types of this Hotel:</span></p>
<p><span style="color: #000000;">AC Bed</span></p>
<p><span style="color: #000000;">Non AC Bed</span></p>
<p><span style="color: #000000;">Rent of Room: Price range of Police Officers Mess is approximately Tk. 900-2250/- (BDT).</span></p>
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