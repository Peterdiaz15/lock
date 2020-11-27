$( document ).ready(function() {
var height = $(window).height();
var width = $(window).width();

//$(".container-fluid").height(height);
console.log(height);

$( window ).resize(function() {
height = $(window).height();
width = $(window).width();
//$(".container-fluid").height(height);
 // console.log(height);
});
});