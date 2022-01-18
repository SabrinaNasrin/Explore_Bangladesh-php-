<html>
<head>

  <title>Cox's Bazar</title>
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
 <div class="main-content col-md-12">

            
                            
    <div id="content" role="main">
                
            <article class="post-12357 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p><span style="color: #000000;">Feeling blue? Wanna dive into the blissful ocean? Or perhaps a beach volleyball tournament on the sandy beach? Or you may want to fancy a fruit cocktail. We have just the thing for you!</span></p>
<h3><span style="color: #000000;"><b>Cox’s Bazar</b></span></h3>
<p style="text-align: justify;"><a href="image/cox1.jpg"style="float:left;padding-right:15px;padding-bottom:10px;"><img class="alignleft wp-image-2166 " src="image/cox1.jpg" alt="Cox05-13" width="434" height="289"></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Cox’s Bazaar sea beach is the longest beach in the world. And this is definitely one of the biggest tourist attractions in the country. Located in Chittagong District, this sea beach faces the amazing waves of grand Bay of Bengal. Miles of golden sands, towering cliffs, surfing waves, rare conch shells, colorful pagodas, Buddhist temples and tribes and mouth-watering sea-food made Cox’s Bazar the tourist capital of Bangladesh. There’s a plenty of things to do in Cox’s Bazar. This is more than you can expect from a traditional sea beach.</span></p>
  <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
    
<p style="text-align: justify;"><span style="color: #000000;"><b>Ramu</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">This Buddhist village is about 16km away from Cox’s Bazar situated on the main road to Chittagong. There are monasteries, khyangs and pagodas with great religious importance which are rich in years old artifacts, scripts, relics etc. There’s a large bronze statue of Buddha measuring more than thirteen feet height. The people of this Buddhist village has their own charm for being delicate and peace-loving.</span></p>
 <p>&nbsp;</p>
  
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/cox2.jpeg"><img class="wp-image-1085 alignright" src="image/cox2.jpeg" alt="PIC00745.JPG" width="344" height="258" ></a></span></p>

<p style="text-align: justify;"><span style="color: #000000;"> <b>Himchari</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">About 32km south of Cox’s Bazar, Himchari is a delightful place for famous broken hills and waterfalls.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
 <p>&nbsp;</p>
  <p>&nbsp;</p>
   <p>&nbsp;</p>
<p><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/cox3.jpeg"><img class="alignleft wp-image-1437" src="image/cox3.jpeg" alt="Inani-Beach" width="398" height="265" ></a></span></p>
<p><span style="color: #000000;"> <b>Inani</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Inani beach is only half an hour’s drive from Cox’s Bazar. With the sea to the west and a background of steep hills to the east, this beach will mesmerize with its amazing view.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
 <p>&nbsp;</p>
  <p>&nbsp;</p>
   <p>&nbsp;</p>

<p style="text-align: justify;"><span style="color: #000000;"> <b>Shopping</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">While shopping in Cox’s Bazar, your hands will be filled with bags full of tribal handicrafts, clothes, shell etc. within a moment. There are plenty of stores along the beach and in the town market filled with eye-catching items. You will forget when to stop.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">And there is always a chance to get sporty against the waves of Bay of Bengal!</span></p>
<p>&nbsp;</p>
<p><a href="image/cox4.jpeg"style="float:right;padding-left:15px;padding-bottom:10px;"><img class="wp-image-1882 alignleft" src="image/cox4.jpeg" alt="Mangrov_forest_of_Maheshkhali" width="347" height="260" ></a><span style="color: #000000;"><b>Maheskhali</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">An island off the coast of Cox’s Bazar. It has an area of 268 square kilometers. Through the centre of the island and along the eastern coast line rises a range of low hills, 300 feet high; but the coast to the west and north is a lowlying treat, fringed by mangrove jungle. In the hills on the coast is built the shrine of Adinath, dedicated to siva. By its side on the same hill is Buddhist Pagoda.</span></p>
 <p>&nbsp;</p>
  <p>&nbsp;</p>
   <p>&nbsp;</p>
