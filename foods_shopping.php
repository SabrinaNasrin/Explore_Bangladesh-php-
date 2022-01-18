<html>
<head>

	<title>Foods & Shopping</title>
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
                
            <article class="post-205 page type-page status-publish hentry">
                
                <div class="page-content">
                  <h3>Foods</h3>
                    <p><a href="image/biriyani.jpeg"style="float:left;padding-right:15px;padding-bottom:10px;"><img class="alignleft wp-image-1584" src="image/biriyani.jpeg" alt="chicken-biriyani" width="402" height="301"></a></p>
<p style="text-align: justify;"><span style="color: #000000;">Our Bangladeshi cuisine is a classic culinary art-form. Our food is ecstatic; a pure South Asian delicacy. The spectacular combination of our age old traditional values and a diverse range of perfectly blended spices give Bangladesh cuisines a unique taste for which people from all around the world do not hesitate to come back here again. Our foods and spices are so great that now these rule the whole world. Many of you might have already tasted those in abroad in many restaurants that provide Bangladeshi dishes.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Most of the Bangladeshi dishes are based on rice. Abundance of fishes in rivers and ponds and our love towards different varieties of fishes in many forms of dishes make the proverb “Fish and rice makes a Bengali” more meaningful. Specially Shorshe Ilish, a dish of smoked hilsha with mustard-seed paste, is considered as the most significant and important part of our Bangladeshi cuisine. Apart from that, we also have curry made out of freshly picked vegetables, different kinds of meat, lentils soup, etc in our dishes. And also, bhorta, mashed boiled vegetable such as potato, beans, papya, dal etc seasoned with onion, chili, mustard oil/ghee and other pungent spices, adds an extra emotional and obviously culinary appeal to our dishes.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Well, apart from the regular dishes mentioned previously, some dishes are specially designed to spice up our celebration and festivals. Biriyani or polao served with meat curries (chicken, beef, lamb etc.) seasoned with proper spices and ghee (butter) gives us and our celebration a heavenly smell and a satisfied tummy.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">We are known for our passions for a wide variety of sweets made from milk. Rasho-gollah, kalo-jam, shandesh, mishti doi, shemai, chamcham… Quite frankly, the list is way too long. Come aboard sweet tooth!</span></p>
<p style="text-align: justify;"><span style="color: #000000;">Although pitha (cake) is popular for celebrating a specific season, but it has a far more reasons to be celebrated for which pitha is always prepared and cherished in any Bangladeshi dinner table all over the year. Most pithas are sweet but that does not stop us from making it spicy. There are some pithas which are made with meat and other spices. The chief ingredients of pitha are: sugarcane, date juice, rice, wheat flour, milk etc. Bhapa, pooli, patishapta, nakshipitha etc are common but celebrated in any Bangladeshi kitchen.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">The deeper you roam around the alleys of any Bangladeshi town, the more exotic your culinary experience will become. Foods found in our streets and restaurants are as traditional as the foods cooked in our home. Iftar at Old Dhaka, jhalmuri (puffed rice with spices), dal puri, smokin’ hot Kebabs, etc. are surely never to be missed.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">While you are trekking through the rough hills of Bandarban or Rangamati, make sure your try the traditional foods of your tribal people. These foods are their heritage and the outcome of their diverse culture.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">You will be amazed to know that when you are visiting each part of Bangladesh, there exist many different local foods which are famous for their individual characteristics. Some go for spice or some go for sweets. The taste is obviously different than the mainstream ones but deep down it only depicts a unique theme; it is Bangladeshi food.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<h3>Shopping</h3>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;<a style="color: #000000;" href="image/handicraft.jpg"><img class="alignnone wp-image-1926" src="image/handicraft.jpg" alt="handicraft" width="310" height="200" ></a>   <a style="color: #000000;" href="image/bangles.jpg"><img class="alignnone wp-image-1927" src="image/bangles.jpg" alt="Sell-Your-Gold-Silver-Platinum-404x256" width="310" height="200" ></a>   <a style="color: #000000;" href="image/jamdani.jpg"><img class="alignnone wp-image-1925" src="image/jamdani.jpg" alt="5a54f3096aa3b7324f03bbacfd3fc234" width="310" height="200" ></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Shopping in Bangladesh is more fun than you can ever imagine. You have probably even bought some from your own country. Our traditional handicrafts are world famous. The price in which these handicrafts are sold in is way cheaper but definitely better. Our country is famous for products like contemporary paintings, wood works, shital pati (mattress having cooling effect), bamboo decoration pieces, cane and conch shell products, gold and silver ornament, cotton, silk, gold, silver, jute, reed, brassware, traditional dolls, leather goods, pink pearls etc. Here are some products you definitely do not want to miss during your visit in Bangladesh. But remember these are not all of it. You will keep discovering hundreds of products all around Bangladesh.</span></p>
<p>&nbsp;</p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Pink Pearl</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Pink pearls are the best buy in Dhaka. These natural products are unparallel in luster. You can buy one from the stores at Gulshan-2 market.</span></p>
<p>&nbsp;</p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Gold &amp; Silver Jewelry</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:left;padding-right:15px;padding-bottom:15px;" href="image/bangles.jpg"><img class="alignleft wp-image-1927 size-full" src="image/bangles.jpg" alt="Sell-Your-Gold-Silver-Platinum-404x256" width="404" height="256" ></a></span></p>
<p style="text-align: justify;"><span style="color: #000000;">A wide range of gold and silver ornaments, silver filigree works etc. are considered by many travelers as exotic and mesmerizing.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Brass &amp; Copperware</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Among the best buys here are brass and copperware trays, wall decorations, vases etc. all are handmade with fine engravings and filigree work.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Jamdani Saree</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;"><a style="color: #000000;float:right;padding-left:15px;padding-bottom:10px;" href="image/jamdani.jpg"><img class="wp-image-1925 alignright" src="image/jamdani.jpg" alt="5a54f3096aa3b7324f03bbacfd3fc234" width="338" height="254" ></a></span><span style="color: #000000;">Another Bangladeshi wonder which is mesmerizing the whole world for ages is Jamdani. Jamdani, a find hand oven cotton cloth which is believed to be a fusion of the ancient cloth-making techniques of Bengal with the Muslins produced by the Bengali Muslims of medieval period, is the most expensive product and one of the most artistic product which requires the most lengthy and dedication from the makers. Apart from that our Tat Shilpo is also famous for its design and unique way of being produced.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">You can buy Jamdani products from any store that sells Saree in Bangladesh. To be specific Baily Road and Mirpur Benaroshi is famous for Saree stores. And for products made of Tat you can visit:</span></p>
<p>&nbsp;</p>

