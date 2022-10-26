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
			<a href="checkbooking.html">Check Booking</a>
			<a href="location.html">Location</a>
		</b>
		<a href="cart.html">
			<img src="cart.png" class="weblogo" />
		</a>
	</header>
</head>

<body>
	<div id="contentCont">
		<div class="container-sec">
			<div class="left-section">
				<!-- idk how to echo the picture of movie selected sorry i dk how to echo anything-->
			</div>
			<div class="right-section">
                <a class="seat">
                    <img src="seatplan.jpg" class="seat" />
                </a>
                <form action="show_post.php" method="post">
                <table class="contact">
                    <tr class="seat-item">
                        <td class="item-content">
                            <label for="seat">*Type your Seat(s) here:</label>
                        </td>
                        <td class="input-field">
                            <input type="text" name="seat" id="seat" required>
                            <!-- <p class="error-msg" id="error-phone"></p> -->
                        </td>
                    </tr>
                </table>

                <br><input type="submit" value="Add to Cart">
                <!-- <br><input type="submit" value="Confirm" href="index.html"> -->
			</div>
		</div>
	</div>
</body>

</html>