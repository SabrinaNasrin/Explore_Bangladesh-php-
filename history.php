<html>
<head>

  <title>History of Bangladesh</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  .cont1 img{
      float:right;
      width:320px;
      height:200px;
      margin: auto;
      padding-left: 15px;
  }
  .cont1{
    padding-bottom: 50px;
  }
.cont2 img{
      float:left;
      width:320px;
      height:200px;
      margin: auto;
      padding-right:15px; 

  }
  .cont2{
    padding-top: 50px;
    padding-bottom: 40px;
  }

  .main-content{
    font-size: 18px;
  }
  .size-medium{
    margin-left: 220px
    
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
                
            <article class="post-18 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p><span style="color: #000000;">&nbsp;</span></p>
<p class="cont1" style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;" href="image/british_india.jpg" target="_blank"><img class="size-medium1" src="image/british_india.jpg" alt="Brit_IndianEmpireReligions3" width="320" height="220"></a>After the demise of British Empire in 1947, Bengal was partitioned as a province of West Pakistan with being renamed as East Pakistan. Dhaka was declared as its capital. Despite of adequate resources and demographic weight of East Pakistan, the entire Pakistan’s government and military was largely dominated by the upper classes from the west.</span></p>
<p>
  <span style="color: #000000;">&nbsp;</span>
</p>
<p class="cont2" style="text-align: justify;">
  <span style="color: #000000;">
    <a  style="color: #000000;" href="image/language.jpeg" target="_blank">
      <img class="size-medium wp-image-239 alignleft" src="image/language.jpeg" alt="2_l9hpk" width="320" height="220"></a>The government of Pakistan - dominated largely by the west - declared Urdu as the only official language of the entire Pakistan which triggered a massive dissatisfaction among the people of the east. On 21 February, 1952, Bengali students in East Pakistan rose up for the mother tongue and protested against this decision. As police open fired to their possession, several students died for defending their language. The glorified sacrifice of these martyrs is now observed not only in Bangladesh but also all over the world as International Mother Language Day.
    </span>
  </p>
<p>
  <span style="color: #000000;">&nbsp;</span></p>
   <p class="cont1" style="text-align: justify;">
     <span style="color: #000000;">
      <a style="color: #000000;" href="image/mujib.jpeg" target="_blank">
       <img class="size-medium wp-image-242 alignright" src="image/mujib.jpeg" alt="banga-bondu-shik-mujb-rahaman" width="290" height="180"></a>Displeasure on the west in the issues of economic and cultural domination resulted into the emergence of Awami League as the strongest political voice of East Pakistan. In his historic speech before hundred thousands of people at the Suhrawardy Udyan on March 7, 1971, the president of Awami League and the father of the nation Bangabandhu Sheikh Mujibur Rahman, called upon all the people of East Pakistan to launch a decisive struggle against the Pakistani occupation and take a all-out preparation for the War of Liberation.
</span>
</p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p class="cont2"style="text-align: justify;">
  <span style="color: #000000;">
    <a style="color: #000000;" href="image/genocide.jpg" target="_blank">
      <img class="size-medium wp-image-244 alignleft" src="image/genocide.jpg" alt="genocide2" width="300" height="163"></a>After a lot political unrest and provincial discrimination, Bangladesh Liberation War (Bengali: <i>Muktijuddho</i>) was commenced after Bangabandhu Sheikh Mujibur Rahman declared Bangladesh’s independence just before getting arrested in the early hours of 26 March 1971 by Pakistani military. President Yahya Khan and his military officials launched extremely bloody measurement called Operation Searchlight on the innocent civilians of Bangladesh.
    </span>
</p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p class="cont1"style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;" href="image/government.jpeg" target="_blank"><img class="size-medium wp-image-247 alignright" src="image/government.jpeg" alt="Ministry_of_Mujibnagar_Government_in_17-April-1971_on_Mujibnagar_Mango_Grove" width="184" height="94"></a>The exile government, formed by Awami League leaders, formally took oath at Meherpur, in the Kustia district of Bangladesh, on 17 April 1971, with Tajuddin Ahmad as the first Prime Minister and Syed Nazrul Islam as the Acting President.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p class="cont2"style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;" href="image/war.jpeg" target="_blank"><img class="size-medium wp-image-250 alignleft" src="image/war.jpeg" alt="p01" width="193" height="193"></a>A resistance force known as the Mukti Bahini (Freedom Fighter) was formed from the Bangladesh Forces (consisting of Bengali regular forces) in alliance with civilian fighters. Led by General M. A. G. Osmani, the Bangladesh Forces were organized into eleven sectors and, as part of Mukti Bahini, conducted a massive guerrilla war against the Pakistan Forces. During this war, the whole world witnessed the 1971 Bangladesh genocide, in which the Pakistan Army and its allied religious militias carried out a wide-scale elimination of Bengali civilians, intellectuals, youth, students, politicians, activists and religious minorities.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p class="cont1"style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;" href="image/victory.jpeg" target="_blank"><img class="size-medium wp-image-252 alignleft" src="image/victory.jpeg" alt="147" width="300" height="215"></a>Amidst the sacrifice of countless Bangladeshi souls, Pakistani Army finally surrendered to the Bangladesh-India Allied Forces on 16 December 1971. The nine month long Bangladesh’s Liberation War was won on that day. And Bangladesh, with a lot of promise and hopes, starts its glorious journey.</span></p>
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