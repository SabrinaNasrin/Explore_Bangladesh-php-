<html>
<head>

  <title>World Heritege Site</title>
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
                
            <article class="post-288 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p style="text-align: justify;"><span style="color: #000000;">Listed by UNESCO, both of our World Cultural Heritage is idividually unique in their own archaeological integrity which was sincere outcome of year-long devotions of the builders, designers and the persons who sanctioned it. There are two archaeological sites in Bangladesh that are enlisted as World Cultural Heritage. These are:</span></p>

<span style="color: #000000;">&#8226; Historic Mosque city of Bagerhat</span><br>
<span style="color: #000000;">&#8226; Paharpur Buddhist Vihara</span>
<h3 style="text-align: left;" align="center"><span style="color: #000000;"><b>Historic Mosque city of Bagerhat</b></span></h3>
<p style="text-align: justify;"><a href="image/mosque_city.jpeg"style="float:left;padding-right:15px;padding-bottom:10px;"><img class="alignleft wp-image-7710" src="image/mosque_city.jpeg" alt="Sat Gomboj Mosque_Ranak Martin D.cruze" width="423" height="282"></a><span style="color: #000000;">The present day town of Bagerhat is about 20 km southeast of Khulna divisional headquarters and 250 km southwest of capital city of Dhaka. Khan-e-Jahan Ulugh Khan by title, a saint-warrior, established a township here in the 15the century AD. It can be approached from Dhaka, Khulna and Barisal by motor way. From Dhaka one can reach there by a steamer also via Barisal and Khulna which usually takes a longer time. Port of Mongla is about 20km south of Bagerhat which is easily approachable by motorway.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Most of the establishments of his township have disappeared with the passage of time. Only a few survive most of which are religious buildings like mosque and mausoleum. Not a single secular structure excepting road is visible now. Water tanks may be related to both types of establishments. The traceable evidences of Bagerhat and Kalifatabad can be distinctly divisible into two groups: surviving monument and structural ruins buried in the earth. The former group comprises Shat Gombuj Masjid (Sixty Dome Mosque), Singara Mosque, Bibi Begni’s Mosque, The Chunakhola Mosque, Noy Gombuj Masjid (Nine dome Mosque), Ronvijoypur Mosque, Rezakodha Masjid (Six-Domed Mosque), Zindapir Masjid, Sabekdanga Monument and Khan Jahan’s Tomb. In the latter group there are many structural ruins scattered in and around Bagerhat town. A few of them are in the form of low mounds while some others are almost leveled down to the surrounding land surface. Some of them are Khan Jahaner Vasatbati, Bara Azina Masjid, Jahajghata, Kotwali Chawtara etc. This township has been inscribed on the World Cultural Heritage List in 1985 by UNESCO under the title ‘Historic Mosque city of Bagerhat’. The important monuments and mound as follows:</span></p>
<h3><span style="color: #000000;"><b>Shat Gombuj Masjid</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/shat_gombuj.jpeg"><img class="alignright wp-image-965" src="image/shat_gombuj.jpeg" alt="Shat Gombuj Masjid" width="406" height="269" ></a></span><span style="color: #000000;">The most spectacular and magnificent monument of Khalifatabad, stands on the eastern bank of a large water tank, locally known as Ghora dighi. It is about 7km west of Bagerhat town. Khulna-Bagerhat high way passes to the south of the mosque. This most imposing brick-built mosque is commonly known by its highly misleading name of Shat Gambuj Masjid or Sixty Dome Mosque. Actually this is roofed over with 77 squat domes including 7 chauchala or four segmented hut shaped domes in the central row.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">It is the largest mosque of medieval Bangladesh with its external dimension 49 meter long and 33 meter wide. The large prayer chamber is provided with 11 arched doorways on the east and 7 each on the north and south. The interior of the mosque is divided into 7 longitudinal aisles and 11 deep bays by 60 stones columns of which five are brick piers. Rows of endless diminishing arches spring from these pillars. These arches support the domes. Recent restoration works have covered those stone columns excepting one.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">There are ten concave mihrabs on the western wall of which the central one is of stone while the flanking 9 mihrabs are decorated with terracotta motifs. There is a small arched doorway in the western wall close to the central mihrab. The corner turrets are raised above the slightly curved parapet capped by rounded cupolas. The eastern turrets are tall and have entrances from the anterior of the mosque through staircases while the western turrets are dwarfish without staircases. The facade is relieved with usual curved cornice. Besides, over the central arched doorway there existed a small triangular pediment. After repair this pediment is not seen.</span></p>
<h3><span style="color: #000000;"><b>Tomb of Khan Jahan</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;"><a style="color: #000000;float:left;padding-right:15px;" href="image/tomb_khan_jahan.jpeg"><img class="alignleft wp-image-966 " src="image/tomb_khan_jahan.jpeg" alt="Tomb-of-Khan-Jahan-Ali-Bagerhat-" width="395" height="296" ></a></span><span style="color: #000000;">The second important monument of Khalifatabad is the single domed mausoleum of Khan Jahan (Pl.23) located on the northern embankment of a large tank locally known as Thakur dighi. It is about 2km east-southeast of Sixty Dome Mosque.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The tomb is a square building measuring 13.70 meter each side. At the base of the brick wall 5 courses of black Stones have been used. There is an arched entrance in the middle of each side of which the northern one is now closed. The corner towers are faceted at regular intervals with seven brick moldings and crowned with ribbed cupolas. The walls are 2.5 meter thick. Each wall is relieved with two multi cusped arched niches.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The tomb accommodates a stone built sarcophagus in the middle of the floor and actual, grave underneath. The floor was richly embellished with colored glazed tiles which are now missing.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The sarcophagus is profusely engraved with the verses from the holy Quran, Persian expressions and date (27 Zilhaz, 863 AH [24-25 October 1459 AD]) of the demise of the saint Khan-ul-Azam Ulugh Khan-i-Jahan by title. The walls of the crypt, which is now closed, are also full with inscriptions. An attempt to decipher those inscriptions may help to get the Khan Jahan’s identity and also to reconstruct the history of the region.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">On the close west of this tomb there is another stone sarcophagus known as Peer Alt Taheerer Majar who was close associate of Khan Jahan. Further west there is an identical but smaller single domed mosque.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The tomb is enclosed by an inner and outer compound. The inner boundary wall accommodates three gateways, one in each side except north. The main gateway in the west is now closed. The outer enclosure has six entrances in it.</span></p>
<h3><span style="color: #000000;"><b>Nine-Domed Mosque, Khalifatabad</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:10px;" href="image/nine_domed_mosque.jpeg"><img class="wp-image-1492 alignright" src="image/nine_domed_mosque.jpeg" alt="bagerhat-mosques07" width="405" height="270"></a></span><span style="color: #000000;">The mosque is located on the western embankment of the Thakur Dighi and to the southwest of the mausoleum of Khan Jahan. The square mosque (15.1 meter) is roofed over with nine hemispherical domes rest on four free- standing stone columns.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">It has three pointed arched openings on the north, south and east sides bordered within tall rectangular frames. Above the arches there are horizontal rows of moldings.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The western wall is relieved with three semicircular mihrabs of which the central one is larger and is projected to the west. The multi-cusped mihrabs are decorated with terracotta floral, scroll and foliage patterns within rectangular panels. Center of each mihrab is decorated with chain and bell motif. Apexes of the arches have diaper designs and large rosettes at the spandrels. Rest three walls are relieved with only two niches in each.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The corner turrets are round and are faceted by eight bands of moldings. The exterior walls are relieved with vertical panels. The curved cornice is very prominent.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Khan Jahan’s Residence, Khalifatabad</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">A low locally known as Khan Jahan’s Vasatbati (Khan Jahan’s Residence) is situated about 600 north of Shat Gombuj Bus Station and 200m north of Sixty Dome Mosque.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The site is located in Bajeapti-Sundlarghona area under the union of Shaitgumbad on the southern bank of Magra Khal (canal). There are three adjacent and two small tanks known as Bis Pukur and Andhi Pukur respectively.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">A small scale excavation carried out by the Department of Archaeology in 2002 in the large revealed some nondescript walls, floors, stone columns, potsherds and porcelains. The exposed remains indicate that probably there was a mosque and residence also which had been repaired several times. Further investigation is required to confirm it and to expose the remains fully.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">About 50 meter south of this excavated site a low lies which is locally known as Sona Masjid. This has now been almost leveled to the ground. But the huge potsherds and top of the damaged walls visible clearly indicates that this entire area^ was Sickly inhabited. Extensive excavation will certainly yield important information which will help to reconstruct the history of Ulugh Khan Jahan.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Nearly 200 meter north of Khan Jahan’s residence along an ancient road overlooking the meandering of moriband Bhairab there lies a site locally known as Jahajghata or Port of Khan Jahan or Pathar Ghata. An ornamental stone column is firmly embedded in the ground which supports the people’s common belief. An image of an eight handed Mahismardini Durga (c. llth/12th century AD) is engraved in this stone column. Probably this was subsequently brought here.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>How to go</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">From DHAKA, you can go by Bus such as SHOHAG , HANIF, EGAL for go to DHAKA to KHULNA. From Khulna city the distance is around 7km. So you can go by RICKSHAW or Microbus.</span></p>
<p><span style="color: #000000;"><b>Accommodation</b></span></p>
<p><span style="color: #000000;">If you want to stay there, some hotels are ready to help you. Here’s the list of hotels:</span></p>
<p><span style="color: #000000;">Sagorika</span></p>
<p><span style="color: #000000;">Rahmot hotel</span></p>
<p><span style="color: #000000;">Mohana hotel</span></p>
<p><span style="color: #000000;">Rahat hotel</span></p>
<p>&nbsp;</p>
<p><span style="color: #000000;"><b>Paharpur Buddhist Vihara, Badalgachi, Naogaon</b></span></p>
<p style="text-align: justify;"><a href="image/paharpur.jpeg"style="float:left;padding-right:15px;padding-bottom:10px;"><img class="alignleft wp-image-2113" src="image/paharpur.jpeg" alt="Pic-04" width="452" height="270" ></a><span style="color: #000000;">According to the Bengali Vocabulary, the name Paharpur (Pahar = hill, pur = locality) means a locality of hill. It is a village in Badalgachi Upazila of Naogaon District. The nearest railway station of Jamalganj that lies on the Khulna-Parvatipur rail tract and is connected with Paharpur by a 5km long brick metalled bye-way. Paharpur can also be reached from its nearest airport, Sayedpur, following a metalled road via Joypurhat. The village contains the ruins of a Buddhist monastery which was called Somapura Mahavihara (the great monastery situated in the locality of moon) in the ancient Buddhist World. It is now a World Cultural Heritage (BGD. 292)</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The monastery is square in plan, being 281m on each side. Built by Dharmapala (781-821 AD) the second ruler of the Pala dynasty, and reconstructed at least twice by his descendants, each of its with has thick exterior wall with two entrance provisions on the north and one in the east. Besides, there has a row of monastic cells, fronted by a running corridor, abutting the exterior wall. Some of the cells contain solid pedestals. There has also a sub-worshipping point in the mid-most part of each wing excepting the north one. Each worshipping point, excepting the southern one, has a staircase connection with the monastery courtyard in front. In the center of the open courtyard of the monastery there stands the residual vestige of a four-faced shrine.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The central shrine is a terraced structure springing from a cruciform ground plan and expanding from a mid-pile of square configuration. The upper terrace has in its each side a sanctum fronted by an ante-chamber with circumambulatory passage around. Each of the second and first terraces has nothing but a circumambulatory passage. The passages of the lower terrace, however, are now covered under recently accumulated soil. Its wall has 63 inches at plinth level, each being provided with a stone sculpture. Whereas the un-plastered wall surfaces of the lower two terraces are decorated with friezes containing terracotta plaques showing different scenes. The cornices of all terraces are turgent and lavishly relieved with carved bricks showing chain, petal, pyramidal, dental, net and lozenge motifs. Moreover, at the juncture of the cornices there are stone gargoyles ended in grinning lion faces.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The courtyard around the central shrine is dotted with several units of straggling structural ruins. Of them, Panchavede &gt; a group of five votive stupas&gt;near the south-eastern comer, a kitchen towards west of Panchavedi, a long paved dinning arrangement towards north-west of Panchavedi and a model of the central shrine on the north of Panchavedi are a few to note. The northeast comer is also occupied by another group of structures, They appear to have been related to office establishments. Close to the basement of the central shrine a number of wells, votive stupas, vedika cruciform model etc. are noticed. The western half of the courtyard is relatively barren in structural finding.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">A good number of objects cultural have been salvaged from Paharpur, They include sculptural pieces, terracotta plaques, pottery, domestic tools, ornaments, coins, seals, ceilings, votive stupas etc. They are now housed in Asutosh Museum Kolkata, Bangladesh National Museum , Varendra Museum, Paharpur Museum and other site museums in Bangladesh.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Of these antiquities sculptural pieces as well as sculptured plaques are artistically most alluring. Most of the sculptural pieces are medium in size and a few are smaller. All of them are wrought on stone save a few of metal. Stucco sculptural pieces are, however, not altogether lacking. Among the metal sculptures, the fragmentary bust of a Buddha is worth noted because of its artistic excellence. Only one stone sculpture is related to Mahayana order, the remaining being Hindu. In dating parlance, they may be placed in the 7th-12th AD time-bracket.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The next group of alluring art objects is represented by terracotta plaques. They are at least 2800 in number and appear to be contemporaneous to the 1st constructional period of the Pala monastery. Their sizes vary between 40cm x 30cm x 6cm and 18cm square. They depict diverse scenes reflecting the then socio-political, economic and martial aspects.</span></p>
<p><span style="color: #000000;"><b>How to go</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">From Bogura, take a bus to Jaipurhat (approximately 44 km). From Jaipurhat, buses leave regularly between 4 pm to 7 pm for Paharpur from Jaipurhat. Then to get to the sights from Paharpur village take a rickshaw or a three wheeler. And to get back to Jaipurhat you can get tempo.</span></p>
<p><span style="color: #000000;"><b>Bus Services</b></span></p>
<p><span style="color: #000000;">Hanif Enterprise</span></p>
<p><span style="color: #000000;">Phone: 02-9120116, 8114442</span></p>
<p><span style="color: #000000;">Shyamoli Paribahan</span></p>
<p><span style="color: #000000;">Phone: 02-9333803</span></p>
<p><span style="color: #000000;"><b>Train Service</b></span></p>
<p><span style="color: #000000;">Bangladesh Railway</span></p>
<p><span style="color: #000000;">Phone: 02-9358634, 8315857</span></p>
<p><span style="color: #000000;"><b>Accommodation</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">There are a few accommodation and restaurant facilities at Joypurhat. But a good number of accommodation and restaurants are available in Bogra town. Bangladesh Parjatan Corporation owns a luxurious motel with restaurant facilities in Bogra town, a number of private hotels, guest and rest-houses are available for tourists. Name and address of some motels are as follows:</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Parjatan Motel, Bogra</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Bangladesh Parjatan Corporation Sherpur Road, Banani, Bogra</span></p>
<p><span style="color: #000000;">Hotel Naz Garden</span></p>
<p><span style="color: #000000;">Slimpur, Bogra</span></p>
<p><span style="color: #000000;">Tel: 051-66655, 73888, 62468 Tel: 051-66753, 67024-7</span></p>
<p><span style="color: #000000;">Motel Safeway Int’l (Pvt.) Ltd.</span></p>
<p><span style="color: #000000;">Charmatha, Santahar Road, Bogra Tel: 051-66087</span></p>
<p><span style="color: #000000;">Motel North Way</span></p>
<p><span style="color: #000000;">Chinese restaurant and residential facility, Latifpur Colony,Bogra</span></p>
<p><span style="color: #000000;">Tel: 051-66824, Mobile: 0171-385036</span></p>
<p><span style="color: #000000;"><b>Visiting Hours at Paharpur Museum</b></span></p>
<p><span style="color: #000000;">1st April – 30th September</span></p>
<p><span style="color: #000000;">Monday – Thursday 10:00 am to 6:00 pm (Break 1:00 pm to 2:00 pm)</span></p>
<p><span style="color: #000000;">Friday 9:00 am to 5:00 pm (Break 12:30 pm to 2:30 pm)</span></p>
<p><span style="color: #000000;">1st October – 30th March</span></p>
<p><span style="color: #000000;">Monday – Thursday 9:00 am to 5:00 pm (Break 1:00 pm to 2:00 pm)</span></p>
<p><span style="color: #000000;">Friday 9:00 am to 5:00 pm (Break 12:30 pm to 2:30 pm)</span></p>
<p>&nbsp;</p>
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