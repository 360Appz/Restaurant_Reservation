
function changeImage()
{
  //Gets the img ID from html
  var image = document.getElementById("bulb");
  
  //If the bulb is on, the click will off the bulb
    if (image.src.match("lighton")) 
    {
      image.src = "lightoff.png";
    } 
    else 
    {//If the bulb is off, the click will on the bulb
      image.src = "lighton.png";
    }  
}
