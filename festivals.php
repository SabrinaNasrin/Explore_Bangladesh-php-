<html>
<head>

	<title>Festivals</title>
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
                
            <article class="post-304 page type-page status-publish hentry">
                
                <div class="page-content">
                  <h3>Traditional festivals</h3>
                   <h3> <span style="color: #000000;"><b>Pahela Baishakh</b></span></h3>
<p><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/boishakh.jpg"><img class="alignleft wp-image-1025 " src="image/boishakh.jpg" alt="Pahela Baishakh" width="442" height="248"></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b></b>The rest of the world may have their blast of New Year in January 1st. But for us, the advent of Bengali New Year (Pahela Baishakh; April 14 of each year) is the most cheerful, colorful and amazing public holiday that is immensely observed throughout the country. From urban concrete jungle to blissful natural rural landscape, the unbound color of life will definitely mesmerize you. It is presumed that the tradition of Pahela Baishakh started about 600 years back. One of the chief customaries of Pahela Baishakh is clearing up all the dues of present year on the last day of Chaitra (the twelfth month of the Bengali calendar). On the first day of Bengali new year, the landlords or the shop owners offer sweets to their tenants and customers.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">In Dhaka, under the Banyan Tree at Ramna park, the biggest and most colorful celebration of Pahela Baishakh takes place. The programme initiates with Tagore’s famous song titled “Eso he Baishakh eso eso” (Come O Baishakh, come come) performed by the artists of Chhayanat. The students and teachers of Institute of Fine Arts bring out a colorful procession and parade around their campus with sculptures that resemble our age old culture. With wearing traditional attires, hundreds of Bangladeshi people join both events. Every media channel — based Bangladesh — broadcast a live coverage on both of this programme. The newspapers also publishes special news and supplements following this event.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Baishakhi mela (in Bengali mela means fair) is the most amazing part of Pahela Baishakh. Life happens there. And music and color brings life to the Baishakhi fair. Many kind of traditional handicrafts, toys, hand-made cakes, special kinds of food stuff, sweets, potteries, bangles, pitchers and cane products are the main exhibits at these fairs. Although the fairs are held all over our country, but the fair at Dhaka University and Ramna is the most famous. The fairs also provide entertainment, with singers and dancers staging Jatra, Pala gan, Kavigan, Jarigan, Gambhira Gan, Gazir Gan and Alkap Gan. Artistes present folk songs as well as Baul, Marfati, Murshidi and Bhatiali songs.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Dubla Rash Mela</b></span></h3>
<p><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/rashmela.jpeg"><img class="alignright wp-image-1451" src="image/rashmela.jpeg" alt="5" width="443" height="271"></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Dubla Rash Mela is the biggest fair in not only Bagerhat, but also the entire Bangladesh. This has become a grand occasion for many foreign tourists visiting the Sundarbans and people come from India as well. At the centre of the festival are twenty thousand temporary fishermen who are engaged in catching and drying fish on Dubla and nearby islands. In the Bangla month of Agrahayan every year, the fair continues for 5-7 days during full moon time.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Dubla Island is situated on the Bay of Bengal as a part of the Sunderbans forest. Initiated by Hari Bhajan, a disciple of Thakur hari Chand, this fair was first organized in 1923 during the Rash Purnima. To continue his legacy and keep his memory alive, the devotees — especially the fisherman of the Sunderbans — organize this five-day fair. Around 40-50 thousand people join the celebrations every year. Traditional handicrafts, precious wooden items, foods etc are put on sale.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Shakrain Festival</b></span></h3>
<p><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/kites.jpeg"><img class="alignleft wp-image-1452" src="image/kites.jpeg" alt="6742926803_29db89913f_b" width="452" height="288" ></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Celebrated especially in Old Dhaka, Shakrain Festival (also known as Kite Festival) is observed at the end of the Bengali month Poush or January 14 or 15. This is day is also known as Poush Shangkranti. The major attraction of this festival is that people of all ages gather around their rooftop with their kites in the afternoon. They fly their kites high and sometimes this festival often brings the epic and exciting kite fighting. Each participant attempts to snag each other’s kite. At the night, people crack their fireworks in a way to light up the sky of old Dhaka. This gets even more exciting with the flame-eaters skills of fire show.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>


