<html>
<head>

	<title>Video Gallery</title>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  .main-content
  {
    text-align: center;
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
                
            <article class="post-558 page type-page status-publish hentry">
                
                <div class="page-content">
                    <h3>Visit Bangladesh - Life Happens Here</h3>
<p><iframe width="560" height="315" src="https://www.youtube.com/embed/R4WhcPPv7X4" frameborder="0" allowfullscreen=""></iframe></p>

<h3>Shadhinota Tumi</h3>
<p><iframe src="https://www.youtube.com/embed/JBj4M7ZjSDs" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>

<h3>Beautiful Bangladesh(Land Of Rivers)TVC</h3>
<p><iframe src="https://www.youtube.com/embed/hIo3lkALDlg" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Beautiful Bangladesh-Land of Stories TVC</h3>
<p><iframe src="https://www.youtube.com/embed/O9FbbfY5k8A" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Beautiful Bangladesh - School of Life</h3>
<p><iframe src="https://www.youtube.com/embed/zID5Wc7MBVg" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3><span style="font-size: 1.17em;">Beautiful Bangladesh</span></h3>
<p><iframe src="https://www.youtube.com/embed/tgLJ1A4GN9w" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh Village Life</h3>
<p><iframe src="https://www.youtube.com/embed/3i-VdJHFbqU" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh The Saint Martin&#39;s Island</h3>
<p><iframe src="https://www.youtube.com/embed/98jeS5O3ig8" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>

<h3>Visit Bangladesh Now</h3>
<p><iframe src="https://www.youtube.com/embed/zfzLvnXh3Sk" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh Archaeology</h3>
<p><iframe src="https://www.youtube.com/embed/AZ4Hi3IHul4" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh Sea Beach</h3>
<p><iframe src="https://www.youtube.com/embed/2Pxmk85LqHU" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh The Festivals</h3>
<p><iframe src="https://www.youtube.com/embed/mJdXnbw5o0c" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Colors, festival</h3>
<p><iframe src="https://www.youtube.com/embed/P7DeOK_lpuA" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Tourism and Safety</h3>
<p><iframe src="https://www.youtube.com/embed/XoUpPyi6dsE" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Temples of bd</h3>
<p><iframe src="https://www.youtube.com/embed/xofg18FJXPE" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh Capital Dhaka</h3>
<p><iframe src="https://www.youtube.com/embed/AKLKC7RvB_o" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Ekushe Grontho Mela</h3>
<p><iframe src="https://www.youtube.com/embed/c7Mg69eChcA" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh The Tea Gardens</h3>
<p><iframe src="https://www.youtube.com/embed/szfyGW9d94E" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>

<h3>Visit Bangladesh The rivers</h3>
<p><iframe src="https://www.youtube.com/embed/GPzQ9b1DwQw" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh The Museums</h3>
<p><iframe src="https://www.youtube.com/embed/_xqHbCb3zvg" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh The Hill Tracks</h3>
<p><iframe src="https://www.youtube.com/embed/GA6wH7gSZyw" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh The Haors</h3>
<p><iframe src="https://www.youtube.com/embed/Qq1gftbMGuo" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh The forests</h3>
<p><iframe src="https://www.youtube.com/embed/iVj6UVgPl9Q" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh Teknaf</h3>
<p><iframe src="https://www.youtube.com/embed/0uI0eNGIJ64" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh Tourists Destinations</h3>
<p><iframe src="https://www.youtube.com/embed/3ekjy5tTwxc" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Bangladesh Folk Festival1(1)</h3>
<p><iframe src="https://www.youtube.com/embed/2v47GNFO8TU" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Bangladesh Folk Festival1(2)</h3>
<p><iframe src="https://www.youtube.com/embed/nIOlB4Tp5z4" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Bangladesh Folk Festival1(3)</h3>
<p><iframe src="https://www.youtube.com/embed/i4HlK9wa5T8" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Bangladesh Folk Festival1(4)</h3>
<p><iframe src="https://www.youtube.com/embed/s1jnx_XX1Y4" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Bangladesh Folk Festival1(5)</h3>
<p><iframe src="https://www.youtube.com/embed/5L5ckyz-_f4" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh Bandarban Hill Tract</h3>
<p><iframe src="https://www.youtube.com/embed/LUh71dBXvFI" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Bangladesh Rangamati Hill Tract</h3>
<p><iframe src="https://www.youtube.com/embed/SXtYUF_9FPU" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>SAARC Trade Fair &amp; Tourism</h3>
<p><iframe src="https://www.youtube.com/embed/WCBskQg40-c" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<h3>Visit Cox&#39;s Bazar, Bandarban,Mainamati,Foys Lake</h3>
<p><iframe src="https://www.youtube.com/embed/eObprQBTWK4" width="560" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
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