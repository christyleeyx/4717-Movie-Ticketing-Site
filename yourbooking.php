<!-- This is far from done im sorry php is confusing me  -->

<?php
$conn = mysqli_connect("localhost","root","","mmoviesdb");

if (mysqli_connect_errno()) {
echo 'Error: Could not connect to database.  Please try again later.';
exit;
}

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
			$sqlcus = "SELECT uname, email, phone FROM customer";
		
			if (!$result = mysqli_query($conn, $sqlcus)) 
				{ echo "Failed to retrieve information". mysqli_error($conn); }
			$result = $conn->query($sqlcus);
			$phone = $_POST['phone'];
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					if ($phone == $row["phone"]) 
						{echo "<h4>	Name: " . $row["uname"]. " <br> 
									Email: " . $row["email"]. "<br> 
									Phone number: " . $row["phone"]. " 
							  </h4> ";}				
					else {
						echo "data is not input.";	
						}
				}
			} else {
			echo "0 results";
			}
			// movietitle, showdate, showtime, showseats

			// $queryuserid = "SELECT user_ID FROM `orders` WHERE (phone='$phone')";
			// $userId = mysqli_query($conn, $queryuserid);

			// print_r($userId);
		  $queryorder = "SELECT mv.title, sh.showdate, sh.showtiming, ss.seat
			FROM `shows` sh
			INNER JOIN ( SELECT show_ID FROM `orders` WHERE phone='$phone' ) o
			  ON sh.show_ID = o.show_ID
			INNER JOIN `movie` mv
			  ON sh.movie_ID = mv.movie_ID
			INNER JOIN `show_seat` ss
			  ON sh.show_ID = ss.show_ID
			";

		  // $queryorder = "SELECT mv.title, sh.showdate, sh.showtiming
			// FROM `shows` sh
			// INNER JOIN ( SELECT show_ID FROM `order` WHERE phone='$phone' ) o
			//   ON sh.show_ID = o.show_ID
			// INNER JOIN `movie` mv
			//   -- ON sh.movie_ID = mv.movie_ID
			// 	";
			
			$resultorder = mysqli_query($conn, $queryorder);
			$bookings = mysqli_fetch_all($resultorder, MYSQLI_ASSOC);
			mysqli_free_result($resultorder);
			print_r($bookings);
	
			// $sqlord = "SELECT uname, email, phone FROM orders";
		
			// if (!$result2 = mysqli_query($conn, $sqlord)) 
			// 	{ echo "Failed to retrieve information". mysqli_error($conn); }
			// $result2 = $conn->query($sqlord);
			// $phone = $_POST['phone'];
			// if ($result->num_rows > 0) {
			// // output data of each row
			// 	while($row = $result->fetch_assoc()) {
			// 		if ($phone == $row["phone"]) 


			// $sqlcustorder = "SELECT orders.OrderID, Customers.CustomerName, Shippers.ShipperName
			// FROM ((Orders
			// INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)
			// INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);

			$conn -> close();	

			?>

  </div>
  </div>
  </div>
</body>

</html>