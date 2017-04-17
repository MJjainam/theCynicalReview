function blocked()
{
	alert("Please confirm you are above 18 to access this category");
}
timer = null;
function suggest(){
	if(timer){
		clearTimeout(timer);
	}
	timer = setTimeout(populateMovies,1000);
}
function populateMovies(){
	var searchString = document.getElementById("mainSearch").value;
	if(searchString!="")
	{
		xhr = new XMLHttpRequest();
		xhr.onreadystatechange = populateMovies1;
		xhr.open("GET","../getList.php?search="+searchString,true);
		xhr.send();
	}
}
function populateMovies1(){
	if(xhr.readyState==4 && xhr.status==200){
		var doc = JSON.parse(xhr.responseText);
		res = document.getElementById("results");
		res.innerHTML = "";
		for(var i=0;i<doc.length;i++){
			res.innerHTML += "<p class=\"randis\"><a href=\"search/"+doc[i][0]+"\">"+doc[i][0]+"</a></p>";
		}
	}
}