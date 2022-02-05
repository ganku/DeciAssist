function update (id){
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			
		if (this.readyState == 4 && this.status == 200) {
		  //alert(this.responseText);
		  document.getElementById("content").innerHTML=this.responseText;
		}
	   };
	   xhttp.open("POST", "getInfo.php", true);
	   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	   xhttp.send("PKEY="+id);
}	