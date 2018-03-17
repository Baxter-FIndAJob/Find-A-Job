var recentSearchHolder = document.getElementById("recent-search-holder");
var filterHolder = document.getElementById("filter-holder")
var searchLocationHolder = document.getElementById("search-location-holder")
var searchJobHolder = document.getElementById("search-job-holder")
var latestLocation;
var latestJob;

function toggleLevel(el){
	var lvl1 = document.getElementById("lvl1");
	var lvl2 = document.getElementById("lvl2");
	var lvl3 = document.getElementById("lvl3");
	var lvl4 = document.getElementById("lvl4");
	var lvl5 = document.getElementById("lvl5");

		lvl1.classList.remove("active");
		lvl2.classList.remove("active");
		lvl3.classList.remove("active");
		lvl4.classList.remove("active");
		lvl5.classList.remove("active");
		
		el.classList.add("active");	
};

function createTag(dom, string, parent, type){
	var tagParent = parent
		if(tagParent == null){
			console.log('fail')
			console.log(string)
			return
		};
	var newElement = document.createElement(dom);
		newElement.className = type + " " + string;
		newElement.textContent = string;


	if(tagParent == "recentSearchHolder"){
		recentSearchHolder.insertBefore(newElement,recentSearchHolder.firstChild);
	}else{	
	if(tagParent == "searchLocationHolder"){
		newElement.setAttribute("onclick","removeTag(this," + '"' + type + '"'+")");
		searchLocationHolder.appendChild(newElement);
		latestLocation = string;
	}else{
	if(tagParent == "searchJobHolder"){
		newElement.setAttribute("onclick","removeTag(this," + '"' + type + '"'+")");
		searchJobHolder.appendChild(newElement);
		latestJob = string;
	}
	}
	}	
};


/*
function removeTag(tag){
	var selectedTag = tag;
	console.log(selectedTag.className)
		if(selectedTag.className == "filter"){
			filterHolder.removeChild(selectedTag);
		}else{ if(selectedTag.className == "search"){
			recentSearchHolder.removeChild(selectedTag);	
		}else{
			console.log('the element' + tag + ', was not found try again')
		}
		
};
*/

function removeTag(tag,type){
	var selectedTag = tag;
		console.log(type)

		if(type == "location"){
			searchLocationHolder.removeChild(selectedTag);
		}else{
		if(type == "job"){
			searchJobHolder.removeChild(selectedTag);
		}else{
			console.log('funny meme')
		};
	};
};



createTag("a","Portland, ME","searchLocationHolder", "location" )
createTag("a","Sandwich Artist","searchJobHolder", "job" )


createTag("a",latestLocation,"recentSearchHolder", "search" )
createTag("a",latestJob,"recentSearchHolder", "search" )


