<html>
<head>

	<title>Wondering The Alleys of Tea Garden</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  body{
  background-color:#e3e3e3;}

  .main-content{font-size: 18px;}
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
                
            <article class="post-203 page type-page status-publish hentry">
                
                <div class="page-content">
              
                  <h3>Alleys of Tea Garden</h3>
                    <p><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/tea.jpeg"><img class="alignleft wp-image-1471" src="image/tea.jpeg" alt="10985205_725766184187523_4370676341859033345_n" width="423" height="317" ></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">The picturesque slopes of hill in Sylhet are covered with layers of tea garden which has been famous for providing tea to the entire country as well as foreign countries. Sylhet is called “The land of two leaves and a bud”. Different landscapes, unique range of flora and fauna, and a large of rivers and natural lakes have established Sylhet as one of the major tourist attractions in Bangladesh. Not only in Bangladesh, but also in entire South Asia, Sylhet is considered as one of the most naturally resourceful and archaeologically rich regions. This area is immensely influenced by Islam which explains the large number of shrines in this region alone.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Historically Sylhet has been a very long affiliation with mysticism. Before the conquest by the Muslims, it was ruled by local chieftains. In 1303, the great Saint Hazrat Shah Jalal came to Sylhet from Delhi with a band of 360 disciples to preach Islam and defeated the then Raja Gour Gobinda. Sylhet thus became a district of saints, shrines and daring but virile people. Its rich potentialities became easily attractive and the 18th century Englishmen made their fortune in tea plantation.</span></p>
<p>&nbsp;</p>

<h3><p><span style="color: #000000;"><b>Jaflong</b></span></p></h3>
<p style="text-align: justify;"><a href="image/tea1.jpeg"style="float:right;padding-left:15px;padding-bottom:10px;"><img class="alignright wp-image-7156" src="image/tea1.jpeg" alt="5570832698_d4179d850b_z" width="447" height="274"></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Jaflong is one of the most attractive tourist spots in Sylhet division. It only takes two hours drive from Sylhet town. Situated besides the river Mari in the lap of Hill Khashia, Jaflong is famous for its scenic view. The river is straightly connected with the great Himalayas of India which brings tons of stone boulders with its tide. The struggling lifestyle of the stone collectors in the river Mari is definitely a catch.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><p><span style="color: #000000;"><b>Sripur</b></span></p></h3>
<p><span style="color: #000000;">Numerous waterfalls on the hill across the border of India are the major attractions of Sripur. Besides, this area will pleases you with its enchanting views of nature and hills. Sripur is only 7-8km from Jaflong, and to be precisely it is actually on the way to Jaflong.</span></p>
<h3><span style="color: #000000;"><b>Jointapur’s Rajbari</b></span></h3>
<p><span style="color: #000000;">Located around 5km away from Jaflong, Jaintiapur is a scenic spot amidst tea gardens. Jaintapur was the capital of Jainta Kingdome at 18<sup>th</sup> century. You can visit the Jainta Rajbari, the palace of Kings of Jainta. Huge number of tourists visit this place to get a glimpse of remaining of Jainta Kingdom.</span></p>
<h3><span style="color: #000000;">&nbsp;</span><span style="color: #000000;"><b>Chatak</b></span></h3>
<p><span style="color: #000000;">Around 35km northwest of Sylhet town, Chhatak is famous for orange garden and Assam Bengal Cement Factory.</span></p>

<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Srimangal</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/tea2.jpeg"><img class="alignleft wp-image-1474" src="image/tea2.jpeg" alt="srimangalteaplantation15" width="419" height="314"></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Srimongal is famous for tea gardens, hills and forest areas on the hills. The tea gardens in here are famous for being the largest in the world. These gardens are beautifully patterned by the green nature. If you are not satisfied after only watching you can also look into how the tea is grown and processed. The Tea Research Institute Bangladesh will give you practical knowledge on how tea is processed, produced and exported eventually.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Lalakhal</b></span><br>
<span style="color: #000000;"> Rent a high-speed engine boat. And go to the last border point of Bangladesh through the beautiful Lalakhal canal. There’s beautiful resort in where you can fill your tummy with getting mesmerized with amazing views of hillside.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Madhabkunda Waterfall</b></span></h3>
<p><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/tea3.jpeg"><img class="alignright wp-image-1475" src="image/tea3.jpeg" alt="Amazing-panorama-of-Madhabkunda-waterfall" width="409" height="297" ></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Madhabkunda waterfall is one of the most attractive tourist spots in Sylhet division. Lots of tourists and picnic parties come to Madhabkunda every day for their enjoyment. The journey to Madhabkunda itself is exotic. On the way you can see the greenish beauty of tea garden, the hills and the zigzag road through the hills will increase the joy of your journey. In Madhabkunda you will see the great waterfall – falls of million tons of water from 200ft. height. There is a Parjatan Motel with a good restaurant for accommodation and food. You can also trek through Rajkandi Reserve Forest to discover Ham Ham waterfalls.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Lawacherra Rain Forest</b></span></h3>
<p><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/tea4.jpeg"><img class="alignleft wp-image-1353" src="image/tea4.jpeg" alt="Way_back_home_Lawachara_National_Park_Srimongol_Sylhet_Bangladesh" width="413" height="258"></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Lawacherra Rain Forest is one of the important &amp; well-reserved forests in Bangladesh. Here visitor may see gibbons swimming through the trees and birds like bee-eater owls parrot. It is a good habitant of Deer, leopard, wild chicken, squirrel, and python. Don’t miss it especially if you are bird watcher. The terrain is hilly and vegetation is fairly thick. Only one rare Chloroform tree of Asia is prime attraction.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><span style="color: #000000;">&nbsp;</span></h3>
<h3><span style="color: #000000;"><b>The Shrine of Hazrat Shah Jalal</b></span></h3>
<p><a href="image/tea5.jpeg" style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;"><img class="alignright wp-image-1669" src="image/tea5.jpeg" alt="48387090" width="409" height="349"></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Shrine of Saint Hazrat Shah Jalal is the most historical interest in Sylhet town. Today, more than six hundred years after his death, the shrine is visited by innumerable devotees of every caste and creed, who make the journey from far away places. Legend says, the great saint who came from Delhi to preach Islam and defeated the then Hindu Raja (king) Gour Gobinda, transformed the witchcraft followers of the Raja into catfishes which are still alive in the tank adjacent to the shrine Swords, the holy Quran and the robes of the holy saint are still preserved in the shrine.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The main attraction of Sylhet city is the Shrine of Hajrat Shahjalal(R) and Hajrat Shah Poran (R). Shrine of Hajrat Shahjalal (R) is on the top of a hillock (tilla) in Sylhet city. Thousands of visitors are coming everyday in this Shrine. Shrine of Hajrat Shah Paran (R) is eight km far from Sylhet town on the Sylhet-Jaflong road where also thousands of visitors visits this Shrine everyday. Road journey to Sylhet is a wonderful experience through roads running ups and down the hills and green lush tea gardens of nature at its best.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Temple of Sri Chaitannya Dev</b></span></h3>
<p><span style="color: #000000;">About 500 years old famous Temple of Sri Chaitannya Dev is about 45 km southeast from Sylhet town. The place is revered from being the ancestral home of the famous Vaishnava saint. Yearly fair is organized on the full moon day of the Bangla month Falgun. Hundreds and thousands of devotees from home and abroad attend this colorful fair.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Lawachora National Park</b></span></h3>
<p><a href="image/tea6.jpeg"style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;"><img class="alignleft wp-image-1671" src="image/tea6.jpeg" alt="Lawachara_National_Park_Srimongol_Sylhet_Bangladesh_11" width="421" height="316" ></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Lawachara National Park, located at Kamalganj Upazila, Maulvi Bazar District in the northeastern region of the country, is a major national park and nature reserve in Bangladesh. Biological diversity is a strong aspect of Lawachara National Park. The wildlife in Lawachara includes nearly 460 species of which nearly 250 are bird species. Lawchara National Park is a sure thing for those who want to have an adventurous ride through the jungle with getting fascinated by natural wonders and biodiversity.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Haors</b></span></h3>
<p><a href="image/tea7.jpeg"style="float:right;padding-left:15px;padding-bottom:10px;"><img class="alignright wp-image-1372" src="image/tea7.jpeg" alt="23129039" width="418" height="313" ></a></p>
<p style="text-align: justify;"><span style="color: #000000;">During winter in Sylhet, the vast wetlands like Hail Haor, Hakaluki Haor, Tanguar Haor is crowded with a diverse range of migratory birds. Among these wetlands, Tanguar Haor is located in Sunamganj District (northeast of Bangladesh) covering an area of about 100km<sup>2</sup> of which 2,802.36 ha<sup>2</sup> is wetland. With a unique ecosystem, it includes more than hundred resident birds and many more seasonal species of bird.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Madhabpur Lake</b></span></h3>
<p><span style="color: #000000;">Madhabpur Lake is natural lake inside the Madhabpur tea estate. The water of the lake is so clean and clear that you cannot stop yourself from jumping inside the lake. This lake is between the small hills, and most of the hills are planted with tea trees. At winter season different kinds of migratory birds come here.</span></p>
<h3><span style="color: #000000;"><b>Ratargul Swamp Forest</b></span></h3>
<p><span style="color: #000000;">Located in Gowainghat, Ratargul Swamp Forest is the only freshwater swamp forest in Bangladesh. This also is one of the few freshwater swamp forest in the world. Currently, this forest is naturally conserved under the Department of Forestry, Government of Bangladesh. The forest is situated in the river Goain adjacent with the canal named Chengir Khal. During rainy season, the forest goes under 20-30 feet water. You will have to rent a boat to wonder around the Ratargul Swamp Forest.</span></p>

<h3><span style="color: #000000;"><b>Tribal Life</b></span></h3>
<p><span style="color: #000000;">Sylhet is the home of Mainpuri and Khashia tribes. Manipuri is famous for its rich culture especially for dancing, singing and their traditional weaving. Their traditional handicrafts — such as exquisitely woven woolen shawls, saree, bed-cover, bags, etc. — are commonly found in the stores of Sylhet. On the other hand, Khasia tribe is famous for betel-leaf cultivation. Their villages are situated on top of hills and deep in the jungles which are commonly described as a piece of paradise.</span></p>
<h3><span style="color: #000000;"><b>How to go</b></span></h3>
<p><span style="color: #000000;">From Dhaka you can go Sylhet via Bus, Train or Plane. MAG Osmani International Airport is close to the Sylhet city. It takes only a few hours ride from Dhaka to Sylhet by road.</span></p>
<h3><span style="color: #000000;"><b>Plan your trip</b></span></h3>
<p><span style="color: #000000;">There are so many tourist attractions are scattered all over Sylhet division. Hassle free transportation system made any tourists’ visit in Sylhet more relaxing, comfortable and time-consuming.</span></p>
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