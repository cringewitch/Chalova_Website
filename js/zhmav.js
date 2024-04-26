var count = 0;
document.getElementById("myButton").onclick = function(){
	count++;
	if (count % 2 == 0) { 
        document.getElementById("demo").innerHTML = "";
	} else {
		var img = document.createElement("img");
        img.src = "../Chalova_Website/image/photo_2024-04-22_01-15-30.jpg";
        document.getElementById("demo").appendChild(img);
	}
}