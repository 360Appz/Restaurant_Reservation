// This script fills in the 
//restaurant ID via the button to the form

function getRestaurantID(ID, ID2)
{
   
    
    var ID = document.getElementById("id1");
    var ID2 = document.getElementById("id2");
    var bookingID = "";
    if(bookingID == ID)
    {
       sessionStorage.ID =  ID;
       document.getElementById("refnumber").innerText = sessionStorage.ID;
       //$("#refnumber").val(sessionStorage.ID);
     
    }
    else if(bookingID == ID2)
    {
        sessionStorage.ID = ID2;
        document.getElementById("b2").value = sessionStorage.ID2;
    }

}

    

//Main function when script is executed
function init()
{
   getRestaurantID();
}
window.onload = init;