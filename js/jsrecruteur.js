var bars = document.getElementById("bars");
var nav = document.getElementById("nav");



bars.onclick = function(){

  
   if(nav.className=="navbar"){
    nav.classList.remove("navbar");
		nav.classList.add("navbar2");
  
   }
   else{
    nav.classList.remove("navbar2");
		nav.classList.add("navbar");

   }
}



var addrecruteur = document.getElementById("addrectruteur");
var delrec = document.getElementById("delrec");
var recruteur = document.getElementById("adrec");

addrecruteur.onclick = function(){
   recruteur.style.display = "block";
}

delrec.onclick = function(){
   recruteur.style.display = "none";
}




var image = document.getElementById("image");
var profile = document.getElementById("profile");
var del = document.getElementById("delete");

image.onclick = function(){
    profile.style.display ="block";
}
del.onclick = function(){
    profile.style.display ="none";
}






/*-------------------------------------- */
function plus1() {
   // Declare variables
   var table, tr, td, i, txtValue;
  var va = 1; 
   table = document.getElementById("t");
   tr = table.getElementsByTagName("tr");
 
   // Loop through all table rows, and hide those who don't match the search query
   for (i = 0; i < tr.length; i++) {
     td = tr[i].getElementsByTagName("td")[1];
     if (td) {
       txtValue = td.textContent || td.innerText;
       if (txtValue.toUpperCase() >= va ) {
         tr[i].style.display = "";
       } else {
         tr[i].style.display = "none";
       }
     }
   }
 }



 function plus2() {
   // Declare variables
   var table, tr, td, i, txtValue;
  var va = 2; 
   table = document.getElementById("t");
   tr = table.getElementsByTagName("tr");
 
   // Loop through all table rows, and hide those who don't match the search query
   for (i = 0; i < tr.length; i++) {
     td = tr[i].getElementsByTagName("td")[1];
     if (td) {
       txtValue = td.textContent || td.innerText;
       if (txtValue.toUpperCase() >= va ) {
         tr[i].style.display = "";
       } else {
         tr[i].style.display = "none";
       }
     }
   }
 }




 function plus3() {
   // Declare variables
   var table, tr, td, i, txtValue;
  var va = 3; 
   table = document.getElementById("t");
   tr = table.getElementsByTagName("tr");
 
   // Loop through all table rows, and hide those who don't match the search query
   for (i = 0; i < tr.length; i++) {
     td = tr[i].getElementsByTagName("td")[1];
     if (td) {
       txtValue = td.textContent || td.innerText;
       if (txtValue.toUpperCase() >= va ) {
         tr[i].style.display = "";
       } else {
         tr[i].style.display = "none";
       }
     }
   }
 }



 function plus4() {
   // Declare variables
   var table, tr, td, i, txtValue;
  var va = 4; 
   table = document.getElementById("t");
   tr = table.getElementsByTagName("tr");
 
   // Loop through all table rows, and hide those who don't match the search query
   for (i = 0; i < tr.length; i++) {
     td = tr[i].getElementsByTagName("td")[1];
     if (td) {
       txtValue = td.textContent || td.innerText;
       if (txtValue.toUpperCase() >= va ) {
         tr[i].style.display = "";
       } else {
         tr[i].style.display = "none";
       }
     }
   }
 }




 function plus5() {
   // Declare variables
   var table, tr, td, i, txtValue;
  var va = 5; 
   table = document.getElementById("t");
   tr = table.getElementsByTagName("tr");
 
   // Loop through all table rows, and hide those who don't match the search query
   for (i = 0; i < tr.length; i++) {
     td = tr[i].getElementsByTagName("td")[1];
     if (td) {
       txtValue = td.textContent || td.innerText;
       if (txtValue.toUpperCase() >= va ) {
         tr[i].style.display = "";
       } else {
         tr[i].style.display = "none";
       }
     }
   }
 }