/*activer les animations au load*/

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


/*compte à rebours*/
/*date de fin*/
let deadline = new Date("Jul 01, 2022 19:00:00").getTime();

/*calculer la diff*/
var x = setInterval(function() {
let now = new Date;
let t = deadline - now;
let days = Math.floor(t/(1000*60*60*24));
let hours = Math.floor((t%(1000*60*60*24))/(1000*60*60));
let minutes = Math.floor((t%(1000*60*60))/(1000*60));
let seconds = Math.floor((t%(1000*60))/1000);
/*afficher le compte à rebours*/

document.getElementById("Atelier Éclair").innerHTML =
"<div><strong>"+days+"<br/>"+"<span>jour(s) </span></div></strong>"+
"<div><strong>"+hours+"<br/>"+"<span>heures(s) </span></div></strong>"+
"<div><strong>"+minutes+"<br/>"+"<span>minute(s) </span></div></strong>"+
"<div><strong>"+seconds+"<br/>"+"<span>seconde(s) </span></div></strong>";
/*afficher le message de fin*/ 
if(t<0){
    clearInterval(x);
    document.getElementById("Atelier Éclair").innerHTML ="DATE EXPIREE";
}
}, 1000);

/*compte à rebours*/
/*date de fin*/
let deadline2 = new Date("Jul 15, 2022 19:00:00").getTime();

/*calculer la diff*/
var x = setInterval(function() {
let now = new Date;
let t2 = deadline2 - now;
let days = Math.floor(t2/(1000*60*60*24));
let hours = Math.floor((t2%(1000*60*60*24))/(1000*60*60));
let minutes = Math.floor((t2%(1000*60*60))/(1000*60));
let seconds = Math.floor((t2%(1000*60))/1000);
/*afficher le compte à rebours*/

document.getElementById("Atelier Pavlova").innerHTML =
"<div><strong>"+days+"<br/>"+"<span>jour(s) </span></div></strong>"+
"<div><strong>"+hours+"<br/>"+"<span>heures(s) </span></div></strong>"+
"<div><strong>"+minutes+"<br/>"+"<span>minute(s) </span></div></strong>"+
"<div><strong>"+seconds+"<br/>"+"<span>seconde(s) </span></div></strong>";

/*afficher le message de fin*/ 
if(t2<0){
    clearInterval(x);
    document.getElementById("Atelier Pavlova").innerHTML ="DATE EXPIREE";
}
}, 1000);

/*compte à rebours*/
/*date de fin*/
let deadline3 = new Date("Jul 29, 2022 19:00:00").getTime();

/*calculer la diff*/
var x = setInterval(function() {
let now = new Date;
let t3 = deadline3 - now;
let days = Math.floor(t3/(1000*60*60*24));
let hours = Math.floor((t3%(1000*60*60*24))/(1000*60*60));
let minutes = Math.floor((t3%(1000*60*60))/(1000*60));
let seconds = Math.floor((t3%(1000*60))/1000);
/*afficher le compte à rebours*/

document.getElementById("Atelier Macarons").innerHTML =
"<div><strong>"+days+"<br/>"+"<span>jour(s) </span></div></strong>"+
"<div><strong>"+hours+"<br/>"+"<span>heures(s) </span></div></strong>"+
"<div><strong>"+minutes+"<br/>"+"<span>minute(s) </span></div></strong>"+
"<div><strong>"+seconds+"<br/>"+"<span>seconde(s) </span></div></strong>";
/*afficher le message de fin*/ 
if(t3<0){
    clearInterval(x);
    document.getElementById("Atelier Macarons").innerHTML ="DATE EXPIREE";
}
}, 1000);