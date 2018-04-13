var topbarHolder = document.getElementById("topbar-holder")
var filterOpen = false

function filtertoggle(){
	if(filtertoggle == false){
		topbarHolder.classList.remove("hidden");
		filterOpen = true;
	}else{
		topbarHolder.classList.add("hidden");
		filterOpen = false;
	}
}