<h3><span style="color: #000000;"><b>Lalon Mela</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/lalon.jpeg"><img class="alignright wp-image-1454" src="image/lalon.jpeg" alt="LalonMela2" width="458" height="305" ></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Lalon Shah is one of most acclaimed and prominent philosopher from Bangladesh. His distinctive tradition of philosophy is still being carried out through thousands of songs and composition which he wrote during his lifetime. His vision on human life is the fundamental base of Baul culture and tradition which is now currently appreciated and studied by major researchers all over the world.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Every year on the first week of April, a fair is organized following Lalon Shah’s birth anniversary by the devotees. The fair is held at the akhra (the place where Lalon lived) situated in Kushtia. The entire place goes through colorful decoration on this occasion. Thousands devotees from both abroad and Bangladesh gather in the Akhra to celebrate this day. With ektara and other musical instrument, the singers of Lalon Academy perform Lalon’s song all through the night during this fair. With the hymn of thousands unique composition, the devotees from all around the world remember the veracity of his philosophical thoughts.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<h3>Religious festivals</h3>
<p><a href="image/eid.jpg"><img class="alignleft wp-image-1469" src="image/eid.jpg" alt="04_53d7a46e5c02c" width="310" height="200"></a>   <a href="image/durga_puja.jpg"><img class="alignleft wp-image-1469" src="image/durga_puja.jpg" alt="04_53d7a46e5c02c" width="310" height="200"></a>   <a href="image/boro_din.jpg"><img class="alignleft wp-image-1469" src="image/boro_din.jpg" alt="04_53d7a46e5c02c" width="310" height="200"></a></p>
<p style="text-align: justify;"><span style="color: #000000;">For the Muslims, the biggest festivals are generally Eid-ul-Fitr and Eid-ul-Azha. Durga Puja is the biggest religious festival for the Hindu community which is observed for ten days annually. Even holi festival brings the color of life in the alleys of old Dhaka. The Buddhist community marked their holiness in Buddha Purnima and for the Christian community it’s the Christmas.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  <h3>Tribal festivals</h3>
   <p style="text-align: justify;"><span style="color: #000000;">A diverse range of Tribal festivals is celebrated and observed by the tribal community in all over Bangladesh. Their exotic music and dance combined with their long cultural heritage is not only eye-catching but also exciting to the viewers.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Baisabi Festival</b></span></h3>
<p><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/baisabi_festival.jpg"><img class="alignleft wp-image-1483 size-full" src="image/baisabi_festival.jpg" alt="baisabi-festival" width="327" height="294"></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Baisabi Festival — commonly celebrated as “Biju” by the Chakma and Tanchyanga, “Shangrai” as Marmas and “Baisuk” or “Baisu” by Tripuras — is the main social festival of the tribal people in the hill districts of Rangamati, Bandarban and Khagrachhari.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Each tribe has their own way of celebrating this festival. For example: Biju is celebrated for three consecutive days by the Chakmas and Tanchyangas on the last two days of Chaitra and the first day of Baishakh. They refrain themselves from killing any living creatures during this festival. The last day of Chaitra is considered as the main festival day. On this special day they cook a mixed curry with five types of vegetables, which they call Pachan.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The Marinas celebrate Shangrai for four days. They all carry the image of Lord Buddha to the river front and set down the image on a floating bed. Afterwards, they complete the bathing of the image in milk or sandalwood water and return with it to set it in the Temple or in their homes. In every locality, the water throwing festival starts with people throwing water at each other so that the previous year’s sorrow will be washed away. The Baisuk festival of the Tripura tribe is celebrated by worshipping the god Shiva and asking for his blessings.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p><span style="color: #000000;"><b>Kothin Chibor Dan Utsab</b></span></p>
<p><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="chibor_dan.jpeg"><img class="alignleft wp-image-1485" src="image/chibor_dan.jpeg" alt="72506_1675463005695_1211067934_1888181_6844345_n" width="332" height="221"></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">‘Kothin Chibor Dan’ is the greatest religious festival of the Buddhist community where ‘viksus’ are given ‘chibor’ or cloth to wear which the Buddhists believe as the best of all gifts. Chibor, the cloth that viksus wear, may be of any six colors: those of a tree’s roots, trunk, bark, dry leaves, fruit or flower.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">This utsab or festival is celebrated with religious fervor at Rangamati Rajban Bihara in the Rangamati hill district. Buddhist community from all three hill districts as well many visitors and tourists from home and abroad gather at Rangamati Rajban Bihara area to participate in the festival. The elaborated schedule of this programme includes Buddha puja, Ful puja, Sibli puja, feeding the monks, astaporiskardan, taking Panchshil and Astashil and praying for world peace.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  <h3>Other festivals</h3>

<h3><span style="color: #000000;"><b>Amor Ekushey Grontho Mela</b><b><br>
</b></span></h3>
<p><a href="image/boi_mela.jpeg"style="float:right;padding-left:15px;padding-bottom:10px;"><img class="alignright wp-image-1642" src="image/boi_mela.jpeg" alt="ekushey" width="395" height="248" ></a></p>
<p style="text-align: justify;"><span style="color: #000000;">To commemorate the sacrifice of martyrs who laid down their lives for the sake of Bengali language on Ekushey February, Amor Ekushey Grontho Mela (Amor Ekushey Book Fair) is held during the month of February. This is the biggest book fair in Bangladesh where countless Bangladeshi people come to fulfill their hunger for knowledge.</span></p>
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