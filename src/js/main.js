                                 /* burger menu pour la version mobile et tablette */
/* Sélection des éléments HTML */
let burgerLink = document.getElementById('burgerLink')
let burger = document.getElementById('burger')
let navbar = document.getElementById('navbar')

burgerLink.addEventListener('click', function(e) {
    e.preventDefault()
    burger.classList.toggle('open')
    navbar.classList.toggle('open')
  })
                                /* activer les animations CSS des photos avec du js pur au load de la page */

document.addEventListener('DOMContentLoaded', function() {
   document.getElementById('sliderright').classList.add('sliderright-active');
})
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('sliderright2').classList.add('sliderright-active');
 })
 document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('sliderright3').classList.add('sliderright-active');
 })

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('sliderleft').classList.add('sliderleft-active');
 })


                                    /* compte à rebours des atteliers*/

/* fixer la date de fin du premier atelier*/
let deadline = new Date("Jul 01, 2022 19:00:00").getTime();

/*calculer la différence entre la date actuelle et la date de fin*/
var x = setInterval(function() {
let now = new Date;
let t = deadline - now;
let days = Math.floor(t/(1000*60*60*24));
let hours = Math.floor((t%(1000*60*60*24))/(1000*60*60));
let minutes = Math.floor((t%(1000*60*60))/(1000*60));
let seconds = Math.floor((t%(1000*60))/1000);

/* gerer l'affichage du premier compte à rebours*/
document.getElementById("Atelier Éclair").innerHTML =
"<div><strong>"+days+"<br/>"+"<span>jour(s) </span></div></strong>"+
"<div><strong>"+hours+"<br/>"+"<span>heures(s) </span></div></strong>"+
"<div><strong>"+minutes+"<br/>"+"<span>minute(s) </span></div></strong>"+
"<div><strong>"+seconds+"<br/>"+"<span>seconde(s) </span></div></strong>";

/* gerer l'affichage du message à la fin*/ 
if(t<0){
    clearInterval(x);
    document.getElementById("Atelier Éclair").innerHTML ="DATE EXPIREE";
}
}, 1000);


/* fixer la date de fin du second atelier*/
let deadline2 = new Date("Jul 15, 2022 19:00:00").getTime();

/*calculer la différence entre la date actuelle et la date de fin*/
var x = setInterval(function() {
let now = new Date;
let t2 = deadline2 - now;
let days = Math.floor(t2/(1000*60*60*24));
let hours = Math.floor((t2%(1000*60*60*24))/(1000*60*60));
let minutes = Math.floor((t2%(1000*60*60))/(1000*60));
let seconds = Math.floor((t2%(1000*60))/1000);

/* gerer l'affichage du second compte à rebours*/
document.getElementById("Atelier Pavlova").innerHTML =
"<div><strong>"+days+"<br/>"+"<span>jour(s) </span></div></strong>"+
"<div><strong>"+hours+"<br/>"+"<span>heures(s) </span></div></strong>"+
"<div><strong>"+minutes+"<br/>"+"<span>minute(s) </span></div></strong>"+
"<div><strong>"+seconds+"<br/>"+"<span>seconde(s) </span></div></strong>";

/* gerer l'affichage du message à la fin*/ 
if(t2<0){
    clearInterval(x);
    document.getElementById("Atelier Pavlova").innerHTML ="DATE EXPIREE";
}
}, 1000);


/* fixer la date de fin du troisieme atelier*/
let deadline3 = new Date("Jul 29, 2022 19:00:00").getTime();

/*calculer la différence entre la date actuelle et la date de fin*/
var x = setInterval(function() {
let now = new Date;
let t3 = deadline3 - now;
let days = Math.floor(t3/(1000*60*60*24));
let hours = Math.floor((t3%(1000*60*60*24))/(1000*60*60));
let minutes = Math.floor((t3%(1000*60*60))/(1000*60));
let seconds = Math.floor((t3%(1000*60))/1000);

/* gerer l'affichage du troisième compte à rebours*/
document.getElementById("Atelier Macarons").innerHTML =
"<div><strong>"+days+"<br/>"+"<span>jour(s) </span></div></strong>"+
"<div><strong>"+hours+"<br/>"+"<span>heures(s) </span></div></strong>"+
"<div><strong>"+minutes+"<br/>"+"<span>minute(s) </span></div></strong>"+
"<div><strong>"+seconds+"<br/>"+"<span>seconde(s) </span></div></strong>";

/* gerer l'affichage du message à la fin*/ 
if(t3<0){
    clearInterval(x);
    document.getElementById("Atelier Macarons").innerHTML ="DATE EXPIREE";
}
}, 1000);
