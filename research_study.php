<html>
<head>

	<title>Research & Study</title>
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
.main-content{
  font-size: 18px;
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
                
            <article class="post-215 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p style="text-align: justify;"><span style="color: #000000;">Researching more fun when do it during traveling all around Bangladesh. Bangladesh people and Bangladeshi culture has been a great source for the researchers for a long time. Our unique anthropological characteristics will be a great resource for your study. If you need further assistance, our academic and government institutes have vast documented resources and adequate manpower. Each year hundreds of researcher comes to Bangladesh to study our people, culture, geography and our economic sectors.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">During your research, the bonus you will get is the amazing experience of true happiness. When you are done with your study and probably leave for your own country, you will certainly be loaded with countless stories of our land and people.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Here’s the list of academic and research institute that can help with your study and research:</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Public Universities in Bangladesh</b></span></p>
<?php
  

  $host='localhost';
  $user='root';
  $pass='';
  $db='explore_bangladesh';

  $con=mysqli_connect($host,$user,$pass,$db);
  mysqli_query($con,'SET CHARACTER SET utf8');
  mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
  if($con)
  {
    echo("");
  }
  else
  {
    echo("Not connected");
  }



  $query = "SELECT * FROM `research & study` WHERE 1";
  $result = mysqli_query($con,$query);


  while($row=mysqli_fetch_array($result)){ 
 
  echo("$row[name6]<br>$row[address4]<br>");   
  
  }
  
  
?>
<p><span style="color: #000000;"><b>Private Universities in Bangladesh</b></span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">1 Ahsanullah University of Science and Technology 8870422, 8870416 Dhaka</span></p>
<p><span style="color: #000000;">2 American International University – Bangladesh 9897387, 9894229, 8811749 Ext. 100, 200 Dhaka</span></p>
<p><span style="color: #000000;">3 ASA University Bangladesh 02-8130238, 8122555, 01670995533 Dhaka</span></p>
<p><span style="color: #000000;">4 Asian University of Bangladesh 8916116, 8912366, 8920709 Dhaka</span></p>
<p><span style="color: #000000;">5 Atish Dipankar University of Science and Technology 02-9897700, 02-9891904 Dhaka</span></p>
<p><span style="color: #000000;">6 Bangladesh Islami University 02-7552495-6 Dhaka</span></p>
<p><span style="color: #000000;">7 Bangladesh University 9136061, 8117951, 01744291258 Dhaka</span></p>
<p><span style="color: #000000;">8 Bangladesh University of Business and Technology 8057581-2, 9015397, 01190658100 Dhaka</span></p>
<p><span style="color: #000000;">9 Bangladesh University of Health Sciences 02-9010932, 01791-042087 Dhaka</span></p>
<p><span style="color: #000000;">10 BGC Trust University Bangladesh 031-656841, 031-657979 Chittagong</span></p>
<p><span style="color: #000000;">11 BGMEA University of Fashion &amp; Technology 02-8919986, 8950535 Dhaka</span></p>
<p><span style="color: #000000;">12 BRAC University 02-8824051-4, 02-9853948 Dhaka</span></p>
<p><span style="color: #000000;">13 Britannia University 081-73412, 73422 Comilla</span></p>
<p><span style="color: #000000;">14 Central Women’s University 02-9591551, 02-9567499, 01778-490525 Dhaka</span></p>
<p><span style="color: #000000;">15 Chittagong Independent University 031-611262, 622946, 636484 Chittagong</span></p>
<p><span style="color: #000000;">16 City University 9893983, 9861543, 01819-813111 Dhaka</span></p>
<p><span style="color: #000000;">17 Cox’s Bazar International University 0341-52510, 01762-686274 Cox’s Bazar</span></p>
<p><span style="color: #000000;">18 Daffodil International University 9138234-5, 9116774, 01713493050 Dhaka</span></p>
<p><span style="color: #000000;">19 Darul Ihsan University 9127841, 9142512, 01715514266 Dhaka</span></p>
<p><span style="color: #000000;">20 Dhaka International University 8858734-5, 9137568, 01732-764871 Dhaka</span></p>
<p><span style="color: #000000;">21 East Delta University 031-2514441-3, 01714-102062 Chittagong</span></p>
<p><span style="color: #000000;">22 East West University 09666775577 Dhaka</span></p>
<p><span style="color: #000000;">23 Eastern University 02-9676031-5, 01741300002 Dhaka</span></p>
<p><span style="color: #000000;">24 European University of Bangladesh 02 8054617, 653061, 01685333111 Dhaka</span></p>
<p><span style="color: #000000;">25 Exim Bank Agricultural University, Bangladesh 02-9889484, 01944-920076, 01712-014988 Nawabganj 26 Fareast International University 02-8154832 Dhaka</span></p>
<p><span style="color: #000000;">27 Feni University 0331-62194 Feni</span></p>
<p><span style="color: #000000;">28 First Capital University of Bangladesh 0761-62033, 01718-374351 Chuadanga</span></p>
<p><span style="color: #000000;">29 German University Bangladesh 02-8870694, 02-8870694 Gazipur</span></p>
<p><span style="color: #000000;">30 Global University Bangladesh Jhalokati</span></p>
<p><span style="color: #000000;">31 Gono Bishwabidyalay 02-7791884, 7792224, 7791838 Dhaka</span></p>
<p><span style="color: #000000;">32 Green University of Bangladesh 02-9014725, 8031031, 8031032, 01775163885 Dhaka</span></p>
<p><span style="color: #000000;">33 Hamdard University Bangladesh 9665965-66, 01718-564049 Narayanganj</span></p>
<p><span style="color: #000000;">34 IBAIS University 02-9124793, 9124849, 01733718377 Dhaka</span></p>
<p><span style="color: #000000;">35 Independent University, Bangladesh 88-02-8401645-53, 8402065-76 Dhaka</span></p>
<p><span style="color: #000000;">36 International Islamic University Chittagong 031-625230, 02-9670220, 8629947, 01915453282 Chittagong</span></p>
<p><span style="color: #000000;">37 International University of Business Agricultural and Technology 8963523-27, 01714-014933, 8923469-70 Dhaka</span></p>
<p><span style="color: #000000;">38 Ishakha International University 01193199468, 01193198745 Kishoreganj</span></p>
<p><span style="color: #000000;">39 Khwaja Yunus Ali University 075163862-4 Sirajganj</span></p>
<p><span style="color: #000000;">40 Leading University 0821-720303-6, 01712116968 Sylhet</span></p>
<p><span style="color: #000000;">41 Manarat International University 8817525, 9884736, 9862251,01819-245895 Dhaka</span></p>
<p><span style="color: #000000;">42 Metropolitan University 0821-816198, 816199 Sylhet</span></p>
<p><span style="color: #000000;">43 North Bengal International University 01789-908612, 01717-330602 Rajshahi</span></p>
<p><span style="color: #000000;">44 North East University Bangladesh 0821-710221, 0821-710222 Sylhet</span></p>
<p><span style="color: #000000;">45 North South University 02-55668200, 01726-644356 Dhaka</span></p>
<p><span style="color: #000000;">46 North Western University 041-730807 Khulna</span></p>
<p><span style="color: #000000;">47 Northern University Bangladesh 8818131, 9898521, 9892054, 01191426301 – 14 Dhaka</span></p>
<p><span style="color: #000000;">48 Notre Dame University Bangladesh Dhaka</span></p>
<p><span style="color: #000000;">49 Port City International University 031-2869877, 031-2869899, 01773-225500 Chittagong</span></p>
<p><span style="color: #000000;">50 Premier University 880-31-656917, 031-657654,031-2554317-8 Chittagong</span></p>
<p><span style="color: #000000;">51 Presidency University 8857617-8, 8831182-4, 01731 953 716, 01741 378 506 Dhaka</span></p>
<p><span style="color: #000000;">52 Prime University 8051782, 8031810, 8014045-102 Dhaka</span></p>
<p><span style="color: #000000;">53 Primeasia University 02-9821498-99, 9822133, 01777676548 Dhaka</span></p>
<p><span style="color: #000000;">54 Rajshahi Science &amp; Technology University 07716496, 01713-303183 Natore</span></p>
<p><span style="color: #000000;">55 Ranoda Prashad Shaha University 02-7633545-46 Narayanganj</span></p>
<p><span style="color: #000000;">56 Royal University of Dhaka 880-2- 9886150, 8861628, 01745477241 Dhaka</span></p>
<p><span style="color: #000000;">57 Shanto-Mariam University of Creative Technology 8958048, 8918932, 8952610 Dhaka</span></p>
<p><span style="color: #000000;">58 Sheikh Fazilatunnesa Mujib University 01711-961224 Jamalpur</span></p>
<p><span style="color: #000000;">59 Sonargaon University 02 8189036-7, 01939-243538, 01767-777222 Dhaka</span></p>
<p><span style="color: #000000;">60 Southeast University 8833024, 8860456, 8860454, 01931579230 Dhaka</span></p>
<p><span style="color: #000000;">61 Southern University Bangladesh 0312851336-9, 626744 Chittagong</span></p>
<p><span style="color: #000000;">62 Stamford University Bangladesh 8153168-69, 8156122-23, 01713-082402 Dhaka</span></p>
<p><span style="color: #000000;">63 State University of Bangladesh 8151781-2, 8126272-3, 8156520, 01711228900 Dhaka</span></p>
<p><span style="color: #000000;">64 Sylhet International University 0821- 720771, 717193, 0172045330 Sylhet</span></p>
<p><span style="color: #000000;">65 The Millennium University 9360836, 9330323 Dhaka</span></p>
<p><span style="color: #000000;">66 The People’s University of Bangladesh 02-9127807, 9117454 Dhaka</span></p>
<p><span style="color: #000000;">67 The University of Asia Pacific 02-9664952, 01714-088321 Dhaka</span></p>
<p><span style="color: #000000;">68 Times University Bangladesh 01771 766591-4 Faridpur</span></p>
<p><span style="color: #000000;">69 United International University 9125912-6, 01914001470 Dhaka</span></p>
<p><span style="color: #000000;">70 University of Development Alternative 9145741, 01819260163, Dhaka</span></p>
<p><span style="color: #000000;">71 University of Information Technology and Sciences 02-8899751, 01715-367344 Dhaka</span></p>
<p><span style="color: #000000;">72 University of Liberal Arts Bangladesh 9661255, 9661301, 01714161614, Dhaka</span></p>
<p><span style="color: #000000;">73 University of Science and Technology Chittagong 02-8614959, 8614400 Chittagong</span></p>
<p><span style="color: #000000;">74 University of South Asia 9897073-4, 0176 3030636, 01686265125 Dhaka</span></p>
<p><span style="color: #000000;">75 Uttara University 02-8919116, 8919794, 8912280 Dhaka</span></p>
<p><span style="color: #000000;">76 Varendra University 0721-751274, 01961308400 Rajshahi</span></p>
<p><span style="color: #000000;">77 Victoria University of Bangladesh 88-02-8622634, 01841-000005 Dhaka</span></p>
<p><span style="color: #000000;">78 World University of Bangladesh 9611410, 9611411, 9611412, 01932380179 Dhaka</span></p>
<p><span style="color: #000000;">79 Z.H. Sikder University of Science &amp; Technology 02-8115965, 01775-217117 Shariatpur</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Research Institutes in Bangladesh</b></span></p>
<p><span style="color: #000000;">Bangladesh Forest Research Institute</span></p>
<p><span style="color: #000000;">Bangladesh Institute of Child and Mother Health</span></p>
<p><span style="color: #000000;">Bangladesh Institute of Development Studies</span></p>
<p><span style="color: #000000;">Bangladesh Institute of Nuclear Agriculture</span></p>
<p><span style="color: #000000;">Bangladesh Institute of Research and Rehabilitation for Diabetes, Endocrine and Metabolic Disorders</span></p>
<p><span style="color: #000000;">Bangladesh Rice Research Institute</span></p>
<p><span style="color: #000000;">Centre for Policy Dialogue</span></p>
<p><span style="color: #000000;">Housing &amp; Building Research Institute</span></p>
<p><span style="color: #000000;">International Centre for Diarrhoeal Disease Research, Bangladesh</span></p>
<p><span style="color: #000000;">List of institutes in Bangladesh</span></p>
<p><span style="color: #000000;">National Institute of Biotechnology</span></p>
<p><span style="color: #000000;">National Institute of Cancer Research &amp; Hospital</span></p>
<p><span style="color: #000000;">National Institute of Diseases of the Chest and Hospital</span></p>
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