<html>
<head>

	<title>Experience Village Life</title>
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
                
            <article class="post-75 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p style="text-align: justify;"><span style="color: #000000;"><a href="image/village1.jpeg"><img class="alignnone wp-image-866" src="image/village1.jpeg" alt="Goru-Gari-Ride-1-sm" width="310" height="200"></a>   <a href="image/village2.jpeg"><img class="alignnone wp-image-867" src="image/village2.jpeg" alt="Irfan-and-Bessema-Plant-the-Organic-Farm" width="310" height="200" ></a>   <a href="image/village3.jpg"><img class="alignnone wp-image-872" src="image/village3.jpg" alt="Paola-and-Silvia-on-Vangari-4-sm" width="310" height="200"></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Life is so good when you live it in Bangladesh. The people and the nature will help you to get the most out of it. Happiness, for us, needs no reason. We are always happy with knowing who we are whether our capability is satisfactory to us or not. We know how to celebrate the life we are give. We know how to get the most out of our life.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There are many kinds of lifestyle of the people can be seen in Bangladesh — urban, rural and Tribal. Amidst the concrete jungle, the urban life follows a different direction than the rural life. The rural life has a much more strong relation with the nature. And, far from the maddening crowd, there are many tribal lifestyles can be noticed which are unique and vibrant in their own characteristics.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">If you want to seek happiness with no condition applied, go visit our rural areas. The way of life has always been primitive and there exist no complications. The people in our village areas live by the nature. They respect the nature. In return, they are taken cared by the nature. This is most divine transaction in the entire world. This is why you can even find the most primitive lifestyle here. People uses farming tools just like their ancestors like. They prefer manual labor and natural resources instead of heavy machinery. This is why you will be amazed when you see any farmers ploughing their beloved soil with the help of macho bulls. Or even you will see the village woman making foods in ovens fueled with chopped up woods.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The village kids use the most of their life by playing various footballs, cricket, kabadi and many traditional sports. You can join them. While playing in the rain, the splash of mud will remind you how close you are being with the nature. Most of them are skillful in climbing trees. Ask them, and you will be blessed with freshly picked juicy fruits instantly. You can jump on the river or pond from the peak of a tree. You can swim through the river under the hot sun. The clean and cold water will relieve you from the boredom of life. On a calm evening at the yard of traditional village house, you can stare the clean sky where the moon and stars glaze with their fullest integrity. And that moment, you will get know true meaning of life.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The best thing you will experience and will definitely spice up of you entire vacation is the hospitality of Bangladeshi people. We treat our guest just like anyone of our family. Our smile gives them a hope to live on their wonder life and come back in this land of wonders again and again.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">These are definitely not all. There are plenty of other things to do and see in the rural areas of Bangladesh. You will never get bored. And you will never fail to understand the true meaning of life. This is an experience of lifetime. Even if you return to your country, the memory will keep your soul alive and fresh.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Just come visit our rural lands. We treat everyone like family. If necessary contact with tour operators. With a perfect and convenient planning, they will take care of your tour flawlessly. There are so may tour plans available which will certainly give you a detailed experience of rural life.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><em>All of these photos are taken from the <a style="color: #000000;" href="http://www.panigram.com/" target="_blank">Panigram Resort</a></em></span></p>
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