<span style="color: #000000;">&#8226; Bangladesh Rural Development Board (BRDB), Karu Palli Sales Centre</span><br>
<span style="color: #000000;">&#8226; Kumudini Handicrafts</span><br>
<span style="color: #000000;">&#8226; BRAC-Aarong</span>

<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Bangles and Beads</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">You can find many bangles and beads jewelry made by the finest hands of artisans in Bangladesh. Take as many as you can and lost in the colors of life.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Jute Products</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Jute is called the golden fiber of Bangladesh. There are hundreds of products that can be made from jute fiber. This is why you will various jute products in the streets and stores of Bangladesh.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">&nbsp;</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Pottery and Sculpture</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">Clay potters of Bangladesh have been related with their profession for a long time. The manual process of making pottery reflects our potters’ endless passion, devotion and affection to their divine creations. You can easily buy the finest pieces of handmade pottery in souvenir shop in Dhaka.</span></p>
<p style="text-align: justify;"><span style="color: #000000;">As our country has a deep artistic root influenced by the Hindu religion, religious sculpture and crafts — especially the ones which are made by the metal craftsmen of Dhamrai — are exotic in nature as well as passionate in its diverse usage. This 5000 year old tradition is still surviving the some 30 villages around Dhamrai. Even some families in Dhamrai are in this business for 200 years. The brass metal craft artisans of Dhamrai area practice four traditional methods; lost wax method, clay casting, sand casting and hammering. The old wax method is very critical and sophisticated, and only a handful number of artists are capable of this. It will take a few hours to visit the stores of metal crafts in Dhamrai. If you are more curious, you can go inside their house and experience how this is finest piece of art is being produced.</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>Where to go</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">List of Shopping Malls and stores</span></p>
<p style="text-align: justify;"><span style="color: #000000;"><b>What to pay</b></span></p>
<p style="text-align: justify;"><span style="color: #000000;">You may have to bargain if you are buying from street shops. For bigger shops, the price is fixed. The owner of street shops won’t charge for value added tax but the bigger shops will charge for this.</span></p>
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