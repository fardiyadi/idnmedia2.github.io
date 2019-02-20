function closeDoor() {
  var element = document.getElementById("door_ads");
    element.classList.remove("doorOpen");
    element.classList.add("doorOpen_nodelay");
  if (element.classList) { 
    element.classList.toggle("doorClose");
  } else {
    var classes = element.className.split(" ");
    var i = classes.indexOf("doorClose");

    if (i >= 0) 
      classes.splice(i, 1);
    else 
      classes.push("doorClose");
      element.className = classes.join(" "); 

  }
}