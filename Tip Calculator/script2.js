//calculate tip

function calculateTip(){
    var billAmt = document.getElementById("billamt").value;
    var serviceQual = document.getElementById("serviceQual").value;
    var numberOfPeople = document.getElementById("peopleamt").value;
    
    //validate input

    if(billAmt === "" || serviceQual == 0){
        alert("Please enter values");
        return;
    }
  

    //check to see if this input is empty or less than or equal to 1

    if(numberOfPeople === "" || serviceQual <= 0){
        numberOfPeople  = 1;
        document.getElementById("each").style.display == "none";
    }else{
        document.getElementById("each").style.display = "block";
    }


    //calculatin tip

    var total = ((billAmt/100)*serviceQual)/numberOfPeople;

    //round to two decimal places
    total = (Math.round(total*100)/100)*100;

    //next line allows us to always have two digits after desimal point
    total = total.toFixed(2);

    //Display the tip
    document.getElementById("totalTip").style.display = "block";
    document.getElementById("tip").innerHTML = total;

}


//hide the tip amount on load

document.getElementById("totalTip").style.display = "none";
document.getElementById("each").style.display = "none";


//click to call function
document.getElementById("calculate").onclick = function(){
    calculateTip();
}