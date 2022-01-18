<html>
<head>

  <title>Land of Pride</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
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
.main-content{font-size: 18px;}



</style>
   
</head>
<body>
  <h1>Explore <br>Bangladesh<br>
    Experience the land of stories</h1>
  <h2>
    <form>
  <input type="text" name="search" placeholder="Search..">
  <input type="submit" name="search" value="Search">
</form>
  </h2>
  <marquee style ="font-size:20px;color:red;font-family:hectica;">Welcome to Explore Bangladesh..&emsp;&#9632;&emsp;
    Exclusive Winter offer is going on and it will valid upto 31st January.&emsp;&#9632;&emsp;
    Famous Shakhrain Festival was celebrated in a very colorful way in Old Dhaka Yesterday.&emsp;&#9632;&emsp;</marquee>
  <ul>
    <li style="width:10%">
      <a class="active" href="home.php">home</a>
    </li>
     <li class="dropdown" style="width:22%">
      <a class="dropbtn">About bangladesh</a>
      <div class="dropdown-content">
              <a href="anthem.php">National Anthem of Bangladesh</a>
              <a href="bangladesh_at_a_glance.php">Bangladesh at a glance</a>
              <a href="history.php">History of Bangladesh</a>
              <a href="geography.php">Geography of bangladesh</a>
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
               <a href="hotel.php">hotels</a>
                <a href="resort.php">resorts</a>
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
                
            <article class="post-297 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p><a href="image/shoheed_minar.jpeg"><img class="alignnone wp-image-1631" src="image/shoheed_minar.jpeg" alt="Shaheed_Minar" width="310" height="220" ></a> <a href="image/sabash_bangladesh1 .jpg"><img class="alignnone wp-image-1635" src="image/sabash_bangladesh1 .jpg" alt="65685377" width="310" height="220"></a> <a href="image/oporajeyo_bangla.jpeg"><img class="alignnone wp-image-1634" src="image/oporajeyo_bangla.jpeg" alt="2028354" width="310" height="220"></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Our monuments stand still making us proud for the sacrifice and heroic achievements of our ancestors. Most of these monuments are planned by the best designers and architects of Bangladesh. Deep beneath the stoned concrete and layer of bricks, there lies the passion and dedication of our hardworking people — people who can go further beyond imagination to make their pride immortal.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">A day trip inside the Dhaka city may suffice for a grand tour for the architectural wonders. To visit places outside of the Dhaka city you would need a proper planning. Better if you plan your trip with including few other places of interest. Here’s a list of places you may not want to miss:</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Jatiyo Smriti Soudho</b></span></h3>
