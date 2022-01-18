
<html>
<head>

  <title>Photo Gallery</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  * {
    box-sizing: border-box;
}

.menu {
    width: 33.33%;
    
    
    float: left;
    padding: 15px;
}
.menu1 {
    width: 33.33%;
    

    float: left;
    padding: 15px;
    
}
.menu2 {
    width: 33.33%;

  
    float: left;
    padding: 15px;
    
}
 body{
background-color: #96bf65;
margin-right: 14%;
margin-left:14%;
width: 72%;
}

h1{
        float:left;
    margin-top: 0


}
h2{
    margin-left:75%;
    margin-top: 40px;
    float: bottom;

    
}

ul {

    list-style-type: none;
    margin-bottom: 20px;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #457725;

    width:100%;
    box-shadow: 0 8px 16px 0 #465025;
    font-size: 18px;
    cursor: pointer;

}

li {
    float: left;

    
}

li a,.dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover, .dropdown:hover .dropbtn{
    background-color: #ff0900;
    color: white;
    

    
}
li .dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #96bf65;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
  background-color: #457725;}

.dropdown:hover .dropdown-content {
    display: block;
}

.mySlides {display:none;
height: 400px;

  }





.img img {
    width: 300px;
    height: 200px;
    margin:5px;
    margin-bottom: 8px;
    border: 1px solid #e7e7e7;
    float:left;
    margin-left: 1.4%;

}
.clearfix{
    clear: both;
}



