

var numSlide = 1;
var resetLoop = false;

$("#pointer li").click(function(){

	var role = $(this).attr("role");
	$("#show li").css({"display":"none"});
	$("#show li:nth-child("+ role +")").fadeToggle(2);
	$("#pointer li").css({"color":"white"});
	$(this).css({"color":"#ffeb1b"});
	$(".slide ul li text").css({"display":"block"});
	resetLoop = true;
	numSlide = role;

});

function go(){

	if(numSlide >= 6){
		numSlide = 1;
	}
	else{
		numSlide++;
	}
	if(numSlide == 6){
		$(".slide ul li text").css({"display":"block"});
	}
	console.log("numSlide",numSlide);
	$("#show li").css({"display":"none"});
	$("#show li:nth-child("+ numSlide +")").fadeIn(6);
	$("#pointer li").css({"color":"white"});
	$("#pointer li:nth-child("+ numSlide +")").css({"color":"#ffeb1b"});
	resetLoop = true;

}

$("#right").click(function(){

	go();

});

$("#left").click(function(){

	if(numSlide <= 1){
		numSlide = 6;
	}
	else{
		numSlide--;
	}
	if(numSlide == 6){
		$(".slide ul li text").css({"display":"block"});
	}
	console.log("numSlide",numSlide);
	$("#show li").css({"display":"none"});
	$("#show li:nth-child("+ numSlide +")").fadeToggle(6);
	$("#pointer li").css({"color":"white"});
	$("#pointer li:nth-child("+ numSlide +")").css({"color":"#ffeb1b"});
	resetLoop = true;

});

setInterval(function(){

	if(resetLoop){
		resetLoop = false;
	}
	else{
		go();
	}

},7000);