<?php
//Variable Declaration
$username = $_POST["name"];
$password = $_POST["password"];
$shipping = $_POST["shippingPref"];
$basketball = $_POST["product1"];
$football = $_POST["product2"];
$jetPack = $_POST["product3"];
$helmet = $_POST["product4"];
$microTrebuchet = $_POST["product5"];
$bball = 16.25;
$fball = 12.94;
$jPack = 149.99;
$helm = 19.99;
$mTrebuchet = 49.99;
$subBBall = $bball * $basketball;
$subFBall = $fball * $football;
$subJP = $jetPack * $jPack;
$subHelm = $helmet * $helm;
$subTreb = $microTrebuchet * $mTrebuchet;
$grandTOTAL = $subBBall + $subFBall + $subJP + $subHelm + $subTreb + $shipping;
$shipPref;
// Define Users Shipping Preference
	if($shipping==0){
		$shipPref = "7 Day";
	}
	else if($shipping==5){
		$shipPref ="3 Day";
	}
	else if($shipping==50){
		$shipPref = "Overnight Express";
	}

echo "<head><title>Customer Reciept</title>";
echo "<link type='text/css' rel='stylesheet' href='style.css'></head>";

echo "<body class='center'>";
  echo "<div class='form'>";
    echo "<h1 class='center'>Customer Receipt</h1>";
      echo "Thank you for your purchase!<br>";
        echo "<br>Welcome " .$username."<br>";
        echo "Your password is: " .$password."<br><br>";
// Table Head
        echo "<table> <thead> <tr>";
        echo "<th class='no_border'>";
        echo "</th><th>Quantity</th>";
        echo "<th>Cost Per Item</th>";
        echo "<th>Sub Total</th>";
        echo "</tr></thead>";
// Table Body Values
echo "<tbody>";
echo "<tr><th>Basketball(s)</th> <td>" .$basketball. "</th> <td>$" .$bball. "</th> <td>$" .$subBBall. "</th></tr>";
echo "<tr><th>Football(s)</th> <td>" .$football. "</th> <td>$" .$fball. "</th> <td>$" .$subFBall. "</th></tr>";
echo "<tr><th>Jet Pack(s)</th> <td>" .$jetPack. "</th> <td>$" .$jPack. "</th> <td>$" .$subJP. "</th></tr>";
echo "<tr><th>Helmet(s)</th> <td>" .$helmet. "</th> <td>$" .$helm. "</th> <td>$" .$subHelm. "</th></tr>";
echo "<tr><th>Micro Trebuchet(s)</th> <td>" .$microTrebuchet. "</th> <td>$" .$mTrebuchet. "</th> <td>$" .$subTreb. "</th></tr>";
echo "<tr><th>Shipping</th> <td colspan='2'>" .$shipPref." </td> <td>$" .$shipping. "</td></tr>";
echo "</tbody>";
// Table Total Footer
echo "<tfoot><tr>";
echo "<th colspan='3'>Total Cost</th><th class='total'>$" .$grandTOTAL. "</th>";
echo "</tr></tfoot></table>";
echo "</div></body>";
?>
