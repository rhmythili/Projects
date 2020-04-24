<?php
// starting the session
session_start();
//check if user is already logged in, if yes direct him to success page
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    header("Location:success.php");
}
//destroying the session
else{
	session_destroy();
}
?>  
  <html>
  <head>
    <title>Menu</title>
	<!--importing external style sheet to style the table -->
	<link rel="stylesheet" type="text/css" href="Table.css">
	<meta charset="utf-8">
	<!--Using bootstrap libraries to design the home page-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<h1>MULTI CUISINE RESTAURANT</h1>
	<!--Code to display icons on the navigation bar and navigate to respective pages-->
		<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">MULTI CUISINE RESTAURANT</a>
        </div>
        <ul class="nav navbar-nav">
		<li><a href="info.php">MY INFO</a></li>
          <li><a href="home.php">HOME</a></li>
		<li class="active"><a href="menu.php">MENU</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
		  <li><a href="https://www.grubhub.com/delivery/de-newark" target="_blank">ORDER ONLINE</a></li>
		  <li><a href="logout.php">LOGOUT</a></li>
        </ul>
        </div>
    </nav>
	
	<h3>MENU</h3>
	<!--Table to display the menu items and their prices-->

              <table align="center" class="tabledata" width=70%>
			    <col width="10">
				<col width="30">
				<col width="60">
                <tr>
                    <th>ITEM</th>
                    <th>PRICE</th>
					<th>DESCRIPTION</th>
                </tr>
                <tr>
                    <td>Fried Calamari</td>
                    <td>$16</td>
					<td>Rings of squid coated in a super crispy, crunchy shell, dipped in a little marinara or aioli</td>
                </tr>
                <tr>
                    <td>Burger</td>
                    <td>$15</td>
					<td>VEGGIE barbecue “pulled” carrots, pickled jalapeño peppers, black bean mash, cilantro, purple cabbage</br>
					CHICKEN:grilled chicken with different varieties of veggies stuffed
					</td>
                </tr>
                <tr>
                    <td>Tacos</td>
                    <td>$9</td>
					<td>Choice of flour or corn tortillas</br>
					SHRIMP: Crispy fried shrimp, orchard salsa, spiced crema, daikon radish </br>
					VEGGIE barbecue “pulled” carrots, pickled jalapeño peppers, black bean mash, cilantro, purple cabbage </td>
                </tr>
                <tr>
                    <td>Nachos</td>
                    <td>$12</td>
					<td>chili, cheddar-jack cheese, pico de gallo, jalapeño peppers, sour cream,</br>
					scallions, house-cut tortilla chips 12 add: house-made guac $2 grilled chicken $4 chorizo $4</td>
                </tr>
                <tr>
                    <td>Cauliflower Wings</td>
                    <td>$11</td>
					<td>with carrot sticks, celery sticks. choose a style: buffalo: with bleu cheese purée |</br>
					garlic parmesan: with buttermilk ranch dressing cauliflower (vegan & vegetarian) </br>
					$12 all-white meat breaded chicken $11</td>
                </tr>
                <tr>
                    <td>Crab Fondue</td>
                    <td>$12</td>
					<td>claw crab meat fondue, heirloom carrots, tomatoes, broccoli, cauliflower, toast points </td>
                </tr>
                <tr>
                    <td>Falafel</td>
                    <td>$10</td>
					<td>falafel, tomato-cucumber-onion-parsley salsa, alfalfa sprouts, lettuce, tahini, grilled pita </td>
                </tr>
                <tr>
                    <td>Tandoori Chicken</td>
                    <td>$13</td>
					<td>Chicken leg & thie pieces are marinated overnight in yogurt with herbs,
					spices and cooked on skewers in tandoor(clay oven)</td>
                </tr>
                <tr>
                    <td>Mac & Cheese</td>
                    <td>$6.50</td>
					<td> cheesy, ultra creamy, and topped with a crunchy Panko-Parmesan topping</td>
                </tr>
                <tr>
                    <td>Chicken Biryani</td>
                    <td>$14</td>
					<td>It is an indian chicken and basmati rice receipe that is cooked on dum over slow heat marinated with fresh herbs,spices.</td>
                </tr>
                <tr>
                    <td>Chinese Noodles</td>
                    <td>$12</td>
					<td>Special noodles tossed with your choice (egg/veg/chicken/shrimp)</td>
                </tr>
                <tr>
                    <td>South Indian Combo</td>
                    <td>$12</td>
					<td>Steamed rice and lentil patties served with sambar, home made chutney & deep fried lentil donuts</td>
                </tr>
                <tr>
                    <td>Snack Combo</td>
                    <td>$10</td>
					<td>A mix of Aloo bonda,veg samosa and spicy cut mirchi</td>
                </tr>
				<tr>
                    <td>Sea food Platter</td>
                    <td>$25</td>
					<td>Sampler of all sea food items with chefs special receipe</td>
                </tr>
				<tr>
                    <td>Veg Platter</td>
                    <td>$20</td>
					<td>Mix of any three veg appatizers of your choice</td>
                </tr>
				<tr>
                    <td>Tandoor Sampler</td>
                    <td>$18</td>
					<td>Assorted sampler of tandoor items</td>
                </tr>
				 <tr>
                    <td>Pani Puri</td>
                    <td>$8</td>
					<td>Crisp fried dough balls (puri) are stuffed with potatoes, sprouts, spicy tangy water or sweet chutney.</td>
                </tr>
                <tr>
                    <td>Masala Chai</td>
                    <td>$4</td>
					<td>Dairy</td>
                </tr>
                <tr>
                    <td>Rasmalai</td>
                    <td>$5</td>
					<td>2pcs, of snowy oats of sweetend milk in rose water flavoured milk & garnished with pistachio nuts </td>
                </tr>
                <tr>
                    <td>Gulab Jamun</td>
                    <td>$6</td>
					<td>Pastry ball made from milk dough fried until golden brown & served in sugary syrup with cardamom. Topped with cocoa and a hint of coconut</td>
                </tr>
            </table>
			<!--Footer to display copyright-->
            <footer id="footer">Copyright &copy; 2020, Multi Cuisine Restaurant. All rights reserved.</footer>

    </body>

    </html>