.footer{
     border: 1px solid #e7e7e7;
     background-color: #457725;
    
    font-size: 18px;
    color: white;
    line-height: 22px;
    padding: 10px;
    box-shadow: 0 8px 16px 0 #465025;
    margin-bottom: 30px;
    margin-top: 20px;
    text-align: center;



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
  <div class="menu">
    <p><b>  Foods  </b></p>
<img src="image/biriyani.jpeg" name="slide1"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
  


<div class="menu1">
    <p><b>Archeology</b></p>
    <img src="image/choto_sona_mosque.jpg" name="slide2"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">
   
  </div>
  

<div class="menu2">
    <p><b>Arts & Crafts</b></p>
<img src="image/bangles.jpg" name="slide3" style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">
</div>
<div class="menu2">
    <p><b>21st February</b></p>
     <img  src="image/21st_february.jpg" name="slide4" style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">
</div>
<div class="menu2">
    <p><b> Pohela Boishakh  </b></p>
<img src="image/boishakh.jpg" name="slide5"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b>  Religious Festival  </b></p>
<img src="image/bandarban1.jpg" name="slide6"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>


<div class="menu2">
    <p><b>  Bandarban  </b></p>
<img src="image/bandarban1.jpg" name="slide7"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b>  rangamati </b></p>
<img src="image/rangamati1.jpg" name="slide8"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b>  Khagrachori  </b></p>
<img src="image/khagrachori1.jpg" name="slide9"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b>  Cox's Bazar  </b></p>
<img src="image/beach1.jpeg" name="slide10"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b>  Kuakata  </b></p>
<img src="image/kuakata.jpeg" name="slide11"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b>  Saint Martin  </b></p>
<img src="image/st_martin.jpg" name="slide12"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b>  Sundarban </b></p>
<img src="image/forest1.jpg" name="slide13"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b>  Tiger  </b></p>
<img src="image/tiger.png" name="slide14"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b>  Sylhet  </b></p>
<img src="image/tea.jpeg" name="slide15"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b>  Rain  </b></p>
<img src="image/st_martin.jpg" name="slide16"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b> River </b></p>
<img src="image/river.jpeg" name="slide17"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>
<div class="menu2">
    <p><b>  Nature  </b></p>
<img src="image/street .png" name="slide18"style="width:330px;height:220px;margin-left:-20px;padding:20px;padding-left:-15px;">

</div>



<script type=text/javascript>
var SlideList1 = ['image/biriyani.jpeg', 'image/fucka.jpg', 'image/jilapi.jpg', 'image/nokshi_pitha1.jpg', 'image/fish.jpg', 'image/nokshi_pitha2.jpg'];
var SlideShow1 = new SlideShow(SlideList1, 'slide1', 3000, "SlideShow1");

var SlideList2 = ['image/choto_sona_mosque.jpg', 'image/mahasthan.jpeg', 'image/mainamati.jpeg', 'image/paharpur.jpeg', 'image/puthia.jpeg', 'image/shat_gombuj.jpeg'];
var SlideShow2 = new SlideShow(SlideList2, 'slide2', 3000, "SlideShow2");
var SlideList3 = ['image/bangles.jpg', 'image/handicraft.jpg', 'image/murti.jpeg', 'image/nokshi_katha.jpeg', 'image/nokshi1.jpg', 'image/tribal_art.jpg'];
var SlideShow3 = new SlideShow(SlideList3, 'slide3', 3000, "SlideShow3");
var SlideList4 = ['image/21st_february.jpg', 'image/language_movement.jpg', 'image/shoeed_minar.jpg', 'image/shoheed_minar1.jpg', 'image/shoeed_minar2.jpg', 'image/shoheed_minar3.jpg'];

var SlideShow4 = new SlideShow(SlideList4, 'slide4', 3000, "SlideShow4");
var SlideList5 = ['image/boishakh.jpg', 'image/boishakh.jpeg', 'image/boishakh1.jpg', 'image/girl1.jpg', 'image/girl.jpg', 'image/craft.jpg'];
var SlideShow5 = new SlideShow(SlideList5, 'slide5', 3000, "SlideShow5");

var SlideList6 = ['image/eid.jpeg', 'image/eid1.jpg', 'image/durga_puja.jpg', 'image/puja.jpg', 'image/boro_din.jpg', 'image/buddha_purnima.jpeg'];
var SlideShow6 = new SlideShow(SlideList6, 'slide6', 3000, "SlideShow6");

var SlideList7 = ['image/bandarban1.jpg', 'image/bandarban3.jpg', 'image/bandarban4.jpg','image/bandarban5.jpeg','image/bandarban13.jpg','image/bandarban16.jpeg',];
var SlideShow7 = new SlideShow(SlideList7, 'slide7', 3000, "SlideShow7");
var SlideList8 = ['image/rangamati1.jpg', 'image/rangamati2.jpeg', 'image/rangamati3.jpeg','image/rangamati4.jpg','image/rangamati5.jpeg','image/rangamati6.jpg'];
var SlideShow8 = new SlideShow(SlideList8, 'slide8', 3000, "SlideShow8");
var SlideList9 = ['image/khagrachori1.jpg', 'image/khagrachori2.jpeg', 'image/khagrachori3.jpg','image/khagrachori4.jpg','image/khagrachori5.jpg','image/khagrachori6.jpg'];
var SlideShow9 = new SlideShow(SlideList9, 'slide9', 3000, "SlideShow9");

var SlideList10 = ['image/beach1.jpeg', 'image/beach2.jpeg', 'image/beach3.jpeg','image/cox1.jpg','image/cox2.jpeg','image/cox3.jpeg'];
var SlideShow10 = new SlideShow(SlideList10, 'slide10', 3000, "SlideShow10");

var SlideList11 = ['image/kuakata.jpeg', 'image/kuakata1.jpg', 'image/kuakata2.jpg','image/kuakata3.jpg','image/kuakata4.jpg','image/kuakata5.jpg'];
var SlideShow11 = new SlideShow(SlideList11, 'slide11', 3000, "SlideShow11");

var SlideList12= ['image/st_martin.jpg', 'image/st_martin1.jpg', 'image/st_martin2.jpg','image/st_martin3.jpg','image/st_martin4.jpg','image/st_martin5.jpg'];
var SlideShow12 = new SlideShow(SlideList12, 'slide12', 3000, "SlideShow12");

var SlideList13 = ['image/forest1.jpg', 'image/forest2.jpeg', 'image/forest3.jpg','image/forest4.jpg','image/forest5.jpeg','image/forest6.jpg'];
var SlideShow13 = new SlideShow(SlideList13, 'slide13', 3000, "SlideShow13");

var SlideList14 = ['image/tiger.png', 'image/tiger1.jpg', 'image/tiger2.jpg','image/tiger3.jpg','image/tiger4.jpg','image/tiger5.jpg'];
var SlideShow14 = new SlideShow(SlideList14, 'slide14', 3000, "SlideShow14");

var SlideList15 = ['image/tea.jpeg', 'image/tea1.jpeg', 'image/tea2.jpeg','image/tea3.jpeg','image/tea4.jpeg','image/tea6.jpeg'];
var SlideShow15 = new SlideShow(SlideList15, 'slide15', 3000, "SlideShow15");

var SlideList16 = ['image/rain.jpg', 'image/rain1.jpg', 'image/rain2.jpg','image/rain3.jpg','image/rain5.jpg','image/rain6.jpg'];
var SlideShow16 = new SlideShow(SlideList16, 'slide16', 3000, "SlideShow16");


var SlideList17 = ['image/river.jpeg', 'image/river1.jpg', 'image/river2.jpg','image/river3.jpg','image/river4.jpg','image/river5.jpg'];
var SlideShow17 = new SlideShow(SlideList17, 'slide17', 3000, "SlideShow17");


var SlideList18 = ['image/street .png', 'image/scenery.png', 'image/ramna.png','image/boy.png','image/nature.jpg','image/water_lily.png'];
var SlideShow18 = new SlideShow(SlideList18, 'slide18', 3000, "SlideShow18");


function SlideShow(slideList, image, speed, name)          
{
  this.slideList = slideList;
  this.image = image;
  this.speed = speed;
  this.name = name;
  this.current = 0;
  this.timer = 0;
}
function switchImage(imgName, imgSrc) 
{
  if (document.images)
  {
    if (imgSrc != "none")
    {
      document.images[imgName].src = imgSrc;
    }
  }
}
SlideShow.prototype.play = SlideShow_play;  
function SlideShow_play()       
{
  with(this)
  {
    if(current++ == slideList.length-1) current = 0;
    switchImage(image, slideList[current]);
    clearTimeout(timer);
    timer = setTimeout(name+'.play()', speed);
  }
}
window.onLoad=SlideShow1.play();SlideShow2.play();SlideShow3.play();SlideShow4.play();SlideShow5.play();SlideShow6.play();SlideShow7.play();SlideShow8.play();SlideShow9.play();SlideShow10.play();SlideShow11.play();SlideShow12.play();SlideShow13.play();SlideShow14.play();SlideShow15.play();SlideShow16.play();SlideShow17.play();SlideShow18.play();
</script>
 
<div class="clearfix"></div>
<footer class="footer">&#169;2016. All rights reserved to<br>
   Sabrina Nasrin<br>
   Department of CSE


  </footer>







</body>
</html>