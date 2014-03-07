<?php


    //check if the set variable exists
    if (isset($_GET['populate_popular_foods']))
    {
        populate_popular_foods($_GET['populate_popular_foods']);
    }

    function populate_popular_foods($number)
    {
		if ($number=1)
		  {
			echo "<script type='text/javascript'>alert('selected 1');</script>";
			document.getElementById('boldStuff').innerHTML = "Big Mac Burger";
			$popular_food_description = "A double layer of sear-sizzled 100% pure beef mingled with special sauce on a sesame seed bun and topped with melty American cheese, crisp lettuce, minced onions and tangy pickles.";
		  }
		else if ($number=2)
		  {
			echo "<script type='text/javascript'>alert('selected 2');</script>";
			$popular_food_name = "Spicy Tuna";
			$popular_food_description = "You'll love this tasty new sub! Try it our way with our delicious tuna, creamy Sriracha sauce, tomatoes, green peppers, and jalapenos, or add your favorite veggies to make it yours!";
			 }

        
    }


 
function create_center_content() 
{
	
     	echo '<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Iphone Apple</a></div>
                 <div class="product_img"><a href="details.html"><img src="images/p4.gif" alt="" title="" border="0" /></a></div>
                 <div class="prod_price"><span class="price">270$</span></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
            <div class="prod_details_tab">
            <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" title="" border="0" class="left_bt" /></a>
            <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" title="" border="0" class="left_bt" /></a>           
            <a href="details.html" class="prod_details">details</a>             
            </div>                     
        </div>';
};


$page_title = 'Health Master';
$popular_food_name = "Big Mac Burger";
$popular_food_description = "A double layer of sear-sizzled 100% pure beef mingled with special sauce on a sesame seed bun and topped with melty American cheese, crisp lettuce, minced onions and tangy pickles.";

echo "<script type='text/javascript'>alert('$popular_food_name');</script>";


echo '
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Electronix Store</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>



<div id="main_container">
	<div class="top_bar">
    	<div class="top_search">
        	<div class="search_text"><a href="#">Advanced Search</a></div>
            <input type="text" class="search_input" name="search" />
            <input type="image" src="images/search.gif" class="search_bt"/>
        </div>
        
    
    </div>
	<div id="header">
        
        <div id="logo">
            <a href="index.html"><img src="images/new-apple-logo-3.png" alt="" title="" border="0" width="180" height="170" /></a>
	    </div>
        
        <div class="oferte_content">
        	<div class="top_divider"><img src="images/header_divider.png" alt="" title="" width="1" height="164" /></div>
        	<div class="oferta">
            
           		<div class="oferta_content">
                	<img src="images/mcdonalds-Big-Mac.png" width="94" height="92" border="0" class="oferta_img" />
                	
                    <div class="oferta_details">
                            <div class="oferta_title" id="id_popular_food_name">';
							
							echo "$popular_food_name";
							echo ' </div>
                            <div class="oferta_text"  id="id_popular_food_description">';
							echo "$popular_food_description";
							
							echo'</div>
                            <a href="details.html" class="details">details</a>
                    </div>
                </div>
                <div class="oferta_pagination">';
                     echo '<a href="?populate_popular_foods=1">1</a>
                     <a href="?populate_popular_foods=2">2</a>
                     <a href="?populate_popular_foods=3">3</a>
                     <a href="?populate_popular_foods=4">4</a>
                     <a href="?populate_popular_foods=5">5</a>
                     <a href="?populate_popular_foods=6">6</a> 
                             
                </div>        

            </div>
            <div class="top_divider"><img src="images/header_divider.png" alt="" title="" width="1" height="164" /></div>
        	
        </div> <!-- end of oferte_content-->
        

    </div>
    
   <div id="main_content"> 
   
            <div id="menu_tab">
            <div class="left_menu_corner"></div>
                    <ul class="menu">
                         <li><a href="index.html" class="nav1">  Home </a></li>
                         <li class="divider"></li>
                         <li><a href="#" class="nav2">Browse</a></li>
                         <li class="divider"></li>
                         <li><a href="#" class="nav3">BMI Calculator</a></li>
                         <li class="divider"></li>
                         <li><a href="#" class="nav4">Locate Food Courts</a></li>
                         <li class="divider"></li>
                         <li><a href="contact.html" class="nav6">Contact Us</a></li>
                         <li class="divider"></li>
                         
                    </ul>

             <div class="right_menu_corner"></div>
            </div><!-- end of menu tab -->
            
    <div class="crumb_navigation">
    Navigation: <span class="current">Home</span>
    
    </div>        
    
    
   <div class="left_content">
    <div class="title_box">Popular Brands</div>
    
        <ul class="left_menu">
        <li class="odd"><a href="services.html">McDonald</a></li>
