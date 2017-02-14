window.onload = function () {
    
// Get the modal
    var modal = ["m1", "m2", "m3", "m4", "m5"];
    for (var i = 0; i < modal.length; i++){
        document.getElementById(modal[i]);
    } 
      
    
// Get the button that opens the modal
    var btn = ["btn1", "btn2", "btn3", "btn4", "btn5", "btn6"]; 
      for (var i = 0; i < btn.length; i++){
        document.getElementById(btn[i]);
    }

// When the user clicks on the button, open the modal 
  
for (var i = 0; i < btn.length; i++)
{
btn[i].onclick = function() {
    modal[i].style.display = "block";
}
}

  // Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
  
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal[i].style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal[i].style.display = "none";
    }
}
}