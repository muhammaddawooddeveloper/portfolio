
let  navbar = document.querySelector('#navbar');
document.querySelector('#cross').style.display= 'none';

document.querySelector('.humburger').addEventListener("click" , function(){

document.querySelector('#navbar').classList.toggle('navbargo')
if( document.querySelector('#navbar').classList.contains('navbargo') )
{
document.querySelector('#cross').style.display= 'none';

setTimeout(() => {
    document.querySelector('#hum').style.display= 'inline';
}, 500);
}
else {
setTimeout(() => {
    document.querySelector('#cross').style.display= 'inline';

}, 500);
document.querySelector('#hum').style.display= 'none' ;
}
});
let body= document.getElementsByTagName("body")[0];
let c= document.getElementsByClassName("container-fluid")[1];
let night = document.getElementById("night-mode")
let content = document.getElementsByClassName("sidebar")[0];
// console.log(content)
let main = document.getElementById("main")
night.addEventListener("click" ,function(){

    // night.classList.toggle("active");
    body.classList.toggle("night");
    content.classList.toggle("night");
    c.classList.toggle("night");

});
