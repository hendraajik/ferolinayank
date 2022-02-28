                                                                                        
<title>Ferolin~</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style type="text/css">
	body{
		overflow: hidden;
		background: black;
		width: 100%;
		height: 100vh;
	}
	.love{
		text-decoration: none;
		color: #FFF;
	}
	.love:hover{
		text-decoration: none;
		color: red;
	}
	.jam,.ucapan{
		font-weight: bold;
		font-family: 'Josefin Sans', cursive;
	  	margin: 0px;
	  	padding: 0px;
	  	position: absolute;
	  	color: #fff;
	  	transition: all 5s ease, color 1s ease;
	}
	.jam{
	  	opacity: 1;
	  	font-size: 30pt;
	  	left: 50%;
	  	bottom: 70%;
	  	transform: translate(-50%,calc(50% - 0px));
	}
	.ucapan{
	  	font-size: 30pt;
	  	left: 50%;
	  	bottom: 65%;
	  	text-align: center;
		transform: translate(-50%,calc(50% + 100px));
	}

	.kotak{
  			position: absolute;
  			top: 0;
  			left: 0;
  			width: 100%;
  			height: 100%;
  			overflow: hidden;
  			z-index: -1;
  		}
  		.kotak li{
  			position: absolute;
  			display: block;
  			list-style: none;
  			width: 10px;
  			height: 10px;
  			background: rgba(255,255,255,0.2);
  			animation: animate 20s linear infinite; 
  			bottom: -150px;
  			transition: all 1s ease;
  		}
  		.kotak li:nth-child(1){
  			left: 86%;
  			width: 30px;
  			height: 30px;
  			animation-delay: 0s;
  		}
  		.kotak li:nth-child(2){
  			left: 12%;
  			width: 30px;
  			height: 30px;
  			animation-delay: 1.5s;
  			animation-duration: 10s;
  		}
  		.kotak li:nth-child(3){
  			left: 70%;
  			width: 50px;
  			height: 50px;
  			animation-delay: 5.5s;
  		}
  		.kotak li:nth-child(4){
  			left: 42%;
  			width: 40px;
  			height: 40px;
  			animation-delay: 0s;
  			animation-duration: 15s; 
  		}
  		.kotak li:nth-child(5){
  			left: 15%;
  			width: 50px;
  			height: 50px;
  			animation-delay: 3.5s;
  		}
	  		@keyframes animate{
  			0%{
  				transform: translateY(0) rotate(0deg);
  				opacity: 1;
  			}
  			100%{
  				transform: translateY(-100vh) rotate(360deg);
  				opacity: 0;
  			}
  		}
  		@keyframes animate2{
  			0%{
  				transform:rotate(0deg);
  			}
  			100%{
  				transform:rotate(360deg);
  			}
  		}
  		@keyframes animate3{
  			0%{
  				transform:rotate(360deg);
  			}
  			100%{
  				transform:rotate(0deg);
  			}
  		}
  		@media only screen and (max-width: 900px), screen and (max-height: 700px) {
  			.jam,.ucapan{
  				transition: all 1s ease;
  			}
			.jam{
		  		font-size: 40pt;
		  		transform: translate(-50%,calc(50% - 0px));
		  	}
		  	.ucapan{
		  		font-size: 25pt;
		  		transform: translate(-50%,calc(50% + 50px));
		  	}
  		@media only screen and (max-width: 500px){
  			.ucapan{
		  		font-size: 10pt;
		  	}
  		}
</style>

<body>
<div class="container">
	<ul class="kotak">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	<div class="jam" id="time">
		00:00:00
	</div>
	<div class="ucapan" id="Ferolin">

	</div>
</div>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
	var H;
	var M;
	var S;
	function bulat(i){
		if(i < 10){
			i = "0" + i;
		}
		return i;
	}
	function waktu(){
		var today = new Date();
		var h = today.getHours();
		var m = today.getMinutes();
		var s = today.getSeconds();

		H = h;
		M = m;
		S = s;

		m = bulat(m);
		s = bulat(s);

		document.getElementById("time").innerHTML = h + ":" + m + ":" + s;

		t = setTimeout(function(){
			waktu()
		}, 500)
	}

	function checkwaktu(jam){
		if(H < 4){
			return 1;
		}else if(H < 9){
			return 1;
		}else if(H <= 12){
			return 1;
		}else if(H < 15){
			return 0;
		}else if(H < 19){
			return 1;
		}else if(H < 21){
			return 0;
		}else if(H < 22){
			return 0;
		}else if(H < 23){
			return 0;
		}else{
			return 0;
		}
	}

	function background(){
		if(checkwaktu(H) == 1){
			$("body").css("background", "#FFF");
			$(".jam").css("color", "#000");
			$(".ucapan").css("color", "#000");
			$(".kotak li").css("background", "#000");
		}
	}

	function Ferolin(){
		if(H < 4){
			text = "Jangan Begadang, Tidur. <a class=\"love\" href=\"#\" style=\"color: black;\" onclick=jadian()>&hearts;</a>";
		}else if (H < 9){
			text = "Good Morning, Ferolin <a class=\"love\" style=\"color: black;\" href=\"#\" onclick=jadian()>&hearts;</a>";
		}else if(H <= 12){
			text = "Jangan Lupa Makan Siang <a class=\"love\" href=\"#\" style=\"color: black;\" onclick=jadian()>&hearts;</a>";
		}else if(H < 15){
			text = "Good Afternoon, Ferolin <a class=\"love\" href=\"#\" onclick=jadian()>&hearts;</a>";
		}else if(H < 19){
			text = "Have A Nice Day, Ferolin <a class=\"love\" href=\"#\" style=\"color: black;\" onclick=jadian()>&hearts;</a>";
		}else if(H < 21){
			text = "Good Evening, Ferolin <a class=\"love\" href=\"#\" onclick=jadian()>&hearts;</a>";
		}else if(H < 22){
			text = "Siapin Buat Besok! Belajar <a class=\"love\" href=\"#\" onclick=jadian()>&hearts;</a>"
		}else if(H < 25){
			text = "Good Night, Ferolin <a class=\"love\" href=\"#\" onclick=jadian()>&hearts;</a>";
		}

		document.getElementById("Ferolin").innerHTML = text;
	}

	function jadian(){
		document.getElementById("Ferolin").innerHTML = "Jadian yuk? <a class=\"love\" onclick=jadian()>&hearts;</a>";
	}
	waktu();
	background();
	Ferolin();
	
</script>
