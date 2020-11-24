<html><head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
	<div class="topbar">
	<table>
	<td></td>
	<td class="bartitle"><h1 class="title">Shopping cart</h1></td>
	<td>
	</td>
	<td class="login"><a href="index.php" class="login" style="border: solid palevioletred 1px; background: white;">To shop!</a></td>
	<td class="basket"><a href="#basket"><img title="basket" alt="basket" class=bas src="basket.png"></a></td>
	</table>
	</div>
	<br>
	<div class="login_menu" style="background: paleturquoise;">
	<?php
	session_start();
	$basket = unserialize(file_get_contents("basket.csv"));
	$total = 0;
	foreach ($basket as $k)
	{
		$basket2[] = $k['name']. "<br/>Price: ".$k['price']."€";
		$total += (float)$k['price'];
	}
	$basket2 = array_count_values($basket2);
	$hype[] = "<p>order:</p>";
	foreach ($basket2 as $key => $value)
	{
		echo "<p style=\"font-family: Arial; background-color: lightpink; border: solid palevioletred 1px;\">Product: ".$key."<br> Quantity: ".$value."</p><br>";
		$hype[] = "<p style=\"font-family: Arial; background-color: lightpink; border: solid palevioletred 1px;\">Product: ".$key."<br> Quantity: ".$value."</p><br>";
	}
	echo "<p style=\"font-family: Arial; background-color: lightpink; border: solid palevioletred 1px;\">Total price: ".$total."€</p>";
	if ($_SESSION['current_user'])
		echo "<form method=\"POST\"><input type=\"submit\" name='button1' value='Validate'></form>";
	if ($_POST['button1'] === "Validate")
		{
			$order = file_get_contents("orders.csv");
			$p = unserialize(file_get_contents("basket.csv"));
			$orders[] = $hype;
			foreach ($orders as $k)
				file_put_contents("orders.csv", $k, FILE_APPEND);
			file_put_contents("orders.csv", "\n", FILE_APPEND);
			unlink("basket.csv");
			header('Location: basket_page.php');
		}
	?>
	</div>
</html></body>