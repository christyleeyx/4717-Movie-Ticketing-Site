<?php
$conn = mysqli_connect("localhost","root","","mmoviesdb");

if (mysqli_connect_errno()) {
echo 'Error: Could not connect to database.  Please try again later.';
exit;
}

$sql = "SELECT uname, email, phone FROM customer ORDER BY phone";
if (!$result = mysqli_query($conn, $sql)) { echo "Failed to retrieve information". mysqli_error($conn); }
$prices = array();
// while ($row = $result->fetch_assoc()){
// 	$sales[] = $row;
// }
// $javaPrice = $sales[0]['totalPrice'];
// $singleCPrice=$sales[1]['totalPrice'];
// $doubleCPrice=$sales[2]['totalPrice'];
// $singleEPrice=$sales[3]['totalPrice'];
// $doubleEPrice=$sales[4]['totalPrice'];

// $javaQty = $sales[0]['productQty'];
// $singleCQty=$sales[1]['productQty'];
// $doubleCQty=$sales[2]['productQty'];
// $singleEQty=$sales[3]['productQty'];
// $doubleEQty=$sales[4]['productQty'];

// $sql = "SELECT productName, productCategory FROM totalsales ORDER BY totalPrice desc limit 0,1";
// if (!$result = mysqli_query($conn, $sql)) { echo "Failed to retrieve movie info". mysqli_error($conn); }
// $row = $result->fetch_array();
// $best=$row['productName'];
// $popular=$row['productCategory'];

$conn -> close();	

?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" , initial-scale="1.0">
	<link rel="stylesheet" href="style.css">
	<script src="index.js"></script>
	<script src="https://kit.fontawesome.com/d4fd6bf7f6.js" crossorigin="anonymous"></script>

	<header>
		<a href="index.html" class="logo">
			<i class="fa-solid fa-meteor fa-xl mainiconcolor"></i>
			<!-- <img src="weblogo.png" class="weblogo" /> -->
			METEOR<span>MOVIES</span>
		</a>
		<b class="topnav">
			<a href="index.html">Home</a>
			<a class="active" href="checkbooking.html">Check Booking</a>
			<a href="location.html">Location</a>
		</b>
		<a href="cart.html">
			<img src="cart.png" class="weblogo" />
		</a>
	</header>
</head>

<body>
	<div id="contentCont">
		<h2>
			<br>Your Bookings:<br>
		</h2>
		<?php 
			if(!empty($_POST['customer'])) {
				foreach ($_POST['customer'] as $phone) {
					if($phone == "phone"){
						echo "<table border='0' cellspacing='2' style='width:50%' align='center'>";
						echo "<tr>";
						echo "<td><b>Name</b></td>";
						echo "<td><b>'.$uname.'</b></td>";
						echo "</tr>";
						echo '<tr>';
						echo '<td><b>Email<b></td>';
						echo '<td>'.$email.'</td>';
						echo '</tr>';
						echo '<td><b>Phone number<b></td>';
						echo '<td>'.phone.'</td>';
						echo '<td>'.$singleCQty+$doubleCQty.'</td>';
						echo '</tr>';
						echo "</table><br>";
					} else {
						$msg = "Phone number has not booked anything yet";
							echo "<script type='text/javascript'>alert('$msg');window.location.href='checkbooking.html';</script>";
					}
	
				}
			}	
			?>

			</div>
        </div>
   </div>
</body>

</html>