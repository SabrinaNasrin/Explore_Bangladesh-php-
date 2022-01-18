<html>
<head>

  <title>art & culture</title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <style>
  .main-content{
    font-size: 18px;
  }
input[type=text] {
    width:71%px;
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
  <div class="main-content col-md-9">

            
                            
    <div id="content" role="main">
                
            <article class="post-323 page type-page status-publish hentry">
                
                <div class="page-content">
                    <p><span style="color: #000000;">&nbsp;<a href="image/nokshi1.jpg"><img class="alignnone wp-image-1648" src="image/nokshi1.jpg" alt="nakshi-suraya03" width="310" height="200"></a>   <a href="image/nokshi2.jpeg"><img class="alignnone wp-image-1647" src="image/nokshi2.jpeg" alt="index" width="310" height="200"></a>   <a href="image/nart_gallery.jpeg"><img class="alignnone wp-image-1647" src="image/art_gallery.jpeg" alt="art_gallery" width="310" height="200"></a></span></p>
<h3><span style="color: #000000;"><b>Strokes of Art</b></span></h3>
<p style="text-align: justify;"><span style="color: #000000;">With strong strokes, our arts take us close to the reality. With thousands of shade, the colors in our painting take us to beyond our imagination. Our modern painting was mostly pioneered by artists like Zainul Ahedin, Qamrul Hasan. Anwarul Haque, Shafiuddin Ahnied, Shafiqul Amin, Rashid Chowdhury and S.M. Sultan. There are many painting exhibition which are organized all around the year. Some of them even hold international affiliation. Here’s a list of famous painting gallery where you can get to meet with our artistic passion:</span></p>
<p>&nbsp;</p>

<p><span style="color: #000000;">&nbsp;<b>Bangladesh College of Arts and Crafts</b></span></p>
<p><span style="color: #000000;">Kazi Nazrul Islam Avenue, Dhaka</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Contemporary Arts Ensemble</b></span></p>
<p><span style="color: #000000;">48/1, Commercial Building, South Avenue, Gulshan</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Saju Art Gallery</b></span></p>
<p><span style="color: #000000;">F 28 DMC Market, Gulshan, Dhaka</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>La Galerie</b></span></p>
<p><span style="color: #000000;">54 Kamal Ataturk Avenue, Gulshan, Dhaka</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Jiraj Art Gallery</b></span></p>
<p><span style="color: #000000;">12 Shahbag Shopping Complex, Dhaka</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Haque Art and Crafts</b></span></p>
<p><span style="color: #000000;">F 36, North DMC Market, Gulshan</span></p>
<p><span style="color: #000000;">Phone: 606524,</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Yeart Gallery</b></span></p>
<p><span style="color: #000000;">F 37North DMC Market, Gulshan, Dhaka</span></p>
<p><span style="color: #000000;">Phone: 606944</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Shilpangan</b></span></p>
<p><span style="color: #000000;">House 15, Road 4 Dhanmondi, Dhaka</span></p>
<p><span style="color: #000000;">Phone: 503431.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Bangladesh Folk Art Gallery</b></span></p>
<p><span style="color: #000000;">Panam Nagar, Sonargaon.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Galary</b></span></p>
<p><span style="color: #000000;">21, 765 Satmasjid Road, Dhanmondi, Dhaka</span></p>
<p><span style="color: #000000;">Phone: 8114716.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Bengal Art Lounge</b></span></p>
<p><span style="color: #000000;">60 Gulshan Avenue, Circle 1, Dhaka</span></p>
<p><span style="color: #000000;">Phone: +880 1745 315040</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Dhaka Art Centre</b></span></p>
<p><span style="color: #000000;">House 60, Road 7A, Dhanmondi, Dhaka</span></p>
<p><span style="color: #000000;">Phone: +880 1191 776511</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Gallery Jolrong</b></span></p>
<p><span style="color: #000000;">House 134, Road 3, Block A, Niketon, Gulshan, Dhaka</span></p>
<p><span style="color: #000000;">Phone: +880 1730 372924</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Athena Gallery of Fine Arts</b></span></p>
<p><span style="color: #000000;">AJ Heights, CHA-72/1/D, Progoti Shorani Road, Uttar Badda, Dhaka</span></p>
<p><span style="color: #000000;">Phone: +880 1680 760887</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Gallery 21</b></span></p>
<p><span style="color: #000000;">751 Satmasjid Road, Dhanmondi, Dhaka</span></p>
<p><span style="color: #000000;">Phone: +880 28 114716</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Bengal Gallery of Fine Arts</b></span></p>
<p><span style="color: #000000;">Bengal Shilpalaya 275/F, Road 16, Dhanmondi, Dhaka</span></p>
<p><span style="color: #000000;">Phone: +880 28 901133</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>La Galerie at Alliance Francaise de Dhaka</b></span></p>
<p><span style="color: #000000;">26 Mirpur Road, Dhaka</span></p>
<p><span style="color: #000000;">Phone: +880 29 675249</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Drik Gallery</b></span></p>
<p><span style="color: #000000;">House 58, Road 15A, Dhanmondi, Dhaka</span></p>
<p><span style="color: #000000;">Phone: +880 29 120125</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Gallery Chitrak</b></span></p>
<p><span style="color: #000000;">House 4, Road 6, Dhanmondi, Dhaka</span></p>
<p><span style="color: #000000;">Phone: +880 1715 026980</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">Department of Contemporary Art at Bangladesh National Museum</span></p>
<p><span style="color: #000000;">Shahbagh Road, Dhaka</span></p>
<p><span style="color: #000000;">Phone: +880 2861 93969</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Lost in Words</b></span></h3>
<p><span style="color: #000000;">The earliest available specimen of Bengali Literature is nearly a thousand years old. The modern era of Bengali literature is pioneered by Rabindranath Tagore, Kazi Nazrul Islam, Michael Madhusudan Datta, Mir Mosharraf Hossain etc. Here’s a list of bookstore you can find almost any book written by authors from Bangladesh and abroad:</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Gyankosh</b></span></p>
<p><span style="color: #000000;">Shop 5-7</span></p>
<p><span style="color: #000000;">Sobhanbagh Masjid Market</span></p>
<p><span style="color: #000000;">Dhanmondi</span></p>
<p><span style="color: #000000;">Dhaka, Bangladesh.</span></p>
<p><span style="color: #000000;">Telephone: (88-02)811-9004</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Minerva Book Corner</b></span></p>
<p><span style="color: #000000;">Shop 4</span></p>
<p><span style="color: #000000;">Sobhanbagh Masjid Market</span></p>
<p><span style="color: #000000;">Dhanmondi</span></p>
<p><span style="color: #000000;">Dhaka, Bangladesh.</span></p>
<p><span style="color: #000000;">Telephone: (88-02) 911-1350</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Papyrus</b></span></p>
<p><span style="color: #000000;">Shop No 18 &amp; 51 [Ground Floor]</span></p>
<p><span style="color: #000000;">Aziz super Market,</span></p>
<p><span style="color: #000000;">Shahabag</span></p>
<p><span style="color: #000000;">Dhaka, Bangladesh.</span></p>
<p><span style="color: #000000;">Telephone: (88-02) 966-1066</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Pathak Shamabesh</b></span></p>
<p><span style="color: #000000;">Gulshan</span></p>
<p><span style="color: #000000;">204/b [Second Floor], Tejgaon Link Road</span></p>
<p><span style="color: #000000;">Gulshan</span></p>
<p><span style="color: #000000;">Dhaka, Bangladesh.</span></p>
<p><span style="color: #000000;">Telephone: (88-02) 986-1003</span></p>
<p><span style="color: #000000;">Shahabag</span></p>
<p><span style="color: #000000;">Shop No 17 – 17A [Ground Floor], Shop 27 [First Floor]</span></p>
<p><span style="color: #000000;">Aziz Super Market</span></p>
<p><span style="color: #000000;">Shahabag</span></p>
<p><span style="color: #000000;">Dhaka, Bangladesh.</span></p>
<p><span style="color: #000000;">Telephone: (88-02) 966-2766</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Sagar Publisher’s</b></span></p>
<p><span style="color: #000000;">4 New Baily Road</span></p>
<p><span style="color: #000000;">Property Arcade</span></p>
<p><span style="color: #000000;">Dhaka, Bangladesh.</span></p>
<p><span style="color: #000000;">Telephone: (88-02) 935-8944</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>The Book Worm</b></span></p>
<p><span style="color: #000000;">Twin Peaks’ Complex</span></p>
<p><span style="color: #000000;">Old Airport</span></p>
<p><span style="color: #000000;">Tejgaon</span></p>
<p><span style="color: #000000;">Dhaka, Bangladesh.</span></p>
<p><span style="color: #000000;">Telephone: (88-02) 912-0387</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;"><b>Words n Pages</b></span></p>
<p><span style="color: #000000;">SWB 7, Road 7</span></p>
<p><span style="color: #000000;">Gulshan 1</span></p>
<p><span style="color: #000000;">Dhaka, Bangladesh.</span></p>
<p><span style="color: #000000;">Tel: (88-02) 882-0417</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Craftsmanship with Clay</b></span></h3>
<p><span style="color: #000000;">Clay potters of Bangladesh have been related with their profession for a long time. The manual process of making pottery reflects our potters’ endless passion, devotion and affection to their divine creations. You can easily buy the finest pieces of handmade pottery in souvenir shop in Dhaka.</span></p>
<p><span style="color: #000000;">If you want to closely see how the pottery artists of&nbsp; Bangladesh has been creating this amazing handicrafts, just go to a village in Dhamrai in the outskirt of Dhaka. There are plenty of potters who are involved with this profession since their ancestors.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Brass Metal Sculpture</b></span></h3>
<p><span style="color: #000000;">As our country has a deep artistic root influenced by the Hindu religion, religious sculpture and crafts — especially the ones which are made by the metal craftsmen of Dhamrai — are exotic in nature as well as passionate in its diverse usage. This 5000 year old tradition is still surviving the some 30 villages around Dhamrai. Even some families in Dhamrai are in this business for 200 years. The brass metal craft artisans of Dhamrai area practice four traditional methods; lost wax method, clay casting, sand casting and hammering. The old wax method is very critical and sophisticated, and only a handful number of artists are capable of this. It will take a few hours to visit the stores of metal crafts in Dhamrai. If you are more curious, you can go inside their house and experience how this is finest piece of art is being produced.</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<h3><span style="color: #000000;"><b>Nakshi Katha</b></span></h3>
<p><span style="color: #000000;">Our Nokshi katha — a type of embroidered quilt — is a century-old Bangladeshi art tradition reflects the craftsmanship of people in rural areas. You can see the finest example of Nakshi katha from these places:</span></p>
<p><span style="color: #000000;">Bangla Academy</span></p>
<p><span style="color: #000000;">Design Centre, BSCIC</span></p>
<p><span style="color: #000000;">Folk Art and Crafts Foundation</span></p>
<p><span style="color: #000000;">Bangladesh National Museum</span></p>
<p><span style="color: #000000;"><b>And if you are into buying this fantastic crafts for your own:</b></span></p>
<p><span style="color: #000000;">Bangladesh Rural Development Board (BRDB), Karu Palli Sales Centre</span></p>
<p><span style="color: #000000;">Kumudini Handicrafts</span></p>
<p><span style="color: #000000;">BRAC-Aarong</span></p>
<p>&nbsp;</p>
<h3><span style="color: #000000;"><b>Jamdani – Taat Shilpo </b></span></h3>
<p><span style="color: #000000;">Another Bangladeshi wonder which is mesmerizing the whole world for ages is Jamdani. Jamdani, a find hand oven cotton cloth which is believed to be a fusion of the ancient cloth-making techniques of Bengal with the Muslins produced by the Bengali Muslims of medieval period, is the most expensive product and one of the most artistic product which requires the most lengthy and dedication from the makers. Apart from that our Tat Shilpo is also famous for its design and unique way of being produced.</span></p>
<p><span style="color: #000000;">You can buy Jamdani products from any store that sells Saree in Bangladesh. To be specific Baily Road and Mirpur Benaroshi is famous for Saree stores. And for products made of Tat you can visit:</span></p>
<p><span style="color: #000000;">Bangladesh Rural Development Board (BRDB), Karu Palli Sales Centre</span></p>
<p><span style="color: #000000;">Kumudini Handicrafts</span></p>
<p><span style="color: #000000;">BRAC-Aarong</span></p>
<p>&nbsp;</p>
<h3><p><span style="color: #000000;"><b>Rickshaw Painting</b></span></p></h3>
<p><span style="color: #000000;">Just like rickshaw (as a vehicle), rickshaw art in Bangladesh is the most popular part of our pop culture. The colors are so vivid, so raw and so bold that it will take your breaths away. It’s the art of people; the people with a true Bangladeshi heart. The topics and themes may have been cliché, but the integral stance is so much strong.</span></p>
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