<p><a href="image/sritisoudho.jpeg" style="float:left;padding-right:15px;padding-bottom:15px;"><img class="alignleft wp-image-1287 " src="image/sritisoudho.jpeg" alt="15123591" width="415" height="311" ></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Jatiyo Sriti Shoudho or National Martyrs’ Memorial is the national monument of Bangladesh is the symbol in the memory of the valour and the sacrifice of all those who gave their lives in the Bangladesh Liberation War of 1971, which brought independence and separated Bangladesh from Pakistan. The monument is located in Savar, about 35 km north-west of the capital, Dhaka. It was designed by Syed Mainul Hossain.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">To reach Jatiyo Smriti Soudho, it will take a one or two hours of drive from any part of Dhaka city. You can even adjust this trip with your trip to the pottery village of Dhamrai.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Central Shaheed Minar</b></span></h3>
<p><a href="image/shoheed_minar.jpeg"style="float:right;padding-left:15px;"><img class="alignright wp-image-1631" src="image/shoheed_minar.jpeg" alt="Shaheed_Minar" width="427" height="268" ></a></p>
<p style="text-align: justify;"><span style="color: #000000;">The Shaheed Minar is a national monument in Dhaka, Bangladesh, established to commemorate those killed during the Bengali Language Movement demonstrations of 1952. The Language Movement gained momentum, and after a long struggle, Bengali was given equal status with Urdu. To commemorate the dead, the Shaheed Minar was designed and built by Hamidur Rahman, a Bangladeshi sculptor.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">A taxi or three wheeler ride will take you to this place within hour from any part of Dhaka city.</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span><h3><span style="color: #000000;"><b>Mujibnagar Smriti Saudha</b></span></h3></p>
<p><a href="image/mujibnagar.jpeg" style="float:left;padding-right:15px;"><img class="alignleft wp-image-1632" src="image/mujibnagar.jpeg" alt="Mujibnagar_Smriti_Saudha" width="416" height="312"></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Mujib Nagar Complex, Meherpur Sadar, Meherpur, Khulna is located in Bangladesh. At the initial stage of the War of Liberation, the government in exile of the People’s Republic of Bangladesh took oath at village Baidyanathtala in Meherpur district on 17 April 1971. Baidyanatala was renamed as mujibnagar after the name of Bangabandhu Sheikh Mujibur Rahman. Later a memorial monument was constructed to commemorate the place of oath. Immediately after the War of Liberation the Government of Bangladesh took initiative to make Mujibnagar memorable. On 31 August 1973 the government gave an instruction to construct a memorial at Mujibnagar. During the observance of Mujibnagar Day on 17 April 1974, Syed Nazrul Islam, the acting President of the Bangladesh Government in exile during the liberation war, formally inaugurated the project.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Martyred Intellectuals Memorial</b></span></h3>
<p><a href="image/buddhijibi.jpg" style="float:right;padding-left:15px;"><img class="alignright wp-image-1633" src="image/buddhijibi.jpg" alt="Martyr's_intellectual_monument_at_Rayerbazar" width="416" height="277" ></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Martyred Intellectuals Memorial is a memorial built in memory of the martyred intellectuals of Bangladesh Liberation War. The memorial, located at Rayerbazar, Mohammadpur Thana in Dhaka, was designed by architect Farid U Ahmed and Jami Al Shafi. The initial proposal for a memorial at Rayer Bazar was brought forward by Projonmo 71 (organization of the children of the martyrs of liberation war), who also laid a temporary foundation stone in 1991. During the entire duration of Bangladesh Liberation War of 1971, a large number of teachers, doctors, engineers, poets and writers were systematically massacred by Pakistan Army and their local collaborators, most notably the alleged Islamist militia groups Al-Badr and Al-Shams. The largest number of assassinations took place on December 14, 1971, only two days before the surrender of Pakistan army to the joint force of Indian army and Mukti bahini.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">A taxi or three wheeler ride will take you to this place within hour from any part of Dhaka city.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Aparajeyo Bangla</b></span></h3>
<p><a href="image/oporajeyo_bangla.jpeg" style="float:left;padding-right:15px;"><img class="alignleft wp-image-1634" src="image/oporajeyo_bangla.jpeg" alt="2028354" width="414" height="310" ></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Aparajeyo Bangla (Bengali: ???????? ?????) is one of the most well known sculptures dedicated to the Bangladesh Liberation War in 1971. It is located in the campus of Dhaka University, just in front to the Arts Building. In Bengali, the phrase means “Unvanquished Bengal”. The sculpture work was started at the end of 1973 based on sculptor Abdullah Khaled’s design and superintendence of the DUCSU Authority. The Dainik Bangla news reporter Shaleah Chowdhury came to visit the sculpture and wrote an article about it. The article illuminated the people of Bangladesh, so the sculptor is known all over the world. Before Aparajeyo Bangla there was another 3 feet long sculpture, then Dackshu Authority broke down the sculpture and started to work on Aparajeyo Bangla project. In August 1975 Sheikh Mujibur Rahman was murdered so the Dackshu Authority stopped the Aparajeyo Bangla project. In January 1979 the Dackshu Authority again started the project and in December 1979 the project work was done.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><h3><b>Sangsaptak</b></span></h3></p>
<p style="text-align: justify;"><span style="color: #000000;">The Sangsaptak is a sculpture at Jahangirnagar University commissioned to commemorate the martyrs of the Bangladesh Liberation War.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Shabash Bangladesh</b></span></h3>
<p><a href="image/sabash_bangladesh1 .jpg"style="float:right;padding-left:15px;"><img class="alignright wp-image-1635" src="image/sabash_bangladesh1 .jpg" alt="65685377" width="383" height="287" ></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Shabash Bangladesh (Bravo Bangladesh) is one of the most renowned[citation needed] sculptures in Bangladesh. It is located at Rajshahi University premises. Shabash Bangladesh is another state of the art sculpture created to pay tribute to those killed in the Liberation War of Bangladesh. Nitun Kundu is the sculptor of Shabash Bangladesh.</span></p>
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