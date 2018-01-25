<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.bank {
			position:absolute;
			left: 400px; 
		}
	</style>
	<title>click</title>
</head>
<body>
	<p id="error"></p>
	
<script type="text/javascript">


	var clicks = 0;
	function onClick() {
		clicks += 1;
		document.getElementById("clicks").innerHTML = clicks;
	};




var heli = 0 ;
var charge = document.getElementById("charge")
function heli_buy() {
var heliValue = 10;
	if (clicks < 10) {
		
		document.getElementById("error").innerHTML = "you dont have enough money";
	return false;
}else {
			document.getElementById("error").innerHTML = "";

}
	
	heli += 1;
	clicks -= parseFloat(heliValue);
	 document.getElementById("heli").innerHTML = heli;
	 	document.getElementById("clicks").innerHTML = clicks;


	 	
}
var	bases = 0;
	function buy_base() {
		if (clicks < 100 || heli < 10) {
		document.getElementById("error").innerHTML = "you dont have enough money/helicopters";

		return false;
	}else {
				document.getElementById("error").innerHTML = "";

	}
	
		bases += 1;
		heli -= 10;
		clicks -= 100;
		document.getElementById("clicks").innerHTML = clicks;
		document.getElementById("heli").innerHTML = heli;
		document.getElementById("bases").innerHTML = bases;
}

	function loan1() {
		clicks += 1000;
		document.getElementById("clicks").innerHTML = clicks;
	}

function ploan() {
	var pro = prompt();
	 clicks += parseInt(pro);
	document.getElementById("clicks").innerHTML = clicks;
}
function give_bank() {
	var prog = prompt();
	clicks -= parseInt(prog);
	document.getElementById("clicks").innerHTML = clicks;
}
</script>
<button type="button" onClick="onClick()">clickme</button>
<button type="button" onclick="heli_buy()">buy helicopter</button>
<button onclick="buy_base()">buy base</button>
<p>money:</p><p id="clicks">0</p>
helicopters:<p id="heli">0</p>
bases:<p id="bases">0</p>

<div class="bank">
<h1>bank</h1>
<button onclick="loan1()">loan of thousand dollars</button>
<button onclick=ploan()>djsk</button>
<button onclick="give_bank()">give bank</button>
</div>
<button onclick="window.location.reload();">reload</button>
 &copy; 2018- <?php date("Y"); ?>
 <script type="text/javascript">
 		document.onkeypress = function(evt) {
    evt = evt || window.event;
    console.log(evt.keyCode)
    if(evt.keyCode == 114){
    	window.location.reload();
    }
};

/* 
//1.setting a variable that gives a random number between -1 and 1.

*/







 </script>
 <script type="text/javascript">
 	var random_val = Math.random(-1,1);

	if (random_val < 0) {
		heliValue -= parseFloat(random_val);
			document.getElementById("heli_va").innerHTML = random_val;
}
	if (random_val > 0) {
		heliValue += parseFloat(random_val);
			document.getElementById("heli_va").innerHTML = random_val;

}
 </script>
<div class="market_value">
	<h1>market value:</h1>
<p id="heli_va"></p>
</div>


 <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>