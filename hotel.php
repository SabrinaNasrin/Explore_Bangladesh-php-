<html>
<head>

	<title>Hotels</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  body{
    background-color: #e3e3e3;
  }
   table {
    border-collapse: collapse;
    
    width:100%;
}

th, td {
    text-align: center;
    padding: 8px;
    border: 1px solid black;
}

tr:nth-child(even){background-color:  #90EE90}
tr:nth-child(odd){background-color: #e3e3e3}

th {
    background-color:   #008000;
    color: white;
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
                
            <article class="post-358 page type-page status-publish hentry">
                
                <div class="page-content">
                   
<p style="text-align: center;">&nbsp;<span style="color: #ff0000;"><strong>Five Star *****</strong></span></p>
<table class="Design7" width="784" cellspacing="0">
<thead>
<tr>
<th width="86"><strong>Location</strong></th>
<th class="Odd" width="92"><strong>Hotel Name</strong></th>
<th width="168"><strong>Address</strong></th>
<th class="Odd" width="144"><strong>Cell no</strong></th>
<th width="294"><strong>E mail/web</strong></th>
</tr>
</thead>
<tbody>
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

 
   
  $query = "SELECT * FROM `five star` WHERE 1";
  $result = mysqli_query($con,$query);


  while($row=mysqli_fetch_array($result)){ 

 
   echo("<tr>
    <td>$row[location]</td>
    <td> $row[name] </td>
<td>$row[address] </td>
<td>$row[telephone]</td>
<td>$row[mail]</td>

 </tr>"); 
  
  }
  
  
?>
</tbody>
</table>
<p style="text-align: center;"><span style="color: #ff0000;"><strong> Four Star ****</strong></span></p>
<table class="Design7" width="784" cellspacing="0">
<thead>
<tr>
<th width="86"><strong>Location</strong></th>
<th class="Odd" width="92"><strong>Hotel Name</strong></th>
<th width="168"><strong>Address</strong></th>
<th class="Odd" width="144"><strong>Cell no</strong></th>
<th width="294"><strong>E mail/web</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td width="86"><span style="color: #000000;">Chittagong</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Agrabad Hotel Ltd</span></td>
<td width="168"><span style="color: #000000;">Agrabad Commercial Area, Chittagong, Bangladesh</span></td>
<td class="Odd" width="144"><span style="color: #000000;">+88-031-713311-8 (8 lines)</span><br>
<span style="color: #000000;"> Cell: 01766665163</span></td>
<td width="294"><span style="color: #000000;">info@agrabadhotels.com</span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Chittagong</span></td>
<td class="Odd" width="92"><span style="color: #000000;">The Peninsula Chittagong</span></td>
<td width="168"><span style="color: #000000;">486/B O.R. Nizam Road, CDA Avenue, Chittagong-4000</span></td>
<td class="Odd" width="144"><span style="color: #000000;">+88 (031) 2850860-69,</span><br>
<span style="color: #000000;"> <span data-numbertocall="+88031616722" data-isfreecall="false" data-isrtl="false" data-ismobile="false">+88 (031) 616722</span>, 619850</span></td>
<td width="294"><span style="color: #000000;">Email : reservation[at]peninsulactg.com</span><br>
<span style="color: #000000;"> www.peninsulactg.com</span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Sylhet</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Rose View Hotel</span></td>
<td width="168"><span style="color: #000000;">Plot#2, Block#B, Shahjalal Uposhohor, Sylhet-3100.</span></td>
<td class="Odd" width="144"><span style="color: #000000;">Phone: <span data-numbertocall="+880821721439" data-isfreecall="false" data-isrtl="false" data-ismobile="false">0821-721439</span></span></td>
<td width="294"><span style="color: #000000;">www.roseviewhotel.com</span></td>
</tr>
</tbody>
</table>
<p style="text-align: center;"><span style="color: #ff0000;"><strong> Three Star***</strong></span></p>
<table class="Design7" width="784" cellspacing="0">
<thead>
<tr>
<th width="86"><strong>Location</strong></th>
<th class="Odd" width="92"><strong>Hotel Name</strong></th>
<th width="168"><strong>Address</strong></th>
<th class="Odd" width="144"><strong>Cell no</strong></th>
<th width="294"><strong>E mail/web</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td width="86"><span style="color: #000000;">Motijhill,</span><br>
<span style="color: #000000;"> Dhaka</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel Purbani Int. Ltd.</span></td>
<td width="168"><span style="color: #000000;">1, Dilkusha C/A, Dhaka-1000</span></td>
<td class="Odd" width="144"><span style="color: #000000;">ph: <span data-numbertocall="+4429552229" data-isfreecall="false" data-isrtl="false" data-ismobile="false">02-9552229</span></span></td>
<td width="294"><span style="color: #000000;">www.hotelpurbaniltd.com</span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Kakrail,</span><br>
<span style="color: #000000;"> Dhaka</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel Razmoni Isha Kha</span></td>
<td width="168"><span style="color: #000000;">89/3, V.I.P. Road, Kakrail, Dhaka.</span></td>
<td class="Odd" width="144"><span style="color: #000000;">Phone: +880-2-8322426-9</span><br>
<span style="color: #000000;"> Mobile : 00 88 01760004814</span></td>
<td width="294"><span style="color: #000000;">Email: razmoni@bdcom.com</span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Mirpur,</span><br>
<span style="color: #000000;"> Dhaka</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Grand Prince Hotel</span></td>
<td width="168"><span style="color: #000000;">paradise Plaza, Com. Plot # 6 and 11,</span><br>
<span style="color: #000000;"> Block-B, Mirpur-1, Dhaka-1216,,Bangladesh</span></td>
<td class="Odd" width="144"><span style="color: #000000;">Cell: +8801718962156,Tel: <span data-numbertocall="+88029012952" data-isfreecall="false" data-isrtl="false" data-ismobile="false">+8802 9012952</span>, 8021599,</span></td>
<td width="294"><span style="color: #000000;">info@grandprince-dhaka.com</span><br>
<span style="color: #000000;"> Web: www.grandprince-dhaka.com</span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Gulshan</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel washinton</span></td>
<td width="168"><span style="color: #000000;">56 Gulshan Avenue, Road# 132, Dhaka 1212</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1847090501</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:hosm@washingtonbd.com">hosm@washingtonbd.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Gulshan</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Six season hotel</span></td>
<td width="168"><span style="color: #000000;">House #19, Rd No 96, gulsan 2,Dhaka 1212</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1987009825</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:rezaur.rahman@sixseasonhotel.com">rezaur.rahman@sixseasonhotel.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Motijhill</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel 71</span></td>
<td width="168"><span style="color: #000000;">176 shaheed syed nazrul islam sarani</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1761788549</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:info@hotel71bd.com">info@hotel71bd.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Gulshan</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Sweet dream hotel</span></td>
<td width="168"><span style="color: #000000;">60 Kemal Ataturk Avenue, Dhaka 1213</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1919777769</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:gm.seles@hotelsweetdream.com.bd">gm.seles@hotelsweetdream.com.bd</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Ashulia</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Concord Resort Atlantis</span></td>
<td width="168"><span style="color: #000000;">Fantasy Kingdom,Jamgora,Ashulia</span><br>
<span style="color: #000000;"> ,Savar.Dhaka</span></td>
<td class="Odd" width="144"><span style="color: #000000;">hone: 1937402949, 01913531547, 01913531378</span></td>
<td width="294"><span style="color: #000000;">www.fantasy-kingdom.net.bd/resort-atlantis.php</span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Chittagong</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel Tower Inn Internetional Ltd.</span></td>
<td width="168"><span style="color: #000000;">183, Jublee Road, Chittagong</span></td>
<td class="Odd" width="144"><span style="color: #000000;">Phone: 880-31-2862691-2</span></td>
<td width="294"><span style="color: #000000;">Email: info@hoteltowerinn.com</span><br>
<span style="color: #000000;"> www.hoteltowerinn.com</span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Chittagong.</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Well Park Residence</span></td>
<td width="168"><span style="color: #000000;">Road # 01, Plot # 02, O.R. Nizam Road, Chittagong.</span></td>
<td class="Odd" width="144"><span style="color: #000000;">Phone: +88 031 – 2557035, 2557261, 2557262</span></td>
<td width="294"><span style="color: #000000;">www.wellparkbd.com</span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Cox’s Bazar.</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel Sea Palace Limited</span></td>
<td width="168"><span style="color: #000000;">Kalatoli Road, Cox’s Bazar.</span></td>
<td class="Odd" width="144"><span style="color: #000000;">Phone: +8801714-652227</span></td>
<td width="294"><span style="color: #000000;">http://hotelseapalacebd.com</span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Cox’s Bazar.</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel Sea Crown</span></td>
<td width="168"><span style="color: #000000;">Marin Drive, Kola Toil New Beach, Cox’s Bazar.</span></td>
<td class="Odd" width="144"><span style="color: #000000;">Phone : 88-0341-64795, 88-0341-64474</span><br>
<span style="color: #000000;"> Mobile : 88-01817089420</span></td>
<td width="294"><span style="color: #000000;">Email : seacrownhotel[at]gmail com</span><br>
<span style="color: #000000;"> www.hotelseacrownbd.com</span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Cox’s Bazar</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Long Beach Hotel Ltd.</span></td>
<td width="168"><span style="color: #000000;">14 Kalatoli, Hotel-Motel Zone, Cox’s Bazar, Chittagong.</span></td>
<td class="Odd" width="144"><span style="color: #000000;">Phone: 034151062,</span><br>
<span style="color: #000000;"> +8801730338905</span></td>
<td width="294"><span style="color: #000000;">Email: <a style="color: #000000;" href="mailto:sales@longbeachhotelbd.com">sales@longbeachhotelbd.com</a></span><br>
<span style="color: #000000;"> www.longbeachhotelbd.com/new</span></td>
</tr>

</tbody>
</table>
<p style="text-align: center;"><span style="color: #ff0000;"><strong>Others Hotel</strong></span></p>
<table class="Design7" width="784" cellspacing="0">
<thead>
<tr>
<th width="86"><strong>Location</strong></th>
<th class="Odd" width="92"><strong>Hotel Name</strong></th>
<th width="168"><strong>Address</strong></th>
<th class="Odd" width="144"><strong>Cell no</strong></th>
<th width="294"><strong>E mail/web</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td width="86"><span style="color: #000000;">Mohakhali</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Bangladesh Parjatan Corporation</span></td>
<td width="168"><span style="color: #000000;">83-88 Mohakhali, Dhaka</span></td>
<td class="Odd" width="144"><span style="color: #000000;">Phone : <span data-numbertocall="+88028811109" data-isfreecall="false" data-isrtl="false" data-ismobile="false">880-2-8811109</span></span><br>
<span style="color: #000000;"> 9899288, 9899290</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:abakash@citecho.net">abakash@citecho.net</a> ,</span><br>
<span style="color: #000000;"> <a style="color: #000000;" href="mailto:abakash@gmail.com">abakash@gmail.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Amazon lilly</span></td>
<td width="168"><span style="color: #000000;">House No. 28, Rd No. 19/A, Dhaka</span></td>
<td class="Odd" width="144"><span style="color: #000000;">01680000888</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:lakeview@bol-online.com">lakeview@bol-online.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel rose garden</span></td>
<td width="168"><span style="color: #000000;">House # 86, Road # 17A, Block-E, Banani,Dhaka</span></td>
<td class="Odd" width="144"><span style="color: #000000;">01711537845</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:rosegardendhaka@yahoo.co">rosegardendhaka@yahoo.co</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Regent guest house</span></td>
<td width="168"><span style="color: #000000;">House 100,Rd1 13/C,BLOCK –E, banani</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1716710116</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:hotelregentbd@yahoo.com">hotelregentbd@yahoo.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel swiss garden</span></td>
<td width="168"><span style="color: #000000;">Road # 13, House # 89, Block-D, Banani, Dhaka</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1720039610</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:info@hotelswissgarden.com">info@hotelswissgarden.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Platinum suites</span></td>
<td width="168"><span style="color: #000000;">Plot # 58, Road No.11, Bock-F, Banani? Dhaka 1213</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1959901302</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:sales6@platinumhotels.com.bd">sales6@platinumhotels.com.bd</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel swiss park</span></td>
<td width="168"><span style="color: #000000;">Road 15, House 62, Block C, Banani, Dhaka 1212</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1838913960</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:info@hotelswissparkbd.com">info@hotelswissparkbd.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel orchard suites</span></td>
<td width="168"><span style="color: #000000;">hotel orchard suites</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1720045840</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:info@hotelswissparkbd.com">info@hotelswissparkbd.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Far pavilion</span></td>
<td width="168"><span style="color: #000000;">Road # 15, House # 64, Block – C, Banani, Dhaka</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1817152324</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:pavilion@bangla.net">pavilion@bangla.net</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Sky park guest house</span></td>
<td width="168"><span style="color: #000000;">House # 85, Road # 15/A, Bock-B. Banani. P.C. 1213, Gulshan. Dhaka.</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1716419819</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:salimahamed29@yahoo.com">salimahamed29@yahoo.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel eastern residence</span></td>
<td width="168"><span style="color: #000000;">&nbsp;</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1713222214</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:sales@easternresidence.com">sales@easternresidence.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Marino hotel</span></td>
<td width="168"><span style="color: #000000;">Rd No.11, Banani,Dhaka</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1819988199</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:banani@marinohotel.com.bd">banani@marinohotel.com.bd</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel de castle limited</span></td>
<td width="168"><span style="color: #000000;">Block-B, 72 Road 21, Dhaka 1213</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1981422421</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:info@hoteldecastlebd.com">info@hoteldecastlebd.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Banani</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Royel park</span></td>
<td width="168"><span style="color: #000000;"># 85, Road # 25A</span><br>
<span style="color: #000000;"> Block-A, Banani</span><br>
<span style="color: #000000;"> Dhaka-1213,</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1921659465</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:nazmul@royelparkbd.com">nazmul@royelparkbd.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Uttra</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Platinum Residence</span></td>
<td width="168"><span style="color: #000000;">42 Rd No. 20/B, Dhaka 1230</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1922110945</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:sales4@platinumhotels.com.bd">sales4@platinumhotels.com.bd</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Uttra</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Hotel milina</span></td>
<td width="168"><span style="color: #000000;">4 Rd No. 9, Dhaka 1230</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1611264215</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:info@hotelmilina.com">info@hotelmilina.com</a></span></td>
</tr>
<tr>
<td width="86"><span style="color: #000000;">Uttra</span></td>
<td class="Odd" width="92"><span style="color: #000000;">Marino hotel</span></td>
<td width="168"><span style="color: #000000;">&nbsp;</span></td>
<td class="Odd" width="144"><span style="color: #000000;">1714237983</span></td>
<td width="294"><span style="color: #000000;"><a style="color: #000000;" href="mailto:mosharaf@marinohotel.com.bd">mosharaf@marinohotel.com.bd</a></span></td>
</tr>


</tbody>
</table>
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