

var filterOpen = false


function filtertoggle(){

	var topbarHolder = document.getElementById("topbar-holder");

	if(filterOpen == false){
		topbarHolder.classList.remove("hidden");
		filterOpen = true;
	}else{
		topbarHolder.classList.add("hidden");
		filterOpen = false;
	}
}