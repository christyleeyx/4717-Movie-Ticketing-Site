let selectMenu = document.querySelector("#movies");
// let genre = document.querySelector(".right h2");
let container = document.querySelector(".nowshowing00");

selectMenu.addEventListener("change", function(){
	let genreName = this.value;
	// genre.innerHTML = this[this.selectedIndex].text;  

	let http = new XMLHttpRequest();
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			let response = JSON.parse(this.responseText);
			// let response = this.responseText;
			let out = "";
			for(let item of response){
				out += `
						<div class="nowshowing01">
							<div class="nowshowing02">
								<img alt="" src="${item.image}">
								<div class="movie_details">
									<h3 class="movie_title">${item.title}</h3>
									<p class="movie_desc">${item.description}</p>
									<a href="booking.php?id=${item.movie_id}"><button class="book_tickets">Book Tickets</button></a>
								</div>
								<div class="movie_timings">
									<h5 class="movietimings_title">Timings</h5>
									<div class="timing_buttons">
										<button class="time_button">11:15 am</button>
										<button class="time_button">12:45 pm</button>
										<button class="time_button">1:15 pm</button>
										<button class="time_button">5:50 pm</button>
										<button class="time_button">9:00 pm</button>
									</div>
								</div>
							</div>
						</div>
				`;
			}
			container.innerHTML = out;
		};
	}	
	http.open('POST', "script.php", true);
	http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
	http.send("genre="+genreName);
});