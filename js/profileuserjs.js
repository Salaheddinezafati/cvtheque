var image = document.getElementById("image");
var profile = document.getElementById("profile");
var del = document.getElementById("delete");

image.onclick = function(){
    profile.style.display ="block";
}
del.onclick = function(){
    profile.style.display ="none";
}


var addformation = document.getElementById("add_formation");
var delformation = document.getElementById("dfrm");
var formation = document.getElementById("adfrm");

addformation.onclick = function(){
    formation.style.display = "block";
}

delformation.onclick = function(){
    formation.style.display = "none";
}


var addexperience = document.getElementById("add_experience");
var delexperience = document.getElementById("dexp");
var experience = document.getElementById("adex");

addexperience.onclick = function(){
    experience.style.display = "block";
}

delexperience.onclick = function(){
    experience.style.display = "none";
}


var addecompetence = document.getElementById("comid");
var delcompetence = document.getElementById("decomp");
var competence = document.getElementById("adcomp");

addecompetence.onclick = function(){
    competence.style.display = "block";
}

delcompetence.onclick = function(){
    competence.style.display = "none";
}


var addelangue = document.getElementById("add_langue");
var dellangue = document.getElementById("delang");
var langue = document.getElementById("adla");

addelangue.onclick = function(){
    langue.style.display = "block";
    window.scroll(0, 500);
}

dellangue.onclick = function(){
    langue.style.display = "none";
    window.scroll(0, 800);
}



var addcertif = document.getElementById("add_certif");
var dellcertif = document.getElementById("decert");
var certif = document.getElementById("adcert");

addcertif.onclick = function(){
    certif.style.display = "block";
    window.scroll(0, 300);
}

dellcertif.onclick = function(){
    certif.style.display = "none";
    window.scroll(0, 850);
}


     





