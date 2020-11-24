<?php
session_start();
$p = unserialize(file_get_contents("products.csv"));
foreach ($p as $c)
{
	if ($c["category"] === "hat")
		$hat[] = "<div class=\"container\"><p class=\"name\">".$c["name"]."\n</p><img src=\"".$c["image"]."\">\n<form method=\"POST\"><input type=\"submit\" name='button' value='".$c["name"]."'class=\"price\">".$c["price"]."€</></form>\n</div>\n";
	else if ($c["category"] === "pants")
		$pants[] = "<div class=\"container\"><p class=\"name\">".$c["name"]."\n</p><img src=\"".$c["image"]."\">\n<form method=\"POST\"><input type=\"submit\" name='button' value='".$c["name"]."'class=\"price\">".$c["price"]."€</></form>\n</div>\n";
	else if ($c["category"] === "shoes")
		$shoes[] = "<div class=\"container\"><p class=\"name\">".$c["name"]."\n</p><img src=\"".$c["image"]."\">\n<form method=\"POST\"><input type=\"submit\" name='button' value='".$c["name"]."'class=\"price\">".$c["price"]."€</></form>\n</div>\n";
}

function isadmin($current)
{
	if (file_exists("users.csv"))
		$data = unserialize(file_get_contents("users.csv"));
	foreach ($data as $user)
	{
		if ($user['admin'] === "admin" && $user['login'] == $current)
			return (TRUE);
	}
	return (FALSE);
}

if ($_POST['button'])
{
	if (file_exists("basket.csv"))
		$basket = unserialize(file_get_contents("basket.csv"));
	$p = unserialize(file_get_contents("products.csv"));
	foreach ($p as $pr)
	{
		if ($pr['name'] === $_POST['button'])
		{
			$basket[] = $pr;
			file_put_contents("basket.csv", serialize($basket));
		}
	}
}

?>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
	<div class="topbar">
	<table>
	<td></td>
	<td class="bartitle"><h1 class="title">Products</h1></td>
	<?php
		if ($_POST['new'] === "OK" && $_POST['name'] && $_POST['price'] && ($_POST['shoes'] || $_POST['hat'] || $_POST['pants']))
		{
			if (file_exists("products.csv"));
				$data = unserialize(file_get_contents("products.csv"));
			$add = array("name" => $_POST['name'], "price" => $_POST['price'], "category" => "", "quantity" => 0);
			if ($_POST['shoes'] == "shoes")
			{
				$add['category'] = $_POST['shoes'];
				$add['image'] = "shoes.jpg";
			}
			if ($_POST['hat'] == "hat")
			{
				$add['category'] = $_POST['hat'];
				$add['image'] = "hat.jpg";
			}
			if ($_POST['pants'] == "pants")
			{
				$add['category'] = $_POST['pants'];
				$add['image'] = "pants.jpg";
			}
			$data[] = $add;
			file_put_contents("products.csv", serialize($data));
			echo "<span style='color:green;text-align:center;'>Product added! Press 'OK' to see results.</span>";
		}
		else if ($_POST['new'] == "OK" && (!$_POST['shoes'] && !$_POST['hat'] && !$_POST['pants']))
			echo '<span style="color:#FF0000;text-align:center;">choose category</span>';
		else if (($_POST['new'] == "OK") && (!$_POST['name'] || !$_POST['price']))
			echo "fill in all the fields";
	?>
	<td>
	<?php
	if (isadmin($_SESSION['current_user']))
	{
		echo "<form name=\"add_product\" action=\"index.php\" method=\"POST\">
			product name: <input name=\"name\" value=\"\" />
			<br />
			price: <input name=\"price\" value=\"\" />
			<br />
			<input type=\"checkbox\" id=\"shoes\" name=\"shoes\" value=\"shoes\">
			<label for=\"shoes\">shoes</label><br>
			<input type=\"checkbox\" id=\"hat\" name=\"hat\" value=\"hat\">
			<label for=\"hat\">hat</label><br>
			<input type=\"checkbox\" id=\"pants\" name=\"pants\" value=\"pants\">
			<label for=\"pants\">pants</label>
			<input type=\"submit\" name=\"new\" value=\"OK\" /></form>
			<form action=\"ord.php\" method=\"POST\"><input type=\"submit\" name=\"new\" value=\"ORDERS\" /></form>";
	}
	?>
	</td>
	<td class="login"><a href="login_page.php" class="login" style="border: solid palevioletred 1px; background: white;">User</a></td>
	<td class="basket"><a href="basket_page.php"><img title="basket" alt="basket" class=bas src="basket.png"></a></td>
	</table>
	</div>
	<br>
	<div class="product">
		<div class="category">
			<p class="cath">Hats</p>
			<?php
			foreach ($hat as $c)
				echo $c;
			?>
		</div>
		<div class="category">
			<p class="cath">Pants</p>
			<?php
			foreach ($pants as $c)
				echo $c;
			?>
		</div>
		<div class="category">
			<p class="cath">Shoes</p>
			<?php
			foreach ($shoes as $c)
				echo $c;
			?>
		</div>
	</div>
	</body>
</html>