<li class="odd"><a href="services.html">Subway</a></li>
<li class="odd"><a href="services.html">Panera_Bread</a></li>
<li class="odd"><a href="services.html">Olive_Garden</a></li>
<li class="odd"><a href="services.html">Applebee</a></li>
<li class="odd"><a href="services.html">Taco_Bell</a></li>
<li class="odd"><a href="services.html">Wendy</a></li>
<li class="odd"><a href="services.html">Trader_Joe</a></li>
<li class="odd"><a href="services.html">Burger_King</a></li>
<li class="odd"><a href="services.html">Starbucks</a></li>
<li class="odd"><a href="services.html">Dunkin_Donuts</a></li>
<li class="odd"><a href="services.html">Dairy_Queen_Brazier</a></li>
<li class="odd"><a href="services.html">KFC</a></li>
<li class="odd"><a href="services.html">Pizza_Hut</a></li>
<li class="odd"><a href="services.html">Domino_Pizza</a></li>

        </ul> 
        
        
   ';
     
     
        
    
   echo '</div><!-- end of left content -->
   
   
   <div class="center_content">
   	<div class="center_title_bar">Latest Products</div>';
    
    	
    
    create_center_content();
   
   echo '</div><!-- end of center content -->
   
   <div class="right_content">
   		 
   
 
     
     
     
   <div class="title_box">Categories</div>
    
        <ul class="left_menu">
         <li class="odd"><a href="services.html">	Beverages	</a></li>
 <li class="odd"><a href="services.html">	Breakfast	</a></li>
 <li class="odd"><a href="services.html">	Chicken	</a></li>
 <li class="odd"><a href="services.html">	Chips & Fries	</a></li>
 <li class="odd"><a href="services.html">	Condiments	</a></li>
 <li class="odd"><a href="services.html">	Bakery	</a></li>
 <li class="odd"><a href="services.html">	Desserts	</a></li>
 <li class="odd"><a href="services.html">	Kids Menu	</a></li>
 <li class="odd"><a href="services.html">	Pizzas	</a></li>
 <li class="odd"><a href="services.html">	Salad Dressings	</a></li>
 <li class="odd"><a href="services.html">	Salads	</a></li>
 <li class="odd"><a href="services.html">	Sandwich Components	</a></li>
 <li class="odd"><a href="services.html">	Sandwiches & Burgers	</a></li>
 <li class="odd"><a href="services.html">	Sides	</a></li>
 <li class="odd"><a href="services.html">	Soups & Chilis	</a></li>
 <li class="odd"><a href="services.html">	Appetizers	</a></li>
 <li class="odd"><a href="services.html">	Meal Components	</a></li>
 <li class="odd"><a href="services.html">	Burritos	</a></li>
 <li class="odd"><a href="services.html">	Other Menu Items	</a></li>
 <li class="odd"><a href="services.html">	Quesadillas	</a></li>
 <li class="odd"><a href="services.html">	Sauces	</a></li>
 <li class="odd"><a href="services.html">	Tacos	</a></li>
 <li class="odd"><a href="services.html">	Ales & Beers	</a></li>
 <li class="odd"><a href="services.html">	Pastas	</a></li>

        </ul>      
     
     
   </div><!-- end of right content -->   
   
            
   </div><!-- end of main content -->
   
   
   
   <div class="footer">
   

        <div class="left_footer">
        <img src="images/footer_logo.png" alt="" title="" width="170" height="49"/>
        </div>
        
        <div class="center_footer">
        Template name. All Rights Reserved 2008<br />
        <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.jpg" alt="free templates" title="free templates" border="0" /></a><br />
        <img src="images/payment.gif" alt="" title="" />
        </div>
        
        <div class="right_footer">
        <a href="index.html">home</a>
        <a href="details.html">about</a>
        <a href="details.html">sitemap</a>
        <a href="details.html">rss</a>
        <a href="contact.html">contact us</a>
        </div>   
   
   </div>                 


</div>

<!-- end of main_container -->
</body>
</html>

';
