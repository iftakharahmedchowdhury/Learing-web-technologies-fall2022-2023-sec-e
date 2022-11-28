function pharmaAddProductFormValidation(){

    var Pname=document.getElementById("pharmaPN").value;
    var Pcost=document.getElementById("pharmaPC").value;
    var Pstatus=document.getElementById("pharmaPS").value;

    if (Pname=="" || Pcost=="" || Pstatus=="") {
        //alert("All input filed must be filled out");
        //document.getElementById("alertPart").disabled = true;
       // document.getElementById("alertPart").style.visibility = "visible";
   
       document.getElementById("alertPart").innerHTML= "All input filed must be filled out";
       return false;
    
        
    }
    else{
        /* document.getElementById("alertPart").style.visibility = "hidden"; */
    }
  

}