<h3><p><span style="color: #000000;"><b>Accommodation</b></span></p></h3>
<p><span style="color: #000000;"><strong>Hotel Sea-gull</strong></span><br>
<span style="color: #000000;"> Hotel Motel Zone</span><br>
<span style="color: #000000;"> Cox’s Bazar Sea Beach,</span><br>
<span style="color: #000000;"> Cox’s Bazar, Bangladesh.</span><br>
<span style="color: #000000;"> Tel : +88 0341 62480 – 90</span><br>
<span style="color: #000000;"> Cell : +88 01196000511,</span><br>
<span style="color: #000000;"> +88 01196000513, +88 01196000515,</span><br>
<span style="color: #000000;"> Fax : +88 0341 64436</span><br>
<span style="color: #000000;"> Email : reservations@seagullhotelbd.com</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><strong>Hotel Sea Crown</strong></span><br>
<span style="color: #000000;"> Marin Drive, Kola Toil New Beach</span><br>
<span style="color: #000000;"> Kolatoli, Cox’s Bazar, Bangladesh</span><br>
<span style="color: #000000;"> Phone : 88-0341-64795, 88-0341-64474</span><br>
<span style="color: #000000;"> Mobile : 88-01817089420</span><br>
<span style="color: #000000;"> Email : seacrownhotel[at]gmail com</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><strong>Hotel Sea-Palace Limited.</strong></span><br>
<span style="color: #000000;"> Kolatoli, Cox’s Bazar</span><br>
<span style="color: #000000;"> Phone : 88-0341-63792, 88-0341-63692, 0341-63794, 0341-63826, 63853</span><br>
<span style="color: #000000;"> Mobile : 88-01714 652 227</span><br>
<span style="color: #000000;"> 01714 652 228, 01833148386-7</span><br>
<span style="color: #000000;"> Fax : 88-0341-63769</span><br>
<span style="color: #000000;"> Email : cxb[at]hotelseapalaceltd.com</span><br>
<span style="color: #000000;"> seapalace@gmail.com</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><strong>Long Beach Hotel ltd.</strong></span><br>
<span style="color: #000000;"> 14 Kalatoli Main Road, Hotel Motel Zone,,</span><br>
<span style="color: #000000;"> Cox’s Bazar, Chittagong.</span><br>
<span style="color: #000000;"> Phone No. : +88 0341 51843-6,</span><br>
<span style="color: #000000;"> Fax : +88 0341 51062</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Hotel Coral Reef</b></span></p>
<p><span style="color: #000000;">Distance : 1 Km from the sea beach.</span><br>
<span style="color: #000000;"> Communication : By Bus and Airlines from Dhaka.</span><br>
<span style="color: #000000;"> Facilities : Air condition room, Running hot &amp; cold water, Minibar. Each room with belcony, Family suite with kitchen and internet facilities.</span><br>
<span style="color: #000000;"> Address :</span><br>
<span style="color: #000000;"> Hotel Coral Reef,</span><br>
<span style="color: #000000;"> Plot # 47, Block # B,</span><br>
<span style="color: #000000;"> Kalatoli, Coxs Bazar , Bangladesh</span><br>
<span style="color: #000000;"> Cell: (880) 01911-672135 or 01712-849373</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Uni Resort Ltd</b></span></p>
<p><span style="color: #000000;">Distance : 1 Km from the sea beach.</span></p>
<p><span style="color: #000000;">Communication : By Bus and Airlines from Dhaka.</span></p>
<p><span style="color: #000000;">Facilities : Game Zone, Coffee &amp; Pastry Shop, Stand by Generator, Business Centre, Restaurant, 24 hours room service, Gift shoop, Business centre. Game Zone and Conference hall with Multimedia projector and sound system.</span></p>
<p><span style="color: #000000;">Address :</span></p>
<p><span style="color: #000000;">Uni Resort Ltd,</span></p>
<p><span style="color: #000000;">Kalatoli, Coxs Bazar , Bangladesh</span></p>
<p><span style="color: #000000;">Cell:(880) 01911-672135 or 01712-849373</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><strong>Hotel Mishuk</strong></span></p>
<p><span style="color: #000000;">Distance : 40 Meters from the sea beach.</span><br>
<span style="color: #000000;"> Communication : By Bus and Airlines from Dhaka.</span><br>
<span style="color: #000000;"> Facilities : Full time generator service , Gizzard, Disline, Lift, Intercom. Balcony with every room, Near sea beach, News paper, 24 hours room service and Lift. Sea foods restaurant with Air conditioner, Local and International food, 24 hours room service.</span><br>
<span style="color: #000000;"> Address :</span><br>
<span style="color: #000000;"> Hotel Mishuk,</span><br>
<span style="color: #000000;"> Labonee More, Hotel Motel Zone,</span><br>
<span style="color: #000000;"> Cox’s Bazar, Bangladesh</span><br>
<span style="color: #000000;"> Cell: (880) 01911-672135 or 01712-849373</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><strong>Nitol Bay Resort</strong></span></p>
<p><span style="color: #000000;">Distance : 1 Km from the sea beach.</span><br>
<span style="color: #000000;"> Communication : By Bus and Airlines from Dhaka.</span><br>
<span style="color: #000000;"> Facilities : Fully AC, Swimming Pool, Roof Top lake, BBQ house, Restaurant, Internet. Swimming Pool, Roof Top lake, BBQ house, Homely service .</span><br>
<span style="color: #000000;"> Address :</span><br>
<span style="color: #000000;"> Nitol Bay Resort,</span><br>
<span style="color: #000000;"> Kolatoli Beach Road,</span><br>
<span style="color: #000000;"> Cox’s Bazar, Bangladesh</span><br>
<span style="color: #000000;"> Cell: (880) 01911-672135 or 01712-849373</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Hotel The Cox Today</b></span></p>
<p><span style="color: #000000;">Plot-7, Road-02, Hotel Motel Zone, Kolatoly Road, Cox’s Bazar, Bangladesh</span></p>
<p><span style="color: #000000;">Phone Contact: +88-0341 52410-22</span></p>
<p><span style="color: #000000;">Hot Line No: +88-017 555 98 449, +88-017 555 98 450</span></p>
<p><span style="color: #000000;">Fax: +88 0341 52424</span></p>
<p><span style="color: #000000;">E-mail Contact: reservation@hotelthecoxtoday.com, info@hotelthecoxtoday.com</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Mermaid Eco Resort</b></span></p>
<p><span style="color: #000000;">Mermaid Beach, Pechar Dwip,</span></p>
<p><span style="color: #000000;">Cox’s Bazar</span></p>
<p><span style="color: #000000;">+880 01841416464-9</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Transportation</b></span></p>
<p><span style="color: #000000;"><b>Green Line paribahan</b></span></p>
<p><span style="color: #000000;"><b>Head Office :</b><b> </b></span><br>
<span style="color: #000000;"> 9/2, Outer Circular Road, Momen Bagh,</span><br>
<span style="color: #000000;"> Rajarbagh, Dhaka – 1217 .</span><br>
<span style="color: #000000;"> <b>Tel : </b>8331302-4, 8353004-5, 9339623, 9342580</span><br>
<span style="color: #000000;"> <b>Fex : </b>+088-02-8350003</span><br>
<span style="color: #000000;"> <b>Email : </b>greenline@greenlineparibahan.com.</span></p>
<p>&nbsp;</p>
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