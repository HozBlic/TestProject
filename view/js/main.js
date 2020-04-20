window.onload = function(e){
	// Add event listener for window width change 
   	var mediaQueryList = window.matchMedia("(max-width: 960px)");
	mediaQueryList.addListener(handleWidthChange);
	handleWidthChange(window.matchMedia("(max-width: 960px)"));
};

function lightup() {
	/*gets first id from active (focused element)*/
	$id = document.activeElement.id;
	var stringArray = $id.split(" ");
	$id = stringArray[0];
	/*creates id for label*/
	$idlabel = $id + "label";
	var idlabel1 = $idlabel;
	/*creates id for icon*/
	$idicon = $id + "icon"
	var idicon1 = $idicon;
	document.getElementById(idicon1).style.display = "inline";
	document.getElementById(idlabel1).style.textTransform = "uppercase";
}
function lightdown(value, id) {
	var stringArray = id.split(" ");
	$id = stringArray[0];
	/*creates id for label*/
	$idlabel = $id + "label";
	var idlabel1 = $idlabel;
	/*creates id for icon*/
	$idicon = $id + "icon"
	var idicon1 = $idicon;
	if (value != 0) {
		document.getElementById(idicon1).style.display = "inline";
		document.getElementById(idlabel1).style.textTransform = "uppercase";
	} else {
		document.getElementById(idicon1).style.display = "none";
		document.getElementById(idlabel1).style.textTransform = "capitalize";
	}
}
// changeActiveContent(button identifier string)
// slides the active content window and swaps the inner content
function changeActiveContent(clicked){
	// set movement axis
	var dimension = 'X'
	if(window.matchMedia('(max-width: 960px)').matches){
		dimension = 'Y'
	}
	var contentE = document.getElementsByClassName("whitepart")
	// move the active content to the left &
	// display a sign-up window
	if(clicked == 'signup'){
		var oldContE = document.getElementsByClassName("active-right")
		var newContE = document.getElementsByClassName("active-left")
		contentE[0].style.transform = 'translate'+dimension+'(-420px)';
	}else if(clicked == 'login'){
	// move the active content to the right &
	// display a login window
		var oldContE = document.getElementsByClassName("active-left")
		var newContE = document.getElementsByClassName("active-right")
		contentE[0].style.transform = 'translate'+dimension+'(0px)';
	}else{
		return;
	}
	// swap visibility
	oldContE[0].className += " invisible"
	setTimeout(function() {
		oldContE[0].className += " hidden"
		newContE[0].classList.remove("hidden");
	}, 500);
	setTimeout(function() {
		newContE[0].classList.remove("invisible");	
	}, 600);
}
// handleWidthChange(mql)
// handle width change modifying
// the active content transformation
function handleWidthChange(mql) {
	var contentE = document.getElementsByClassName("whitepart")
	var transformation = contentE[0].style.transform;
	if(	transformation == null || transformation ==  undefined || 
	   	transformation ==  ''){
		return;
	}
	if (mql.matches) {
        // window width went small
		if(transformation == 'translateX(-420px)'){
			contentE[0].style.transform = 'translateY(-420px)'
		}
    }else{
    	// window width got big
    	if(transformation == 'translateY(-420px)'){
			contentE[0].style.transform = 'translateX(-420px)'
		}
    }
}

function addMore() {
	$("<DIV>").load("../view/input.php", function () {
		$("#custom-input-container").append($(this).html());
	});
}