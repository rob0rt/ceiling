function setHref() {
	document.getElementById('vnc').href = window.location.protocol + "//" + window.location.hostname + ":5800";
}

function showValue(newValue) {
	var rd = "lib/volume.php?vol=" + newValue;
	$.ajax({
		type: "GET",
		url: rd
	})
	document.getElementById("range").innerHTML=newValue;
}

function trailer(change, Checkbox) {
	var value;
	if(Checkbox.checked) {
		value = "on";
	}
	else {
		value = "off";
	}
	var url = "/lib/controller.php?type=" + change + "&value=" + value;
	$.ajax({
		type: "GET",
		url: url
	})	
}

function zipalert() {
	alert("Your files are now zipping. Please do not navigate away from this page until your file has finished downloading");
}

$(document).ready(function(){
	$(".toggle_container").hide();
	$("h1.expand_heading").toggle(function(){
		$(this).addClass("active"); 
	}, function () {
		$(this).removeClass("active");
	});
	$("h1.expand_heading").click(function(){
		$(this).next(".toggle_container").slideToggle("slow");
	});
});

function loadVLV() {
	$.ajax({
		url: "/vlcon.php"
	})
}