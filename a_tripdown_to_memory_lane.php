<html>
<head>

  <title>A Trip down to Memory Lane</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  .main-content{
    font-size: 18px;
    padding-top: 15px;
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
.alignleft{float:left;
padding-right: 15px;
padding-bottom: 10px;}
.alignright {float: right;
  padding-top: 0;


  
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
                
            <article class="post-299 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p><span style="color: #000000;">Our land is our pride. Our culture is our pride. Our rich archaeological heritage is our pride. Our museum preserves the pride that has been founded hundreds years ago. Here’s the list of museum where you can wonder our glorious and historic past:</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<div class="alignleft">
<p><span style="color: #000000;"><b>Bangladesh National Museum</b></span></p>
<p><a href="image/museum.jpeg"><img class="alignleft wp-image-1275" src="image/museum.jpeg" alt="59231255" width="468" height="323"></a></p>
<p><span style="color: #000000;">The Bangladesh National Museum, originally established on 20 March 1913, albeit under another name, and formally inaugurated on 7 August 1913, was accorded the status of the national museum of Bangladesh on 17 November 1983.</span></p>
<p><span style="color: #000000;">Address: Shahbagh Rd, Dhaka</span></p>
<p><span style="color: #000000;">Hours: Open today • 10:30 am-5:30 pm</span></p>
<p><span style="color: #000000;">Phone: 02-9674796</span></p>
</div>

<div class="alignright">

  <p>&nbsp</p>
  <p><a href="image/lib_war.jpeg"><img class="alignright wp-image-1579" src="image/lib_war.jpeg" alt="Liberation_War_Museum" width="468" height="323" ></a></p>
<p><span style="color: #000000;"><b>Liberation War Museum</b></span></p>

<p><span style="color: #000000;">The Liberation War Museum is a museum in Segunbagicha, Dhaka, the capital of Bangladesh that commemorates the Bangladesh Liberation War, which led to the independence of Bangladesh from Pakistan.</span></p>
<p><span style="color: #000000;">Address: Shegunbagicha, Dhaka</span></p>
<p><span style="color: #000000;">Hours: Open today • 9:00 am - 5:00 pm</span></p>
<p><span style="color: #000000;">Phone: 02-9559091</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
</div><p>&nbsp;</p><p>&nbsp;</p>
<p><span style="color: #000000;"><b>Varendra Research Museum</b></span></p>
<p><span style="color: #000000;">Varendra Museum is a museum, research center and popular visitor attraction located at the heart of Rajshahi town and maintained by Rajshahi University in Bangladesh. It is considered the oldest museum in Bangladesh.</span></p>
<p><span style="color: #000000;">Address: Shaheb Bazar, Rajshahi</span></p>

<div class="alignleft">
<p><span style="color: #000000;"><b>Ahsan Manzil</b></span></p>
<p><a href="image/ahsan.jpeg"><img class="alignleft wp-image-1258" src="image/ahsan.jpeg" alt="Image-of-Ahsan-Manzil---1" width="466" height="323" ></a></p>
<p><span style="color: #000000;">Ahsan Manzil was the official residential palace and seat of the Dhaka Nawab Family. This magnificent building is situated at Kumartoli along the banks of the Buriganga River in Dhaka, Bangladesh.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p></div>


<p><span style="color: #000000;"><b>Tajhat Palace</b></span></p>
<p><span style="color: #000000;">Tajhat Palace, Tajhat Rajbari, is a historic palace of Bangladesh, located in Tajhat, Rangpur. This palace now has been turned into a museum. Tajhat Palace is situated three km. south-east of the city of Rangpur, on the outskirts of town. Address: Tajhat Rd, Rangpur City.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Zainul Abedin Museum</b></span></p>
<p><span style="color: #000000;">Zainul Abedin Sangrahashala is an art museum in Mymensingh, Bangladesh. Established in 1975, it contains the collections of the artist Shilpacharya Zainul Abedin. Address: Mymensingh</span></p><p>&nbsp;</p>
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