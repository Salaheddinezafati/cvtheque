var bars = document.getElementById("bars");
var nav = document.getElementById("nav");
var img = document.getElementById("img");
var dis1 = document.getElementById("dis1");
var dis2 = document.getElementById("dis2");
var dis3 = document.getElementById("dis3");


bars.onclick = function(){

   
  
   if(nav.style.width=='24%'){  
        nav.style.width='3%';
        dis1.style.display="none";
        dis2.style.display="none";
        dis3.style.display="none";
        img.style.display="none";
        
   }
   else{

    dis1.style.display="inline-block";
    dis2.style.display="inline-block";
    dis3.style.display="inline-block";
    img.style.display="inline-block";
    nav.style.width='24%';
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
